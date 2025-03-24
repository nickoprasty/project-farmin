<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM item WHERE id_item = '$id'";
    if (mysqli_query($db, $query)) {
        echo "<script>alert('Item berhasil dihapus!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus item!'); window.location='dashboard.php';</script>";
    }
} else {
    header('location: dashboard.php');
}
?>
