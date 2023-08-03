<?php
session_start();

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

    <!-- Countdown script -->
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("23 September, 2022 9:53:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = hours + ":" + minutes + ":" + seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "TIME OUT";
            }
        }, 1000);
    </script>



    <title>Situs Jual Beli Online Terlengkap, Mudah &amp; Aman | Tokopedia</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/tokopedia/user-tokped.php">
                <img src="img/logo.svg" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/tokopedia/user-tokped.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For You</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category
                        </a>
                        <ul class="dropdown-menu" style="border-radius: 20px">
                            <li><a class="dropdown-item" href="#">Handphone & Tablet</a></li>
                            <li><a class="dropdown-item" href="#">Top-up & Tagihan</a></li>
                            <li><a class="dropdown-item" href="#">Transportasi Umum</a></li>
                            <li><a class="dropdown-item" href="#">Hiburan & Event</a></li>
                            <li><a class="dropdown-item" href="#">Komputer & Laptop</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex w-25" role="search">
                    <div class="input-group">
                        <button class="btn btn-outline-success" type="button" id="button-addon1"><i class="bi bi-search"></i></button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-2 mt-2">
                        <a class="nav-link" href="http://localhost/tokopedia/cart-user.php">
                            <h4 class="bi bi-cart"></h4>
                        </a>
                    </li>
                    <li class="nav-item dropdown mt-2">
                        <div class="dropdown">
                            <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="http://localhost/pemrograman-web/pertemuan1/Ecommerce/img/profilepict.png" alt="Stefanus Dastin" width="30" class="rounded-circle" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" style="border-radius: 20px">
                                <li class="ms-2 text-center">
                                    <p class="dropdown-item-text fw-bold"><img src="http://localhost/pemrograman-web/pertemuan1/Ecommerce/img/profilepict.png" alt="Stefanus Dastin" width="75" class="rounded-circle" /><?php echo $_SESSION['username']; ?></p>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Your Account</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Helps</a></li>
                                <li><a class="dropdown-item" href="logout-process-tokped.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Keranjang -->
    <div class="container">
        <div class="row g-5 mt-5">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col mb-3">
                            <h4 class="bi bi-bag-heart"> My Cart</h4>
                            <hr>
                        </div>
                    </div>
                    <?php
                    include 'config.php';
                    $dataA = mysqli_query($conn, "select * from pesanan where pemesan='" . $_SESSION['username'] . " ';");
                    $a = mysqli_fetch_lengths($dataA);
                    if ($a < 0) { ?>
                        <div class="row justify-content-center">
                            <div class="col-md-1 mt-5 text-black-50">
                                <h1 class="bi bi-cart-x"></h1>
                            </div>
                        </div>
                        <div class="row justify-content-center text-black-50">
                            <div class="col-md-7 ms-3">
                                <h4>You dont have anything in cart</h4>
                            </div>
                        </div>
                    <?php } if($a > 0) {?>
                    <?php
                    while ($d = mysqli_fetch_array($dataA)) {
                        $dataC = mysqli_query($conn, "select * from produk where id='" . $d['id_barang'] . " ';");
                        while ($b = mysqli_fetch_array($dataC)) {
                            $image = base64_encode($b['gambar']); ?>
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="card" style="border-radius: 20px">
                                        <div class="row">
                                            <div class="col-3 ms-3">
                                                <a href="http://localhost/Tokopedia/preview-produk-user.php?id=<?= $d['id_barang'] ?>">
                                                    <img src='data:image/webp;base64,<?php echo ($image); ?>' class="img-fluid rounded-start" width="auto" height="auto" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-7">
                                                <div class="card-body">
                                                    <a href="http://localhost/Tokopedia/preview-produk-user.php?id=<?= $d['id_barang'] ?>">
                                                        <h5 class="card-title" style="color: black; text-decoration: none"><?php echo $b['nama'] ?></h5>
                                                    </a>
                                                    <p class="card-text">Rp <?php echo $b['harga'] ?> x <?php echo $d['jumlah'] ?> <br> <b>Subtotal = Rp <?php echo $d['subtotal'] ?></b> </p>
                                                </div>
                                            </div>
                                            <div class="col-1 mt-5">
                                                <a href="http://localhost/Tokopedia/hapuscart-process.php?idpesanan=<?= $d['id_pesanan'] ?>">
                                                    <h4 class="bi bi-trash3" style="color: red;"></h4>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                }
                    ?>
                </div>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="card shadow-lg" style="border-radius: 20px">
                        <div class="row m-3">
                            <div class="col">
                                <h5>Checkout</h5>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="row ms-3 mb-3 me-3">
                                <div class="col">
                                    <label for="level" class="form-label">Quantity</label>
                                    <input class=" form-control quantity" id="secondNumber" min="1" name="form-0-quantity" value="1" max="<?php echo $d['stok'] ?>" type="number" onclick="multiplyBy()">
                                </div>
                            </div>
                            <div class="row m-3 ">
                                <div class="col">
                                    <label for="user" class="form-label">Notes</label>
                                    <input id="user" name="user" type="text" class="form-control" placeholder="Ex: Color, Type, etc">
                                </div>
                            </div>
                            <div class="row ms-3 mb-3 ">
                                <div class="col">
                                    <b>
                                        <h3>Subtotal</h3>
                                    </b>
                                    <h4 id="result">Rp </h4>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="d-grid gap-2">
                                    <input class="btn btn-success" style="border-radius: 8px;" type="submit" name="buy" value="+ Add to Cart">
                                    <input class="btn btn-outline-success" style="border-radius: 8px;" type="submit" name="buy" value="Buy!">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Keranjang -->

    <!-- Tabel Produk -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-3 ms-3 text-start">
                <h2 class="fs-3">Other results</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
            include 'config.php';
            for ($i = 0; $i < 9; $i++) {
                $data = mysqli_query($conn, "select * from produk where id='$i';");
                while ($d = mysqli_fetch_array($data)) {
                    $image = base64_encode($d['gambar']); ?>
                    <div class="col-sm-3 mb-3">
                        <a href="http://localhost/Tokopedia/preview-produk-user.php?id=<?= $i ?>">
                            <div class="card" style="border-radius: 20px">
                                <img class="card-img-top" style="border-radius: 20px; width: auto; height: auto" alt="<?php echo ($d['nama']); ?>" src='data:image/webp;base64,<?php echo ($image); ?>'>
                                <div class="card-body">
                                    <div class="card-text" style="color: black; text-decoration: none">
                                        <p><?php echo $d['nama']; ?></p>
                                        <b>
                                            <p> Rp<?php echo ($d['harga']); ?></p>
                                        </b>
                                        <p class="card-text"><i class="bi bi-geo-alt"></i><b> <?php echo ($d['asal']); ?></b></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- Akhir Tabel Produk -->

    <!-- Footer -->
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a class="navbar-brand" href="http://localhost/tokopedia/user-tokped.php">
                    <img src="img/logo.svg" alt="" />
                </a>
                <p class="text-muted">© 2022</p>
            </div>

            <div class="col mb-3"></div>

            <div class="col mb-3"></div>

            <div class="col mb-3">
                <h5>Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="http://localhost/tokopedia/user-tokped.php" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">For You</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Explore</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Category</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Others</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Helps</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contacts</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Akhir Footer -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
