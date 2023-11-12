<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
$message = null;

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashPassword = sha1($password);
    $rule =  $_POST['rule'];
    // Image code 
    $image_name =   rand(0, 1000) . rand(0, 1000) . $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $location = "./upload/$image_name";
    move_uploaded_file($tmp_name,  $location);
    // In DataBase 
    $insert = "INSERT INTO `admin` values(null , '$email','$hashPassword','$image_name' ,  $rule)";
    $i = mysqli_query($conn, $insert);
    $message = testMessage($i, "Insert New Admin");
}


auth();


/**
 * 
 * 
 */
$selectRules = "SELECT * FROM `rules`";
$sRule = mysqli_query($conn, $selectRules);
?>


<main id="main" class="main">

    <div class="container">

        <?php

        if ($message != null) : ?>
            <div class="alert alert-success">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Add Admin page </h5>

                <!-- Custom Styled Validation -->
                <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Image Profile</label>
                        <input type="file" name="image" class="form-control" id="image" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Admin Rule</label>
                        <select name="rule" class="form-control">
                            <?php foreach ($sRule as $data) : ?>
                                <option value="<?= $data['id'] ?>"> <?= $data['rule_description'] ?> </option>
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