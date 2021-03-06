<div class="card">
    <h5 class="card-header">Insert New Acronym</h5>
    <div class="card-body">

        <form method="post" action="index.php?page=insertAcronymProcess">
            <div class="row">

                <div class="col">
                    <label for="formGroupExampleInput">The acronym</label>
                    <input type="text" class="form-control" id="acronym" name="acronym" placeholder="Ex: PN" required>
                </div>

                <div class="col">
                    <label for="description">means</label>
                    <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-primary" placeholder="Ex: Part Number ou Número da Peça">Insert</button>
        </form>

        <br>

        <?php
            if(isset($_GET['result'])){
                if($_GET['result'] == 'success'){
                    echo "<div class='alert alert-success' role='alert'>
                            Successfully inserted!
                        </div>";
                }
                elseif($_GET['result'] == 'exists'){
                    echo "<div class='alert alert-danger' role='alert'>
                            Acronym already inserted!
                        </div>";
                }
                else{
                    echo "<div class='alert alert-danger' role='alert'>
                            Error while inserting!
                        </div>";
                }
            }
        ?>
    </div>
</div>
