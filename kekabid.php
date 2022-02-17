 <?php 
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);


  $idbidang = $_SESSION['idbidang'];
  $iduser = $_POST['iduser'];
  $idbuatsurat = $_POST['idbuatsurat'];

 
 
  







  
   
      
  


  
      $tambah=mysqli_query($koneksi," update tblbuatsurat set idbidang='$idbidang', jabatan='kabid', iduser='' where idbuatsurat='$idbuatsurat' ") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?page=lamanseksi2&&pesan=sukses');

  }
  


 

  else {
    header('location: index.php?page=lamanseksi2&&pesan=gagal');
  }



   

?>