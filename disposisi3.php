 <?php 
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);


  $iduser = $_POST['iduser'];
  $idbidang = $_SESSION['idbidang'];
  
  
  
  $idsuratmasuk = $_POST['idsuratmasuk'];

 
 
  







  
   
      
  


  
      $tambah=mysqli_query($koneksi," update tblsuratmasuk set idbidang='$idbidang', iduser='$iduser', jabatan='staff' where idsuratmasuk='$idsuratmasuk' ") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?page=lamanseksi&&pesan=sukses');

  }
  


 

  else {
    header('location: index.php?page=lamanseksi&&pesan=gagal');
  }



   

?>