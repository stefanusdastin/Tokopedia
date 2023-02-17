<?php

include 'config.php';

$email = $_GET['id'];


$result = mysqli_query($conn_db, "SELECT * FROM users WHERE id='" . $id . "'");
if (!$result) {
    header("Location:edit-user.php");
}

while ($customer_data = mysqli_fetch_array($result)) {
    $username = $customer_data['username'];
    $email = $customer_data['email'];
    $password = $customer_data['password'];
    $level = $customer_data['level'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    <title>Sign In | Tokopedia</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Tokopedia/admin-tab2-tokped.php">
                <img src="img/logo.svg" alt="" />
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
                <h2>Sign In</h2>
            </div>
        </div>
        <div id="con-form" class="container">
        <form action="admin_user_editprocess.php" method="post">
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control form-control-md" name="username" value=<?= $username ?> /><label class="form-label" for="username">Username</label>
            </div>

            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-md" name="email" value=<?php echo $email; ?> /><label class="form-label" for="email">Email</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-md" name="password" value=<?php echo $password; ?> /><label class="form-label" for="password">Password</label>
            </div>

            <div class="form-outline mb-3">
                <div class="input-group">
                    <select class="form-control form-control-md" id="inputGroupSelect01" name="level" required>
                        <option value="admin">admin</option>
                        <option value="Pengguna">pengguna</option>
                    </select>
                </div>
                <label>Tipe Kamar</label>
            </div>

            <div class="form-outline mb-3">
                <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="update" value="Update">Update</button>
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