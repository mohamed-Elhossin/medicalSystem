<?php
include './shared/head.php';



?>

<main>
  <a href="./index.php" class="btn btn-infi">Go To Home</a>
  <div class="container">

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h1>404</h1>
      <h2>The page you are looking for doesn't exist.</h2>
      <a class="btn" href="./index.php">Back to home</a>
      <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">

    </section>

  </div>
</main><!-- End #main -->



<?php
include './shared/footer.php';
include './shared/script.php';
?>