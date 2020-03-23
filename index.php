<?php

    include_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>CofA - Compendium Of Acronyms</title>
    <meta charset="utf-8">

    <?php 
        include_once('scriptsHead.php');
        include_once('stylesHead.php');
    ?>

</head>

<body>
    <?php include_once('header.php'); ?>

    <div class='page'>
        <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 'home';
            }
            include_once('view/' . $page . '.php');
        ?>
    </div>
</body>
