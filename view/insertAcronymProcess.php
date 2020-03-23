<?php
    $acronym = addslashes(trim(strtoupper($_POST['acronym'])));
    $description = addslashes(trim($_POST['description']));

    $query = "SELECT COUNT(*) from compendium WHERE acronym = '$acronym';";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    $count = $row['COUNT(*)'];

    // echo $query . " - " . $row . " - " . $count;

    // exit();

    if($count > 0){
        header('location:index.php?page=insertAcronym&result=exists');
    }
    else{
        $query = "INSERT INTO compendium(acronym, description) VALUES ('$acronym', '$description');";
        $result = mysqli_query($connection, $query);

        // echo $query . $result;

        // exit();

        if($result){
            header('location:index.php?page=insertAcronym&result=success');
        }
        else{
            header('location:index.php?page=insertAcronym&result=error');
        }
    }


    

?>
