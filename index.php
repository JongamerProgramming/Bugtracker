<?php
require_once("config/config.php");

if(isset($_GET['p'])) {
    $p = htmlspecialchars($_GET['p']);
} else {
    $p = "information";
}

if(isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
} else {
    $id = "-1";
}

?>

<!doctype HTML>
<html lang="en">

    <head>

        <title><?php echo($title); ?></title>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
        <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">

        <link rel="stylesheet" href="assets/css/style.css">

        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    </head>

    <body>

    <?php include("templates/header.php"); ?>
    <div class="main-container container">
        <?php include("templates/" . $p . ".php"); ?>
    </div>
    <?php include("templates/footer.php"); ?>

    </body>

</html>

