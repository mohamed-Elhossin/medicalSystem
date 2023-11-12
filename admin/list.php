<?php
include '../genral/connect.php';
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include_once "../genral/functions.php";
$select = "SELECT * FROM `admin` ";
$s = mysqli_query($conn, $select);
$message = null;
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $selectOne = "SELECT * FROM `admin`  where id = $id ";
    $sOne = mysqli_query($conn, $selectOne);
    $row = mysqli_fetch_assoc($sOne);
    $imageName =   $row['image'];
    unlink("./upload/$imageName");
    $delete = "DELETE FROM `admin` WHERE id = $id";
    $d = mysqli_query($conn, $delete);
    testMessage($d, "Delete admin");
    // $message = testMessage($d, "Delete  admin");
    path('admin/list.php');
}
auth();
?>


<main id="main" class="main">
    <?php if ($message != null) : ?>
        <div class="alert alert-success">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>



    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Image</th>
                                    <th colspan="2">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($s as $data) : ?>
                                    <tr>
                                        <th scope="row"><?= $data['id'] ?></th>
                                        <td><?= $data['email']  ?></td>
                                        <td><img src="./upload/<?= $data['image']  ?>" width="40"></td>
                                        <th> <a href="<?= url("admin/list.php") ?>?delete=<?= $data['id'] ?>" class="btn btn-danger">Remove</a> </th>
                                        <th> <a href="<?= url("admin/edit.php") ?>?edit=<?= $data['id'] ?>" class="btn btn-primary">Edit</a> </th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include '../shared/footer.php';
include '../shared/script.php';
?>