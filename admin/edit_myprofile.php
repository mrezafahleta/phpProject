


<div style="margin-left:10px; margin-top:10px; height: 330px; width:4px; background-color:black;">
    
    <div style="margin-left: 10px;">
        <form action="" method="POST">



        <?php
     ob_start();
            $username = $_GET['username'];
            $sql = " select * from users inner join profil on users.id_user = profil.id_profil WHERE users.username = '$username '";
            $query = mysqli_query($konek, $sql);
            $data = mysqli_fetch_assoc($query);
            ?>


        <input type="text" name="username" value="<?= $data['username'] ?>" hidden>
        <table  style=" margin-left:20px; text-align:left; width:400px; background-color: #eee;">
            
            <tr>
                <th style="text-align: center;">Nama Depan</th>
                <td>:</td>
                <td style="padding: 10px;"><input type="text" name="nama_depan" value="<?= $data['nama_depan'] ?>"></td>
            </tr>

            <tr>
                <th style="text-align: center;">Nama Belakang</th>
                <td>:</td>
                <td style="padding: 10px;"><input type="text" name="nama_belakang" value="<?= $data['nama_belakang'] ?>"></td>
            </tr>

            <tr>
                <th style="text-align: center;">Tanggal Lahir</th>
                <td>:</td>
                <td style="padding: 10px;"><input type="text" name="tgl" value="<?= $data['tgl_lahir'] ?>"></td>
            </tr>

            <tr>
                <th style="text-align: center;">Jenis Kelamin</th>
                <td>:</td>
                <td style="padding: 10px;">
                    <input type="radio" name="jk" value="Pria" <?= $data['jk'] == 'Pria' ? 'checked' : "" ?>> Pria
                    <input type="radio" name="jk" value="Wanita" <?= $data['jk'] == 'Wanita' ? 'checked' : ""?>> Wanita
                </td>
            </tr>

            <tr>
                <th style="text-align: center;">Alamat</th>
                <td>:</td>
                <td style="padding: 10px;"><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
            </tr>

            <tr>
                <th style="text-align: center;">Kontak</th>
                <td>:</td>
                <td style="padding: 10px;"><input type="text" name="kontak" value="<?= $data['kontak'] ?>"></td>
            </tr>

            <tr>
                <th style="text-align: center;">Foto</th>
                <td>:</td>
                <td style="padding: 10px;"><input type="text" name="foto" value="<?= $data['foto'] ?>"></td>
            </tr>

            <tr>
                <td colspan="7" style="text-align: center; padding: 5px"><button type="submit" name="updateprofil">Update Data</button></td>
            </tr>

        </table>
      
        </form>
    </div>  

</div>

<?php 
   
    if(isset($_POST['updateprofil'])){
      
        $username = $_POST['username'];
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $tgl = $_POST['tgl'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        $foto = $_POST['foto'];
        

        $sql = "update profil inner JOIN users on profil.id_user  = users.id_user SET profil.nama_depan  = '$nama_depan', nama_belakang = '$nama_belakang', tgl_lahir = '$tgl', jk = '$jk', alamat = '$alamat', kontak = '$kontak', foto = '$foto' where users.username = '$username' ";

        $query = mysqli_query($konek,$sql);

        if ($query) {
            echo "Data Berhasil diupdate";
         header("Location: myprofile.php?username=$username");
           
         } else {
            echo "Terjadi KEsalahan " . mysqli_error($konek);
         }
        
         
    }

?>

