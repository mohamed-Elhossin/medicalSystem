<?php
include './shared/head.php';
include './genral/connect.php';
session_start();



$message = null;
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hashPassword = sha1($password);
  $selectOne = "SELECT * FROM `admin`  where `email` = '$email' and `password` ='$hashPassword' ";
  $sOne = mysqli_query($conn, $selectOne);
  $numRows =   mysqli_num_rows($sOne);

  $allData = mysqli_fetch_assoc($sOne);


  if ($numRows > 0) {
    $_SESSION['admin'] = [
      "id" => $allData['id'],
      "email" => $email,
      "image" => $allData['image'],
      "rule" => $allData['rule'],
    ];
    header("location: /medical/admin");
  } else {
    $message = "ERROR USER NAME OR PASSWORD";
  }
}

// print_r($_SESSION);
?>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Medical System</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your Email & password to login</p>
                </div>
                <?php if ($message != null) : ?>
                  <div class="alert alert-danger">
                    <?= $message ?>
                  </div>
                <?php endif; ?>

                <form class="row g-3 needs-validation" method="post">

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">ُEmail</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="email" name="email" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your Email.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>


                  <div class="col-12">
                    <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                  </div>
             
                </form>

              </div>
            </div>


          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->

<?php
include './shared/footer.php';
include './shared/script.php';
?>