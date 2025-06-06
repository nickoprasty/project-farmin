<?php
    include "database.php";
    session_start();

    // Cek apakah user sudah login
    if (!isset($_SESSION['id_user'])) {
        echo "<script>
                alert('Silakan login terlebih dahulu!');
                window.location.href = 'login.php';
              </script>";
        exit();
    }

    $query ="SELECT * FROM pupuk;";
    $sql = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="dashboard">
        <img src="img/logo_farm'in.png" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
        <div class="content konten1"><h2>Farm'In</h2></div>
        <form action="koneksi.php" method="POST">
            <button class="content konten4" type="submit" name="btnLogout2">Logout</button>
        </form>       
    </nav>
    <?php
        if (mysqli_num_rows($sql) > 0) {
            echo "<h3 style='text-align: center; margin-bottom: 50px; margin-top: 50px;'>PUPUK</h3>";
            echo '<div class="containerBeli">';
            
            while ($row = mysqli_fetch_assoc($sql)) {
                echo '<div class="kontenBeli1">';
                if (!empty($row['gambar'])) {
                    echo '<img src="img/' . $row['gambar'] . '" alt="' . htmlspecialchars($row['nama_pupuk']) . '" style="width: 100%; height: 200px; object-fit: cover;">';
                }
                echo '<h3>' . htmlspecialchars($row['nama_pupuk']) . '</h3>';
                echo '<p>' . htmlspecialchars($row['deskripsi_pupuk']) . '</p>';
                echo '<form action="form_pembelian.php" method="GET">';
                echo '<input type="hidden" name="id_pupuk" value="' . $row['id_pupuk'] . '">';
                echo '<input type="hidden" name="nama_pupuk" value="' . htmlspecialchars($row['nama_pupuk']) . '">';
                echo '<button type="submit" class="buttonBeli">Pesan</button>';
                echo '</form>';
                echo '</div>';
            }
            
            echo '</div>';
        } else {
            echo "<h3 style='text-align: center;'>Tidak ada data pupuk</h3>";
        }
    ?>
</body>
</html>