<?php 
    include "database.php";
    session_start();
    $login_message = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }

    if(isset($_POST['btnLogin2'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       $hash_password = hash('sha256', $password);
       
       $sql = "SELECT * FROM user WHERE username='$username' AND password='$hash_password'";

       $result = $db->query($sql);
       if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;
        header("location: dashboard.php");

       }else{
        $login_message = "akun tidak ada";
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
    <form action="formLogin.php" method="POST" id="formLogin">
        <div style="margin-top: 5px; margin-bottom: 20px;">
            <a href="index.php" id="btnHome" style="text-decoration: none; color: black; position: absolute; top: 10px; left: 10px; color: #52b16a;">home</a>
            <h2>LOGIN</h2>
        </div>
        <i><i><?= $login_message ?></i></i>
        <div id="username1">
            <label for="username">username: </label><br>
            <input type="text" name="username" id="username" style="border: none; border-bottom: 2px solid black; border-width: 1px; outline: none;">
        </div>
        <div id="password1">
            <label for="password">password: </label><br>
            <input type="password" name="password" id="password" style="border: none; border-bottom: 2px solid black; border-width: 1px; outline: none;">
        </div>
        <div style="margin-top: 10px; margin-bottom: 10px;">
            <button type="submit" id="btnLogin2" name="btnLogin2">LOGIN</button>
        </div>
        <div>
            <p>Tidak punya akun? <a href="formRegister.php" id="buatAkun" style="text-decoration: none; color: black; color: #52b16a;">Buat disini</a></p>
        </div>
    </form>
</body>
</html>