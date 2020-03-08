<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
      break;
   case 'about':
      include 'view/about.php';
      break;
   case 'business':
      include 'view/business.php';
      break;
   case 'relationship':
      include 'view/relationship.php';
      break;
   case 'carrier':
      include 'view/carrier.php';
      break;
   case 'contact':
      include 'view/contact.php';
      break;

   case 'register':
      include 'view/register.php';
      break;

   case 'login':
      include 'view/login.php';
      break;

      //modul

   case 'act-register':
      include 'modul/act-register.php';
      break;

   case 'act-login':
      include 'modul/act-login.php';
      break;






   default:
      include 'view/404.php';
      break;
}
