<?php

    $query = "select * from compendium;";
    $result = mysqli_query($connection, $query);
?>

<div class="card bg-light">
    <h4 class="card-header"><span>CofA</span> - Compendium of Acronyms</h4>
    <div class="card-body">
        <div class="conteiner">
            <div class="row">
                <div class="col">
                    <p class="card-text">Está em dúvida no que significa uma sigla? Pesquise aqui!</p>
                </div>
                <div class="col col-3">
                    <a href="index.php?page=insertAcronym" class="btn btn-success"> Insert new Acronym</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
