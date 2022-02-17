<?php ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){

?>


 <?php } else   {
  header('location:logindulu.php');
}
?>