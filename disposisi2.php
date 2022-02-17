 <?php 
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){

  /*$idseksi = $_POST['idseksi'];*/
  $idbidang = $_SESSION['idbidang'];
  $iduser = $_POST['iduser'];
  $idsuratmasuk = $_POST['idsuratmasuk'];

 
 
  







  
   
      
  


  
      $tambah=mysqli_query($koneksi," update tblsuratmasuk set idbidang='$idbidang', jabatan='kasi', iduser='$iduser' where idsuratmasuk='$idsuratmasuk' ") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?page=lamanbidang&&pesan=sukses');

  }
  


 

  else {
    header('location: index.php?page=lamanbidang&&pesan=gagal');
  }

}

   

?>