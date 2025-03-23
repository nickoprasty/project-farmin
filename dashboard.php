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
    <div style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 0px">
        <a href="tambahItem.php" class="btnTambah" style="text-decoration: none; color: white; background-color: #37a46d; border-radius: 10px; padding: 5px; width: 80%; text-align: center;">Tambah Item</a>
    </div>
    <div class="tabelData">
        <table class="tabelItem">
            <thead class="theadItem">
                <tr>
                    <th>Nama</th>            
                    <th>Jenis</th>            
                    <th>Harga per Kilo (Kg)</th>
                    <th>Aksi</th>
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
                    <td>
                        <a href="updateItem.php?id=<?php echo $result['id_item']; ?>" class="btnAksi aksiUbah" style="text-decoration: none; background-color: #37a46d; border-radius: 10px; display: inline-block; padding: 5px; width: 50px; color: white;">Edit</a> 
                        <a href="deleteItem.php?id=<?php echo $result['id_item']; ?>" class="btnAksi aksiDelete" style="text-decoration: none; background-color: #37a46d; border-radius: 10px; display: inline-block; padding: 5px; width: 50px; color: white;" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?');">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>   
</body>
</html>