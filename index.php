<?php

    include_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>CofA - Compendium Of Acronyms</title>
    <meta charset="UTF-8">

    <?php 
        include_once('scriptsHead.php');
        include_once('stylesHead.php');
    ?>

</head>

<body>
    <?php include_once('header.php'); ?>

    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else{
            $page = 'home';
        }
        include_once('view/' . $page . '.php');
    ?>
</body>
