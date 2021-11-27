<?php
    require_once 'header.php';
    require_once 'utils/consult.view.php';
?>
<div class="d-flex justify-content-center" style="height:100vh; width:100vw;">
    <div class="row align-self-center">
        <div class="col-lg-12 text-center mb-2">
            <?php
                if(isset($_GET['msg'])){   
                    echo $_GET['msg'];
                }
            ?>
            <h3 class="text-primary font-weight-bold">Consultation Record</h3>
        </div>
        <div class="col-lg-12" style="height:50vh; overflow-y:scroll">
            <table class="shadow table table-striped table-bordered border-secondary text-center">
                <thead class="table-dark" style="position: sticky; top: 0; z-index: 1;">
                    <tr>
                        <th scope="col">Ref#</td>
                        <th scope="col">Name</td>
                        <th scope="col">Consultation</td>
                        <th scope="col">Time</td>
                        <th scope="col">Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($records)){
                        foreach($records as $rec){ ?>
                        <tr>
                            <td><?= $rec['ref'] ?></td>
                            <td><?= $rec['name'] ?></td>
                            <td><?= $rec['consultation'] ?></td>
                            <td><?= $rec['time'] ?></td>
                            <td><?= $rec['status'] ?></td>
                        </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <form class="p-2" method="GET" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="width: 30rem">
                <p class="text-primary">Sort By: </p>
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Ref">
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Name">
                <input class="button btn-success p-1" name="sort" type="submit" value="Consultation">
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Time">
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Status">
            </form>
            <form class="p-2 shadow" method="POST" action="utils/consult.status.php" style="width: 25rem">
                <label for="ref" class="form-label text-primary">Ref#</label>
                <input type="text" class="form-control mb-3" id="ref" name="ref" placeholder="Referece no." required>
                <button class="button btn-success p-1" name="submit" type="submit">Mark as Complete</button>
            </form>
        </div>
    </div>
</div>
<?php
    require_once 'footer.php';