<!-- Menampilkan Data Users -->
<table border="1">
    <tr style="text-align: center">
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Status</th>
        <th>Level</th>
        <th>Login</th>
        <th>Aksi</th>
        <th>Profil</th>
    </tr>

    <?php
    //Menampilkan  data dari table users 
    $sql = "Select * from users inner join level on users.level =level.id_level";

    $query = mysqli_query($konek, $sql,) or die(mysqli_error($konek)); // Fungsi untuk menjalankan query dari variabel $sql

    $no = 1;
    // Perulangan Data daro data diatas
    while ($data = mysqli_fetch_assoc($query)) : ?>




        <tr style="text-align: center">
            <td><?php echo $no++ ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['email'] ?></td>

            <td><?= $data['status'] == 'Y' ? 'Aktif' : 'Tidak Aktif' ?></td>
            <td><?= $data['level'] ?></td>
            <td><?= $data['login_at'] ?></td>
            <td>
                <a href="index.php?act=edit&id=<?= $data['id_user'] ?>">Edit</a>
                <?php
                if ($data['id_level'] == '1') {
                    echo "";
                } else { ?>

                    <a href="index.php?act=delete&id= <?php echo $data['id_user'] ?>" onclick="return confirm('Yakin Data Ingin Dihapus ?')">Delete</a>
                <?php
                }

                ?>
            </td>
            <td>
            <a href="myprofile.php?username=<?php echo $data['username'] ?>">My Profile</a>
            </td>
        </tr>
                
    <?php endwhile ?>
</table>
<hr>
<!-- Form Edit User -->


<!-- My Profile -->








   

<!-- Akhir My Profile -->



<?php
if (isset($_GET['act'])) {
   if ($_GET['act'] == 'edit') {
      include 'edit-user.php';
   }
}
?>




<!-- Form Delete User -->
<?php

if (isset($_SESSION['pesan'])) {
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
}

if (isset($_GET['act'])) {
    if($_GET['act'] == 'delete'){
    $id_user = $_GET['id'];

    $sql = "Delete from users where id_user = '$id_user' ";
    $query = mysqli_query($konek, $sql);
    if ($query == true) {
        $_SESSION['pesan'] = 'Data Users Berhasil Dihapus';
        header('Location: index.php');
    } else {
        echo "Terjadi Kesalahan" . mysqli_error($konek);
    }
}
}

?>