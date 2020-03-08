<?php 

    session_start();

    require_once '../config/koneksi.php';

    if(isset($_SESSION['username'])){
        echo "Selamat Datang " . $_SESSION['username']. "<br>" ;
        echo "<a href='logout.php'>". "Logout"."</a>";
        echo "<hr>";
        include 'data-users.php';
       
    }else{
        header('location: ../');
    }
   
