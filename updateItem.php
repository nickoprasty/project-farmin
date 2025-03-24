<?php
include 'database.php';
session_start();
$message = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM item WHERE id_item = '$id'";
    $sql = mysqli_query($db, $query);
    $data = mysqli_fetch_assoc($sql);

    if (!$data) {
        echo "<script>alert('Item tidak ditemukan!'); window.location='dashboard.php';</script>";
        exit;
    }
}

if (isset($_POST['btnUpdateItem'])) {
    $namaItem = $_POST['namaItem'];
    $jenisItem = $_POST['jenisItem'];
    $hargaItem = $_POST['hargaItem'];

    $query = "UPDATE item SET nama_item='$namaItem', jenis_item='$jenisItem', harga_item='$hargaItem' WHERE id_item='$id'";
    if ($db->query($query)) {
        header('location: dashboard.php');
    } else {
        $message = "Gagal memperbarui item!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodyTambahItem">
    <form action="" method="POST" class="formTambahItem">
        <a href="dashboard.php" id="btnKembali">Kembali</a>
        <h3>UPDATE ITEM</h3>
        
        <div class="tambahNama">
            <label for="namaItem">Nama Item:</label>
            <input type="text" name="namaItem" value="<?= $data['nama_item']; ?>" required>
        </div>

        <div class="tambahJenis">
            <label for="jenisItem">Jenis Item:</label>
            <select name="jenisItem" required>
                <option value="sayur" <?= $data['jenis_item'] == 'sayur' ? 'selected' : ''; ?>>Sayur</option>
                <option value="buah" <?= $data['jenis_item'] == 'buah' ? 'selected' : ''; ?>>Buah</option>
            </select>
        </div>

        <div class="tambahHarga">
            <label for="hargaItem">Harga Item:</label>
            <input type="number" name="hargaItem" value="<?= $data['harga_item']; ?>" required>
        </div>

        <i><?= $message ?></i>
        <button type="submit" id="btnTambahItem" name="btnUpdateItem">UPDATE</button>
    </form>
</body>
</html>
