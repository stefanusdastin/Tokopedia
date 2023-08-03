<?php
if (isset($_POST['submit'])) {
    $idbarang = $id;
    $tmp = $image;
    $sum = $d['harga'];
    $cust = $_SESSION['username'];
    $jumlah = $_POST['qty'];

    $query = "INSERT INTO pesanan (`id_barang`,`thumbnail`,`subtotal`,`pemesan`,`jumlah`) VALUES('$idbarang','$tmp','$sum','$cust','$jumlah');";
    $result = mysqli_query($conn, $query);
    if ($query) {
        echo '<script>window.location="cart-user.php"; </script>';
    }else {
        echo '<script>alert("Gagal"); window.location="http://localhost/Tokopedia/preview-produk-user.php?id=<?= $i ?>"; </script>';
    }
}
