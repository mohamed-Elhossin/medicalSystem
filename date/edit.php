<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';

$message = null;

if ($_GET['edit']) {
    $id = $_GET['edit'];
    $select = "SELECT * FROM `doctor` where id =$id ";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $level = $_POST['level'];

        //  Image Code
        if (empty($_FILES['image']['name'])) {
            $image_name = $row['image'];
        } else {
            $oldImage = $row['image'];
            unlink("./upload/$oldImage");
            $image_name =  rand(0, 1000) .  rand(0, 1000) . $_FILES['image']['name'];
            $tmp_name   = $_FILES['image']['tmp_name'];
            $location = "./upload/$image_name";
            move_uploaded_file($tmp_name, $location);
        }


        $update = " UPDATE doctor SET  `name` = '$name' , `level` = '$level' ,image ='$image_name' where id = $id";
        mysqli_query($conn, $update);
        path("doctors/list.php");
    }
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
                <h5 class="card-title"> Update Doctor page </h5>

                <!-- Custom Styled Validation -->
                <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Full name</label>
                        <input type="text" value="<?= $row['name'] ?>" class="form-control" id="validationCustom01" name="name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>



                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Level</label>
                        <input type="text" value="<?= $row['level'] ?>" name="level" class="form-control" id="level" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">

                    </div>
                    <div class="col-12">
                        <button name="send" class="btn btn-warning" type="submit">Update form</button>
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