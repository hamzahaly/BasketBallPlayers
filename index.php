<?php
    require_once 'connection.php';
    require_once 'models/player-model.php';

    if(isset($_GET['llName'])) {
        $q = $_GET['llName'];
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

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <!-- Icons for Materialize -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
          
</head>
<body ng-app="basketballApp">
    <div class="container">
        <h1>Basketball Players</h1>
        <div class="row">
            <div class="input-field col s6">
                <form method="get">
                    <input id="name" type="text" class="validate" value="<?= htmlentities($q)?>">
                    <label class="active" for="first_name2">Name</label>
                    <button class="btn waves-effect waves-light" type="submit" id="search" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <table>
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <?php foreach ((array) $matches as $match): ?>
            <tbody>
                <tr>
                    <td><?= $name = htmlentities($match['llName']); ?> </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
    


<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
