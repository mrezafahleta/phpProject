<?php 

    $server  = 'localhost';
    $user = 'root';
    $pass = '';
    $db = "db_pratamaoil";

    $konek = mysqli_connect($server,$user,$pass,$db);

    if(!$konek){
        trigger_error('periksa koneksi anda').mysqli_error($konek);
        die;
    }

  


    

