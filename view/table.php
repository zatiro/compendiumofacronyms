<?php
    $columnsTitles = array('Acronym', 'Description');
    $columnsNames = array('acronym', 'description');

    $query = "select * from compendium;";
    $result = mysqli_query($connection, $query);

    $existsColumnActions = False;
?>

<table class='table table-hover table-striped' id="compendium">
    <thead>
        <tr>
            <?php
                foreach($columnsTitles as $title){
                    echo '<th>' . $title . '</th>';
                }
                if($existsColumnActions){
                    echo '<th>Actions</th>';
                }
            ?>
        </tr>
    </thead>

    <tbody>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo '<tr>';
                foreach($columnsNames as $name){
                    echo '<td>' . $row[$name] . '</td>';
                }
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#compendium').DataTable({
            "paging": false,
            "ordering": true,
            "scrollY": '60vh'
        });
    } );
</script>