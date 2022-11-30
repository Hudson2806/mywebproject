<?php
    if(isset($_COOKIE["username"])){
        setcookie('username', '', time()-7000000, '/');

        header("location:login.php");
    }
?>