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
        var countDownDate = new Date("17 October, 2022 18:23:00").getTime();

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
            <a class="navbar-brand" href="http://localhost/Tokopedia/landing-tokped.php">
                <img src="img/logo.svg" alt="Tokopedia" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Tokopedia/landing-tokped.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For You</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
                        <ul class="dropdown-menu" style="border-radius: 20px">
                            <li><a class="dropdown-item" href="#">Handphone & Tablet</a></li>
                            <li><a class="dropdown-item" href="#">Top-up & Tagihan</a></li>
                            <li><a class="dropdown-item" href="#">Transportasi Umum</a></li>
                            <li><a class="dropdown-item" href="#">Hiburan & Event</a></li>
                            <li><a class="dropdown-item" href="#">Komputer & Laptop</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex w-50 me-auto" role="search">
                    <div class="input-group">
                        <button class="btn btn-outline-" type="button" id="button-addon1"><i class="bi bi-search"></i></button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-2 mt-2">
                        <a class="nav-link" href="http://localhost/tokopedia/cart-user.php">
                            <h4 class="bi-bag-heart"></h4>
                        </a>
                    </li>
                    <li class="nav-item me-2 mt-1">
                        <a class="nav-link" href="signin-page-tokped.php">
                            <button type="button" class="btn btn-outline-success">Sign In</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="nav-scroller bg-body shadow-sm">
        <nav class="nav" aria-label="Secondary navigation">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Tokopedia/landing-tokped.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For You</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
                        <ul class="dropdown-menu" style="border-radius: 20px">
                            <li><a class="dropdown-item" href="#">Handphone & Tablet</a></li>
                            <li><a class="dropdown-item" href="#">Top-up & Tagihan</a></li>
                            <li><a class="dropdown-item" href="#">Transportasi Umum</a></li>
                            <li><a class="dropdown-item" href="#">Hiburan & Event</a></li>
                            <li><a class="dropdown-item" href="#">Komputer & Laptop</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex w-50 me-auto" role="search">
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-search"></i></button>
                        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-2 mt-2">
                        <a class="nav-link" href="http://localhost/tokopedia/cart-user.php">
                            <h4 class="bi-bag-heart"></h4>
                        </a>
                    </li>
                    <li class="nav-item me-2 mt-1">
                        <a class="nav-link" href="signin-page-tokped.php">
                            <button type="button" class="btn btn-outline-success">Sign In</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div id="jumbotron" class="container mt-md-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-md-4 me-md-5 text-center">
                <h5>Welcome, we have your goods here!</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti a nemo ut minus magni assumenda? Voluptate
                    beatae perspiciatis corporis doloribus, nobis id maiores? Deserunt incidunt provident aliquam nihil inventore
                    fuga
                    magnam, voluptatum in libero culpa vitae aut doloremque dolore labore?
                </p>
            </div>
            <div class="col-sm-4 m-4">
                <img src="img/jumbotron.png" class="justify-content-center img-fluid" style="width: 500px" alt="" />
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Selected Category -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm m-3">
                <div class="card" style="border-radius: 20px">
                    <h2 class="p-2 ms-2 mt-2 fs-4">Selected Category</h2>
                    <div class="row">
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category1.png" style="height: 20px; width: 20px" alt="" /> Handphone &
                                Tablet</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category2.png" style="height: 20px; width: 20px" alt="" /> Top-up & Tagihan</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category3.png" style="height: 20px; width: 20px" alt="" /> Transportasi
                                Umum</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category4.png" style="height: 20px; width: 20px" alt="" /> Hiburan & Event</a>
                        </div>
                        <div class="col-sm-2 ms-2 mb-3">
                            <a role="button" class="btn btn-light" style="font-size: 12px; border-radius: 20px" href="#"><img src="img/logo-category/category6.png" style="height: 20px; width: 20px" alt="" /> Komputer &
                                Laptop</a>
                        </div>
                    </div>
                </div>
                <br />
                <hr class="border-2" style="width: auto; height: 5px; border-radius: 20px" />
            </div>
        </div>
    </div>
    <!-- Akhir Selected Category -->

    <!-- Tabel Produk -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-3 ms-3 mb-3 text-start">
                <h2 class="fs-3">Limited Time Offers!</h2>
            </div>
            <div class="col-sm-2 mt-3 ms-3 mb-3 fs-5 text-center text-light">
                <div class="card bg-danger" style="border-radius: 20px">
                    <a id="demo"></a>
                </div>
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
                        <a href="http://localhost/Tokopedia/preview-produk-user.php?id=<?= $i; ?>">
                            <div class="card" style="border-radius: 20px">
                                <img class="card-img-top" style="border-radius: 20px;" width="auto" height="auto" alt="<?php echo ($d['nama']); ?>" src='data:image/webp;base64,<?php echo ($image); ?>'>
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
                <a class="navbar-brand" href="http://localhost/Tokopedia/landing-tokped.php">
                    <img src="img/logo.svg" alt="" />
                </a>
                <p class="text-muted">© 2022</p>
            </div>

            <div class="col mb-3"></div>

            <div class="col mb-3"></div>

            <div class="col mb-3">
                <h5>Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="http://localhost/Tokopedia/landing-tokped.php" class="nav-link p-0 text-muted">Home</a></li>
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
</body>

</html>