<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include_once "../genral/functions.php";
$select = "SELECT * FROM `doctor` ";
$s = mysqli_query($conn, $select);
$message = null;

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Read files Before Delete
    $selectOne = "SELECT * FROM `doctor` where id = $id ";
    $sOne = mysqli_query($conn, $selectOne);
    $row = mysqli_fetch_assoc($sOne);

    //  Delete Image by ID
    $image =  $row['image'];
    unlink("./upload/$image");

    // Delete all Data
    $delete = "DELETE FROM `doctor` WHERE id = $id";
    $d = mysqli_query($conn, $delete);
    testMessage($d, "Delete Doctor");
    path('doctors/list.php');
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
            <h5 class="card-title"> List Doctor page </h5>
            <div class="card-body table-striped">
                <table class="table datatable">
                    <tr>
                        <th> ID </th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>image</th>
                        <th colspan="2">action</th>
                    </tr>
                    <?php foreach ($s as $data) : ?>
                        <tr>
                            <td> <?= $data['id'] ?></td>
                            <td> <?= $data['name'] ?></td>
                            <td> <?= $data['level'] ?></td>

                            <td> <img width="40" src="./upload/<?= $data['image'] ?>" alt=""></td>
                            <th> <a href="<?= url("doctors/list.php") ?>?delete=<?= $data['id'] ?>" class="btn btn-danger">Remove</a> </th>
                            <th> <a href="<?= url("doctors/edit.php") ?>?edit=<?= $data['id'] ?>" class="btn btn-primary">Edit</a> </th>
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