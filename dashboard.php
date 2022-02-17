<?php ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){



?>  

<h5>Selamat Datang <?php echo $_SESSION['nama'];?></h5>
<!-- <br  />


<div class="row">
  <div class="col-6"><a href="index.php?page=lamankadis" class="btn btn-outline-info btn-sm btn-block">Surat Masuk</a></div>
  <div class="col-6"><a href="index.php?page=lamankadis2" class="btn btn-outline-info btn-sm btn-block">Surat Keluar</a></div>
</div>
<br /> -->

<?php
include 'koneksi.php';
 
   
                                                $result = mysqli_query($koneksi,"SELECT * FROM tblsuratmasuk join tblopd on tblopd.idopd=tblsuratmasuk.idopd WHERE iduser='2'");
                                                 while ($row = mysqli_fetch_array($result))
                                                     {
                                                ?>






<div class="card">
  <div class="card-header">
    <p class="btn btn-block btn-secondary btn-sm m-0"><small><?=$row['opd']?></small></p>
  </div>
  <div class="card-body">
    
    <?=$row['jenissurat']?> <br /> <br />
    <a class="btn btn-sm btn-primary btn-block" href="./upload/file/<?=$row['file']?>">
      <small>Dokumen</small>
    </a>
 


    <!-- <a href="detail2"><button class="btn btn-primary btn-sm"><small>Dokumen</small></button></a> &nbsp; <a href="detail2"><button class="btn btn-primary btn-sm"><small>Disposisi</small></button></a> -->
  </div>
  <div class="card-footer">
    <small><i class="fas fa-calendar"> <?=$row['tanggal']?></i></small> &nbsp; <small><i class="fas fa-clock"> <?=$row['waktu']?></i></small>
  </div>
</div>
<?php } ?>

 <?php } ?>




          
<br />




            <a href="index.php?page=formbuatsurat">
              <button type="button" class="btn btn-primary btn-sm btn-block">
                <small>Buat Surat Masuk</small>
              </button>
            </a>
            