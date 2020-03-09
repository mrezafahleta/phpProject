<?php
$iduser = $_GET['id'];
$sql = "SELECT * FROM users WHERE id_user = '$iduser'";
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_assoc($query);
?>
<hr>
<form action="" method="POST">
   <input type="text" name="iduser" value="<?= $data['id_user'] ?>"  hidden>
   <table border="1">
      <caption>Edit Users <?= $data['username'] ?></caption>
      <tr>
         <th align="left">Email</th>
         <td>:</td>
         <td><?= $data['email'] ?></td>
      </tr>
      <tr>
         <th align="left">Status</th>
         <td>:</td>
         <td>
            <input type="radio" name="status" value="Y" <?= $data['status'] == 'Y' ? 'checked' : '' ?>> Aktif
            <input type="radio" name="status" value="N" <?= $data['status'] == 'N' ? 'checked' : '' ?>> Tidak Aktif
         </td>
      </tr>
      <tr>
         <th align="left">Level</th>
         <td>:</td>
         <td>
            <select name="level">
               <option value="1" <?= $data['level'] == 1 ? 'selected' : '' ?>>Administrator</option>
               <option value="2" <?= $data['level'] == 2 ? 'selected' : '' ?>>User</option>
            </select>
         </td>
      </tr>
      <tr>
         <td colspan="3">
            <button type="submit" name="simpan-users">Simpan Perubahan</button>
         </td>
      </tr>
   </table>
</form>

<?php
if (isset($_POST['simpan-users'])) {
   $iduser = $_POST['iduser'];
   $status = $_POST['status'];
   $level = $_POST['level'];

   $sql = "UPDATE users SET status='$status', level = '$level' WHERE id_user = '$iduser'";
   $query = mysqli_query($konek, $sql);

   if ($query) {
      echo "Data Berhasil diupdate";
      header("Location: index.php");
   } else {
      echo "Terjadi KEsalahan " . mysqli_error($konek);
   }
}
?> 