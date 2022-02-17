 <?php 
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){

  $idbidang = $_POST['idbidang'];
  
  $idsuratmasuk = $_POST['idsuratmasuk'];

  $iduser = $_POST['iduser'];
 
  







  
   
      
  


  
      $tambah=mysqli_query($koneksi,"update tblsuratmasuk set idbidang='$idbidang', iduser='' where idsuratmasuk='$idsuratmasuk'") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?page=lamankadis&&pesan=sukses');

  }
  


 

  else {
    header('location: index.php?page=lamankadis&&pesan=gagal');
  }

}

   

?>