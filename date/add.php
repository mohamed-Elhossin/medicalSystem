<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';


// htmlspecialchars()

$errors = [];
$message = null;
$name = "";
$level = "";
if (isset($_POST['send'])) {
    $name = fillterValidation($_POST['name']);

    $level = fillterValidation($_POST['level']);
    //  Image Code
    $image_name =  rand(0, 1000) .  rand(0, 1000) . $_FILES['image']['name'];
    $tmp_name   = $_FILES['image']['tmp_name'];
    $location = "./upload/$image_name";
    $image_size = $_FILES['image']['size'];
    $image_type = $_FILES['image']['type'];
    if (stringValidation($name)) {
        $errors[] = "You must Enter Valid Name 5 char to 20 char";
    }
    if (numberValidation($level)) {
        $errors[] = 'you Must Enter Lavel valid number';
    }

    if (fiter_sizr_file($image_name, $image_size, 1)) {
        $errors[] = 'you Must Enter image = 1 miga';
    }

    if (filterType_file($image_type, "image/jpeg", "image/png", "image/jpg")) {
        $errors[] = 'you Must Enter image type jpg , png , jpeg';
    }


    if (empty($errors)) {
        move_uploaded_file($tmp_name, $location);
        $insert = "INSERT INTO doctor VALUES (NULL , '$name', '$level','$image_name')";
        $i = mysqli_query($conn, $insert);
        $message = testMessage($i, "Insert To DataBase");
    }
}
auth(3);





?>


<main id="main" class="main">

    <div class="container">

        <?php

        if (!empty($errors)) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li> <?= $error  ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if ($message != null) : ?>
            <div class="alert alert-success">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Add Doctor page </h5>

                <!-- Custom Styled Validation -->
                <form autocomplete="FALSE" class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Full name</label>
                        <input type="text" value="<?= $name ?>" class="form-control" id="validationCustom01" name="name">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Level</label>
                        <input type="text" value="<?= $level ?>" name="level" class="form-control" id="level">

                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">

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