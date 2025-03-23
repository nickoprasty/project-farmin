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

    if (isset($_POST['delete'])) {
        $query = "DELETE FROM item WHERE id_item='$id'";
        $sql = mysqli_query($db, $query);

        if ($sql) {
            echo "<script>alert('Item berhasil dihapus!'); window.location='dashboard.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus item!'); window.location='dashboard.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Item | Farm'In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formContainer">
        <h2>Hapus Item</h2>
        <p>Apakah Anda yakin ingin menghapus item <b><?php echo $data['nama_item']; ?></b>?</p>
        <form method="POST">
            <input type="hidden" name="id_item" value="<?php echo $id; ?>">
            <div class="btnGroup">
                <button type="submit" name="delete" class="btnDanger">Hapus</button>
                <a href="dashboard.php" class="btnSecondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
