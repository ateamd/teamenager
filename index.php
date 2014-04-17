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
        <div id="container">
        <div class="content">
            <div class="top_block header">
                <?php include 'section/menu.php'; ?>
            </div>
            <div class="top_block panel">
                <?php include 'section/panel.php'; ?>
            </div>
            <div class="top_block main">
                <div class="content">
                    <?php include 'section/main_side.php'; ?>
                    <div class="background rightbar"></div>
                    <div class="right_block rightbar">
                        <?php include 'section/right_bar.php'; ?>
                    </div>
                </div>
            </div>
            <div class="top_block footer">
                <?php include 'section/footer.php'; ?>
            </div>
        </div>
        </div>
    </body>
</html>
