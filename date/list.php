<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include_once "../genral/functions.php";
$select = "SELECT * FROM `dates`";
$s = mysqli_query($conn, $select);
$message = null;


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
            <h5 class="card-title"> List Date page </h5>
            <div class="card-body table-striped">
                <table class="table datatable">
                    <tr>
                        <th> ID </th>
                        <th>date</th>

                    </tr>
                    <?php foreach ($s as $data) : ?>
                        <tr>
                            <td> <?= $data['id'] ?></td>
                            <td> <?= $data['day'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include '../shared/footer.php';
include '../shared/script.php';
?>