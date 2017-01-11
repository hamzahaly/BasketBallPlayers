<?php
    require_once 'connection.php';
    require_once 'models/player-model.php';

    if(isset($_GET['player'])) {
        $q = $_GET['title'];
    } else {
        $q = '';
    }

    $conn = getConnection();
    $playerModel = new Players($conn);

    $matches = $playerModel->search($q);

    date_default_timezone_set("America/Los_Angeles");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basketball Players</title>
</head>
<body>
    <h1>Basketball Players</h1>
    <form>
    <input type="search" name="name" placeholder="enter a name" value="<?= htmlentities($q)?>"></form>
</body>
</html>
