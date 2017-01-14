<?php
class Players {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function search($q) {
        $q = strtolower($q);
        if(strlen($q) == 0) {
            $sql = "SELECT * FROM `TABLE 1`";
        } else {
            $sql = "SELECT * FROM `TABLE 1` WHERE `llName` LIKE `%$q%` ";
        }
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($q));
        if (!$success) {
            var_dump($stmt->errorInfo());
            return false;
        } else {
            return $stmt->fetchall();
        }
    }
}

?>