<?php 
    include "database.php";
    session_start();
    $register_message = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
        
    }
    if(isset($_POST['btnRegister2'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];        
        $hash_password = hash("sha256", $password);
        try{
            $sql = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$hash_password')";

            if($db->query($sql)){
                $register_message = "akun berhasil dibuat, silahkan login";
                
            }else{
                $register_message = "gagal membaut akun, coba lagi!";
            }   
        }catch(mysqli_sql_exception){
            $register_message = "username sudah digunakan";
        }
        $db->close();
        
        
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <form action="formRegister.php" method="POST" id="formRegister">
        <div>
            <a href="index.php" id="btnHome" style="text-decoration: none; color: black; position: absolute; top: 10px; left: 10px; color: #52b16a">home</a>
            <h2 style="padding: 10px;">DAFTAR AKUN</h2>
        </div>
        <div id="email1">
            <label for="username">email: </label><br>
            <input type="email" name="email" id="email"style="border: none; border-bottom: 2px solid black; border-width: 1px; outline: none;">
        </div>
        <div id="username1">
            <label for="username">username: </label><br>
            <input type="text" name="username" id="username" style="border: none; border-bottom: 2px solid black; border-width: 1px; outline: none;">
        </div>
        <div id="password1">
            <label for="username">password: </label><br>
            <input type="password" name="password" id="password" style="border: none; border-bottom: 2px solid black; border-width: 1px; outline: none;">
        </div>
        <div style="margin-top: 10px; margin-bottom: 10px;">
            <i><?= $register_message ?></i>
        </div>
        <div>
            <button type="submit" id="btnRegister2" name="btnRegister2">BUAT AKUN</button>
        </div>
        <div>
            <p>Sudah punya akun? <a href="formLogin.php" id="loginDisini" style="text-decoration: none; color: #52b16a">Login disini</a></p>
        </div>
    </form>
</body>
</html>