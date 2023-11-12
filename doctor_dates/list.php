<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include_once "../genral/functions.php";
$select = "SELECT * FROM `joindate`";
$s = mysqli_query($conn, $select);
$message = null;

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `doctor-dates` WHERE id = $id";
    $d = mysqli_query($conn, $delete);
    testMessage($d, "Delete Doctor-dates");
    path("doctor_dates/list.php");
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
            <h5 class="card-title"> List Doctor_Dates page </h5>
            <div class="card-body table-striped">
                <table class="table datatable ">
                    <tr>
                        <th> ID </th>
                        <th>Name</th>
                        <th>day</th>
                    </tr>
                    <?php foreach ($s as $data) : ?>
                        <tr>
                            <td> <?= $data['dateid'] ?></td>
                            <td> <?= $data['name'] ?></td>
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