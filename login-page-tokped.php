<?php

include 'config.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    if($cek > 0){
 
        $data = mysqli_fetch_assoc($login);
     
        if($data['level']=="admin"){
            $_SESSION['username'] = $email;
            $_SESSION['level'] = "admin";
            header("location:admin-tokped.php");
        }else if($data['level']=="pengguna"){
            $_SESSION['username'] = $email;
            $_SESSION['level'] = "pengguna";
            header("location:user-tokped.php");
        }else{
            echo'<script>alert("Username atau Password salah"); window.location="login-page-tokped.php"; </script>';
        }	
    }else{
        echo'<script>alert("Username atau Password salah"); window.location="login-page-tokped.php"; </script>';
    }

    /*$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"; // menuliskan query lalu dimasukan ke var sql
    $result = mysqli_query($conn, $sql); // menjalan perintah pada var sql dan memasukan hasil ke var result
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $sql = "SELECT level FROM user WHERE email='$email'";
        $res = mysqli_query($conn, $sql);
        switch ($res) {
            case '1':
                $_SESSION['username'] = $row['username'];
                header("Location: user-tokped.php");
                break;
            case '2':
                $_SESSION['username'] = $row['username'];
                header("Location: admin-tokped.php");
                break;

            default:
                echo "<script>alert('Level tdk ditemukan')</script>";
                break;
        }
        if ($res = "1") {
            $_SESSION['username'] = $row['username'];
            header("Location: admin-tokped.php");
        }
        if ($res = "0") {
            $_SESSION['username'] = $row['username'];
            header("Location: user-tokped.php");
        }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }*/
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    <title>Login Page</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Tokopedia/landing-tokped.php">
                <img src="img/logo.svg" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <!-- pastikan action menuju ke auth.php dan method POST/post -->
    <section id="form">

        <div class="row text-center mb-3">
            <div class="col mt-5">
                <h2>Login</h2>
            </div>
        </div>
        <div id="con-form" class="container">
            <form action="" method="POST">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-8">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" value="<?php echo $password ?>" required>
                            <p class="form-text">Already have an account?<a href="#">Sign In</a><br><a href="#">Forgot your password?</a></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3">
                        <input class="btn btn-outline-success" type="submit" name="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Form -->

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