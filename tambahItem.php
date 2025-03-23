<?php
    include 'database.php';
    session_start();
    $message = "";
    if(isset($_POST['btnTambahItem'])){
        $namaItem=$_POST['namaItem'];
        $jenisItem=$_POST['jenisItem'];
        $hargaItem=$_POST['hargaItem'];

        try{
            $sql = "INSERT INTO item (nama_item, jenis_item, harga_item) VALUES ('$namaItem','$jenisItem','$hargaItem')";
            if($db->query($sql)){
                header('location: dashboard.php');
                
            }else{
                $message = "error!";
            }   
        }catch(mysqli_sql_exception){
            $register_message = "Item sudah ada!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item</title>
    <style>
        @import url(style.css);
    </style>
</head>
<body class="bodyTambahItem">
    <form action="tambahItem.php" method="POST" class="formTambahItem">
        <div>
            <a href="dashboard.php" id="btnKembali" style="position: absolute; left: 10px; top: 10px; text-decoration: none; color: black; font-weight: 500; font-size: 13px;">Kembali</a>
        </div>
        <div style="margin-bottom: 20px;">
            <h3>TAMBAH ITEM</h3>
        </div>
        <div class="tambahNama">
            <label id="labelTambah" for="namaItem">Nama Item: </label>
            <input type="text" name="namaItem" id="namaItem">
        </div>
        <div class="tambahJenis">
            <label id="labelTambah" for="jenisItem">Jenis Item: </label>
            <select name="jenisItem" id="jenisItem" style="width: 190px; margin-left: 5px;">
                <option value="sayur">Sayur</option>
                <option value="buah">Buah</option>
            </select>
        </div>
        <div class="tambahHarga">
            <label id="labelTambah" for="hargaItem">Harga Item: </label>
            <input type="text" name="hargaItem" id="hargaItem">
            
        </div>
        <div>
            <i><?= $message ?></i>
            <button type="submit" id="btnTambahItem" name="btnTambahItem" style="border: none; background-color:#52b16a; color:white; width: 200px; height: 20px; border-radius: 20px; margin-top: 20px;">TAMBAH</button>
        </div>
    </form>
</body>
</html>