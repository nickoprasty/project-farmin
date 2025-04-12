<?php
include 'database.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pupuk = $_POST['id_pupuk'];
    $jumlah = $_POST['jumlah'];

    $query_harga = "SELECT harga FROM pupuk WHERE id_pupuk = '$id_pupuk'";
    $result = mysqli_query($db, $query_harga);
    $row = mysqli_fetch_assoc($result);
    $harga = $row['harga'];
    $total_harga = $jumlah * $harga;

    $username = $_SESSION['username'];
    $user_q = mysqli_query($db, "SELECT id_user FROM user WHERE username='$username'");
    $user_data = mysqli_fetch_assoc($user_q);
    $id_user = $user_data['id_user'];

    $query = "INSERT INTO transaksi_pupuk (id_user, id_pupuk, jumlah, total_harga)
            VALUES ('$id_user', '$id_pupuk', '$jumlah', '$total_harga')";


    if (mysqli_query($db, $query)) {
        header("Location: user_dashboard.php?status=sukses");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
} else {
    echo "Metode request tidak valid.";
}
?>
