 


<?php
 ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){  


  
  $idopd = $_POST['idopd'];
  $jenissurat = $_POST['jenissurat'];
  $iduser = $_POST['iduser'];
  





    $file  = $_FILES['file']['name'];
    $size   = $_FILES['file']['size'];
    $type   = $_FILES['file']['type'];
    $source   = $_FILES['file']['tmp_name'];
    $folder   = './upload/file/';

    $file  = htmlentities($file);
    $size   = htmlentities($size);
    $type   = htmlentities($type);
    $source   = htmlentities($source);

    if ($file=="") {
      header('location: index.php?pesan=FileKosong');
    } else {

      $extensionList = array("pdf", "PDF");
      $pecah = explode("." , $file);
      $ekstensi = $pecah[1];
      $pathFile = $folder . $file;
      if(!in_array($ekstensi, $extensionList))
      {
      header('location: index.php?pesan=TipeFileSalah');
      
    }else{

    move_uploaded_file($source, $folder.$file);



  
       $tambah=mysqli_query($koneksi,"INSERT INTO tblsuratmasuk (idopd, jenissurat, iduser, tanggal, waktu, file) VALUES 
        ('$idopd', '$jenissurat', '2', now(), now(), '$file')") or die(mysqli_error($koneksi));

  if ($tambah) {
   
    header('location: index.php?pesan=sukses');

  }
  


 

  else {
    header('location: index.php?pesan=gagal');
  }

   } 
  }

}

?>



