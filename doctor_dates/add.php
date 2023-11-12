<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
$selectDoctor = "SELECT * FROM `doctor` ";
$doctors = mysqli_query($conn, $selectDoctor);

$Selectdates = "SELECT * FROM `dates` ";
$dates = mysqli_query($conn, $Selectdates);

$message = null;

if(isset($_POST['send'])){
    $doctorID = $_POST['doctorId'];
    $dateId = $_POST['dateId'];
    $insert= "INSERT INTO `doctor-dates` VALUES (null , $doctorID ,$dateId)";
    $i = mysqli_query($conn, $insert);
    $message = testMessage($i, "Insert To DataBase");
}

auth();
?>

<main id="main" class="main">

    <div class="container">
        <?php if ($message != null) : ?>
            <div class="alert alert-success">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Add Doctor page </h5>

                <!-- Custom Styled Validation -->
                <form class="row g-3 needs-validation" method="POST">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Doctor</label>
                        <select name="doctorId" class="form-control" id="">
                            <?php foreach ($doctors as $data) : ?>
                                <option value="<?= $data['id'] ?>"> <?= $data['name']   ?> </option>
                            <?php endforeach; ?>
                        </select>

                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Dates</label>
                        <select name="dateId" class="form-control" id="">
                            <?php foreach ($dates as $data) : ?>
                                <option value="<?= $data['id'] ?>"> <?= $data['day']   ?> </option>
                            <?php endforeach; ?>
                        </select>

                    </div>


                    <div class="col-12">
                        <button name="send" class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form><!-- End Custom Styled Validation -->

            </div>
        </div>

    </div>
</main>

<?php
include '../shared/footer.php';
include '../shared/script.php';
?>