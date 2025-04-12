<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_petani = $_POST['nama_petani'];
    $jenis_pupuk = $_POST['jenis_pupuk'];
    $jumlah = $_POST['jumlah'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO pembelian_pupuk (nama_petani, jenis_pupuk, jumlah, metode_pembayaran, tanggal)
              VALUES ('$nama_petani', '$jenis_pupuk', $jumlah, '$metode_pembayaran', '$tanggal')";

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
