<?php 
    session_start();
    if(isset($_POST["btnLogout2"])){
        session_unset();
        session_destroy();
        
        header("location: index.php");
    }
?>