<?php

include 'config.php';

$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM produk WHERE id='" . $id . "'");
if (!$result) {
    header("Location:edit-produk.php");
}

while ($customer_data = mysqli_fetch_array($result)) {
    $nama = $customer_data['nama'];
    $harga = $customer_data['harga'];
    $stok = $customer_data['stok'];
}
?>

<!DOCTYPE html>
<html>

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
            <a class="navbar-brand" href="http://localhost/Tokopedia/admin-tokped.php">
                <img src="img/logo.svg" alt="" /> ADMIN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <section id="form">

        <div class="row text-center mb-3">
            <div class="col mt-5">
                <h2>Edit Section</h2>
            </div>
        </div>
        <div id="con-form" class="container">
            <form action="admin-editproduk-process.php" method="POST">
                <div class="row justify-content-center mb-2">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input id="id" name="id" type="id" class="form-control" value="<?= $id; ?>" readonly="true" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">ID cannot edited because it was auto-generated</div>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Product Name</label>
                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $nama; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input id="harga" name="harga" type="text" class="form-control" value="<?= $harga; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-2">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input id="stok" name="stok" type="text" class="form-control" value="<?= $stok; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3">
                        <input class="btn btn-outline-success" type="submit" name="submit" value="Save Change">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Form -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>