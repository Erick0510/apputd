<?php
    session_start();

    if (!isset($_SESSION['username'])){
        header("location:login.php");
    }else{
        $us=$_SESSION['username'];
        $priv=$_SESSION['privilegio'];
        $ps=$_SESSION['password'];
    }

?>