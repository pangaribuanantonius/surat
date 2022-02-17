 <?php 
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);


  $iduser = $_POST['iduser'];
  
  $idbuatsurat = $_POST['idbuatsurat'];

 
 
  







  
   
      
  


  
      $tambah=mysqli_query($koneksi," update tblbuatsurat set iduser='$iduser', jabatan='kasi' where idbuatsurat='$idbuatsurat' ") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?page=lamanstaff2&&pesan=sukses');

  }
  


 

  else {
    header('location: index.php?page=lamanstaff2&&pesan=gagal');
  }



   

?>