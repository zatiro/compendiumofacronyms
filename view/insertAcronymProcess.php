<?php
    $acronym = strtoupper($_POST['acronym']);
    $description = $_POST['description'];

    $query = "INSERT INTO compendium('acronym', 'description') VALUES ('$acronym', '$description');";
    $result = mysqli_query($connection, $query);

    // echo $query;

    // exit();

    if($result){
        header('location:index.php?page=insertAcronym&result=success');
    }
    else{
        header('location:index.php?page=insertAcronym&result=error');
    }

?>
