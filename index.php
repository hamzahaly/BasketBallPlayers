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
?>

<html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
      <?php echo "Hello, World!";?>
   </body>

</html>