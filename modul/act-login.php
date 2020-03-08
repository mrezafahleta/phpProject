<?php

if (isset($_POST['submit-login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $query = mysqli_query(
        $konek,
        "select * from users where email='$email'"
    );

    $cek = mysqli_fetch_assoc($query);

    if ($cek) {
        if ($cek['password'] == $pass) {
            if ($cek['status'] == 'Y') {

                $_SESSION['username'] = $cek['username'];
                $_SESSION['email'] = $cek['email'];
                $_SESSION['level'] = $cek['level'];
                $_SESSION['loginat'] = $cek['login_at'];
                $_SESSION['iduser'] = $cek['id_user'];

                // $_SESSION['data'] = [
                //    'username' => $cek['username'],
                //    'email' => $cek['email'],
                //    'level' => $cek['level'],
                //    'loginat' => $cek['login_at'],
                //    'iduser' => $cek['id_user']
                // ];
                header('location: ./admin/index.php');
            } else {
                echo "<hr><hr><hr><hr> Anda belum aktif";
            }
        } else {
            echo "<hr><hr><hr><hr> Salah Password";
        }
    } else {
        echo "<hr><hr><hr><hr> email belum terdaftar";
    }
}
