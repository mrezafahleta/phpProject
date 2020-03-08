<?php 

  session_start();
  require_once 'config/koneksi.php';

?>

<!doctype html>
<html lang="en">

<head>
  <?php include 'title.php'; ?>
</head>

<body>
  <!-- main -->
  <section id="main">

    <?php include 'header.php' ?>

    <?php include 'content.php' ?>

    <?php include 'footer.php' ?>
    
   
  </section>
  <!-- end main -->

  <?php include 'kaki.php'; ?>

</body>

</html>


