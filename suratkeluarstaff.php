 


<?php
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){  


  
 $nomorsurat=$_POST['nomorsurat'];
 $jenissurat=$_POST['jenissurat'];
 $lampiran=$_POST['lampiran'];
 $perihal=$_POST['perihal'];
 $idopd=$_POST['idopd'];
 $keterangan=$_POST['keterangan'];
 $iduser=$_SESSION['iduser'];






   

 


  
      $tambah=mysqli_query($koneksi,"INSERT INTO tblbuatsurat
      (nomorsurat, jenissurat, lampiran, perihal, idopd, keterangan, iduser, waktu)
      VALUES 
      ('$nomorsurat', '$jenissurat', '$lampiran', '$perihal', '$idopd', '$keterangan', '$iduser', now())") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?page=lamanstaff&&pesan=sukses');

  }
  


 

  else {
    header('location: index.php?page=lamanstaff&&pesan=gagal');
  }

    
  

}

?>



