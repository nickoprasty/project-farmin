<?php
    include "database.php";
    $query ="SELECT * FROM item;";
    $sql = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>farm'in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="dashboard">
        <img src="img/logo_farm'in.png" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
        <div class="content konten1"><h2>Farm'In</h2></div>
        <form action="koneksi.php" method="POST">
            <button class="content konten4" type="submit" name="btnLogout2">Logout</button>
        </form>       
    </nav>

    <div class="dashboard-content">
        <div class="price-section">
            <h2 style="text-align: center;">HARGA PASAR</h2>
            <table class="tabelItem">
                <thead class="theadItem">
                    <tr>
                        <th style="text-align: center; font-size: 1.2em;">Nama</th>            
                        <th style="text-align: center; font-size: 1.2em;">Jenis</th>            
                        <th style="text-align: center; font-size: 1.2em;">Harga per Kilo (Kg)</th>
                    </tr>
                </thead>
                <tbody class="tbodyItem">
                    <?php 
                        while($result = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        <td><?php echo $result['nama_item'];?></td>
                        <td><?php echo $result['jenis_item'];?></td>
                        <td>Rp.<?php echo number_format($result['harga_item'], 0, ',', '.');?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="buy-section">
            <h2>Ingin Membeli Pupuk?</h2>
            <p>Silakan kunjungi halaman pembelian pupuk kami untuk melihat katalog lengkap dan melakukan pembelian.</p>
            <a href="menuBeli.php" class="buy-button">Beli Pupuk Sekarang</a>
        </div>
    </div>
</body>
</html>