<?php

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "SELECT * FROM users WHERE id='" . $id . "'");
if (!$result) {
    header("Location:admin_informasiUser.php");
}

while ($customer_data = mysqli_fetch_array($result)) {
    $username = $customer_data['username'];
    $email = $customer_data['email'];
    $password = $customer_data['password'];
    $level = $customer_data['level'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Register Page</title>

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>

</head>

<body style="background-image: url(img/meja-resepsionis-minimalis-modern.webp);display: flex;justify-content: center;align-items: center;flex-direction: column;min-height: 100vh;">
    <a href="admin_informasiUser.php">back</a>
    <br /><br />

    <div class="col-md-8 col-lg-6 col-xl-4" style="background-color: #fcfcfc7a;padding : 10px ;box-shadow: 10px 20px 25px #000000; border-radius: 20px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>