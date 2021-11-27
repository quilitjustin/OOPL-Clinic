<?php
    require_once 'header.php';
    require_once 'utils/patient.view.php';
?>
<div class="d-flex justify-content-center" style="height:100vh; width:100vw;">
    <div class="row align-self-center">
        <div class="col-lg-12 text-center mb-2">
            <?php
                if(isset($_GET['msg'])){   
                    echo $_GET['msg'];
                }
            ?>
            <h3 class="text-primary">Patient Record</h3>
        </div>
        <div class="col-lg-12" style="height:50vh; overflow-y:scroll">
            <table class="shadow table table-striped table-bordered border-secondary text-center">
                <thead class="table-dark" style="position: sticky; top: 0; z-index: 1;">
                    <tr>
                        <th scope="col">Name</td>
                        <th scope="col">Address</td>
                        <th scope="col">Age</td>
                        <th scope="col">Gender</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($records)){
                        foreach($records as $rec){ ?>
                        <tr>
                            <td><?= $rec['name'] ?></td>
                            <td><?= $rec['address'] ?></td>
                            <td><?= $rec['age'] ?></td>
                            <td><?= $rec['gender'] ?></td>
                        </tr>
                    <?php } }?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <form class="p-2" method="GET" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="width: 25rem">
                <p class="text-primary">Sort By: </p>
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Name">
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Address">
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Age">
                <input class="button custom-btn-width btn-success p-1" name="sort" type="submit" value="Gender">
            </form>
            <form class="p-2 shadow-lg" method="POST" action="utils/patient.delete.php" style="width: 25rem">
                <label for="uid" class="form-label text-primary">Delete Patient: </label>
                <input type="text" class="form-control mb-3" id="uid" name="uid" placeholder="Name" required>
                <button class="button btn-danger p-1" name="submit" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
<?php
    require_once 'footer.php';
?>

