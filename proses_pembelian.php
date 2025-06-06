<?php
include "database.php";
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "<script>
            alert('Silakan login terlebih dahulu!');
            window.location.href = 'login.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pupuk = $_POST['id_pupuk'];
    $jumlah = $_POST['jumlah'];
    $id_user = $_SESSION['id_user'];


    $query_harga = "SELECT harga FROM pupuk WHERE id_pupuk = '$id_pupuk'";
    $result = mysqli_query($db, $query_harga);
    $row = mysqli_fetch_assoc($result);
    $harga = $row['harga'];
    

    $total_harga = $jumlah * $harga;


    $query = "INSERT INTO transaksi_pupuk (id_user, id_pupuk, jumlah, total_harga, tanggal_transaksi) 
              VALUES ('$id_user', '$id_pupuk', '$jumlah', '$total_harga', NOW())";

    if (mysqli_query($db, $query)) {
        echo "<script>
                alert('Pembelian berhasil!');
                window.location.href = 'user_dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal melakukan pembelian: " . mysqli_error($db) . "');
                window.location.href = 'menuBeli.php';
              </script>";
    }
} else {
    header("Location: menuBeli.php");
}
?> 