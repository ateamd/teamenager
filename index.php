<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TeaMenager - Menedżer w twojej Firmie.</title>
        <link href="style/main.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="img/ico.png"/>
    </head>

    <body>
    <div class="container">
        <div id="menu">
            <?php include 'section/menu.php'; ?>
        </div>

        <div id="panel">
            <?php include 'section/panel.php'; ?>
        </div>

        <div id="main_side">
            <?php include 'section/main_side.php'; ?>
        </div>

        <div id="right_bar">
            <?php include 'section/right_bar.php'; ?>
        </div>

        <div id="footer">
            <?php include 'section/footer.php'; ?>

        </div>
    </body>
</html>