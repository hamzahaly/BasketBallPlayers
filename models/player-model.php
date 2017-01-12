<?php
class Players {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function search($q) {
        $sql = "SELECT * FROM 'TABLE 1' WHERE llName LIKE %$q%";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q));
        if (!$success) {
            return false;
        } else {
            return $stmt->fetchall();
        }
    }
}

?>