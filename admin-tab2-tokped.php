<?php
session_start();
//ambil koneksi dari koneksi.php
include "config.php";

//cek apakah ada email
if (!isset($_SESSION['username'])) {
    header('Location:login-page-tokped.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Tokopedia ADMIN</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/tokopedia/admin-tokped.php">
                <img src="img/logo.svg" alt="" /> ADMIN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/tokopedia/admin-tokped.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/Tokopedia/admin-tab2-tokped.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                </ul>
                <!-- Section Account -->
                <ul class="navbar-nav ms-3">
                    <li class="nav-item dropdown mt-2">
                        <div class="dropdown">
                            <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="http://localhost/pemrograman-web/pertemuan1/Ecommerce/img/profilepict.png" alt="Stefanus Dastin" width="30" class="rounded-circle" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" style="border-radius: 20px">
                                <li class="ms-2 text-center">
                                    <p class="dropdown-item-text fw-bold"><img src="http://localhost/pemrograman-web/pertemuan1/Ecommerce/img/profilepict.png" alt="Stefanus Dastin" width="75" class="rounded-circle" />Stefanus Dastin</p>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Your Account</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Helps</a></li>
                                <li><a class="dropdown-item" href="logout-process-tokped.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Akhir Section Account -->
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Edit User -->
    <div class="row justify-content-center">
        <div class="col-10 mt-5">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h3>List User</h3>
                        </div>
                        <div class="col">
                            <a href="tambah-user.php" class="btn btn-outline-success">Add User</a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Level</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        $no = 1;
                        $data = mysqli_query($conn, "select * from user");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $no++; ?>
                                </td>
                                <td>
                                    <?php echo $d['email']; ?>
                                </td>
                                <td>
                                    <?php echo $d['username']; ?>
                                </td>
                                <td>
                                    <?php echo md5($d['password']); ?>
                                </td>
                                <td>
                                    <?php echo $d['level']; ?>
                                </td>
                                <td>
                                    <a href="edit-user.php?email=<?= $d['email'] ?>" class="btn btn-outline-success">EDIT</a>
                                    <a href="hapus-user.php?email=<?= $d['email'] ?>" class="btn btn-outline-danger">HAPUS</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Akhir Edit User -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>