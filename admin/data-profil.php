

<!-- Menampilkan data profile -->

<?php



$username = $_GET['username'];

$sql = " select * from users right join profil on users.id_user = profil.id_profil WHERE users.username = '$username '";


$query = mysqli_query($konek, $sql);

 ($data = mysqli_fetch_assoc($query))  ?>

    <h2>Data Profil : <?= $data['email'] ?></h2>

    <div class="container" style="display: flex;">
        <table border="1" style="margin-top: 10px; margin-left:20px; text-align:left; width:400px; background-color: #eee;">
            
            <tr>
                <th style="text-align: center;">Nama Depan</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['nama_depan'] ?></td>
            </tr>

            <tr>
                <th style="text-align: center;">Nama Belakang</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['nama_belakang'] ?></td>
            </tr>

            <tr>
                <th style="text-align: center;">Tanggal Lahir</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['tgl_lahir'] ?></td>
            </tr>

            <tr>
                <th style="text-align: center;">Jenis Kelamin</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['jk'] ?></td>
            </tr>

            <tr>
                <th style="text-align: center;">Alamat</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['alamat'] ?></td>
            </tr>

            <tr>
                <th style="text-align: center;">Kontak</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['kontak'] ?></td>
            </tr>

            <tr>
                <th style="text-align: center;">Foto</th>
                <td>:</td>
                <td style="padding: 10px;"><?= $data['foto'] ?></td>
            </tr>

            <tr>
                <td colspan="7" style="text-align: center; padding: 5px"><a href="myprofile.php?act=edit&username=<?= $data['username'] ?>">EDIT MY PROFILE</a></td>
            </tr>

        </table>
      
        <?php
      

if (isset($_GET['act'])) {
    if ($_GET['act'] == 'edit') {
        include 'edit_myprofile.php';
    }
}

?>

    </div>



