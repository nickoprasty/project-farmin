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
    <style>
        @import url(style.css);
    </style>
</head>
<body>
    <nav class ="dashboard">
        <img src="img/logo_farm'in.png" alt="logo farm'in" style="width: 40px; height: 40px; margin-top: 5px;">
        <div class="content konten1"><h2>Farm'In</h2></div>
        <form  action="koneksi.php" method = "POST">
            <button class = "content konten4" type="submit" name="btnLogout2">Logout</button>
        </form>       
    </nav>
    <div>
        <h2 style="text-align: center; margin-top:20px;">HARGA PASAR</h2>
    </div>
    <div class="tabelData" style="margin-bottom: 100px;">
        <table class="tabelItem">
            <thead class="theadItem">
                <tr>
                    <th>Nama</th>            
                    <th>Jenis</th>            
                    <th>Harga per Kilo (Kg)</th>
                </tr>
            </thead>
            <tbody class="tbodyItem">
                <?php 
                     while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <td><?php echo $result['nama_item'];?></td>
                    <td><?php echo $result['jenis_item'];?></td>
                    <td>Rp.<?php echo $result['harga_item'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>   
    <div style="width: 50%; margin: 30px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <h2 style="text-align: center;">Form Pembelian Pupuk</h2>
        <form action="simpan_pembelian.php" method="POST">

            <label for="jenis_pupuk">Jenis Pupuk:</label><br>
            <select id="jenis_pupuk" name="id_pupuk" required>
                <?php 
                    $sql = "SELECT id_pupuk, nama_pupuk FROM pupuk";
                    $result = $db->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row['id_pupuk'].'">'.$row['nama_pupuk'].'</option>';
                    }
                ?>
                </select><br><br>

            <label for="jumlah">Jumlah (kg):</label><br>
            <input type="number" id="jumlah" name="jumlah" min="1" required><br><br>

            <input type="submit" value="Beli Pupuk" style="padding: 10px 20px;">
        </form>
    </div>
</body>
</html>