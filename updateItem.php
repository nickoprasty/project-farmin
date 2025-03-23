<?php
    include "database.php";

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

    if (isset($_POST['update'])) {
        $nama_item = $_POST['nama_item'];
        $jenis_item = $_POST['jenis_item'];
        $harga_item = $_POST['harga_item'];
        
        $query = "UPDATE item SET nama_item='$nama_item', jenis_item='$jenis_item', harga_item='$harga_item' WHERE id_item='$id'";
        $sql = mysqli_query($db, $query);
        
        if ($sql) {
            echo "<script>alert('Item berhasil diperbarui!'); window.location='dashboard.php';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui item!'); window.location='dashboard.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item | Farm'In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formContainer">
        <h2>Update Item</h2>
        <form method="POST">
            <div class="formGroup">
                <label for="nama_item">Nama Item:</label>
                <input type="text" id="nama_item" name="nama_item" value="<?php echo $data['nama_item']; ?>" required>
            </div>
            <div class="formGroup">
                <label for="jenis_item">Jenis Item:</label>
                <select id="jenis_item" name="jenis_item">
                    <option value="sayur" <?php echo ($data['jenis_item'] == 'sayur') ? 'selected' : ''; ?>>Sayur</option>
                    <option value="buah" <?php echo ($data['jenis_item'] == 'buah') ? 'selected' : ''; ?>>Buah</option>
                    <option value="daging" <?php echo ($data['jenis_item'] == 'daging') ? 'selected' : ''; ?>>Daging</option>
                </select>
            </div>
            <div class="formGroup">
                <label for="harga_item">Harga per Kg:</label>
                <input type="number" id="harga_item" name="harga_item" value="<?php echo $data['harga_item']; ?>" required>
            </div>
            <div class="btnGroup">
                <button type="submit" name="update" class="btnPrimary">Update</button>
                <a href="dashboard.php" class="btnSecondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
