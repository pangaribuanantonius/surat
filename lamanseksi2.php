<?php ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){



?>

<h5>Selamat Datang <?php echo $_SESSION['nama'];?></h5>

<a class="btn btn-sm btn-primary" href="index.php?page=formsuratkeluar"><small>Buat Surat Keluar</small></a>
<br  />
<br />

<div class="row">
  <div class="col-6"><a href="index.php?page=lamanstaff" class="btn btn-outline-info btn-sm btn-block">Surat Masuk</a></div>
  <div class="col-6"><a href="index.php?page=lamanstaff2" class="btn btn-outline-info btn-sm btn-block">Surat Keluar</a></div>
</div>
<br />


<?php

 
   
                                                $result = mysqli_query($koneksi,"SELECT * FROM tblbuatsurat join tblopd on tblopd.idopd=tblbuatsurat.idopd WHERE iduser=$_SESSION[iduser]");
                                                 while ($row = mysqli_fetch_array($result))
                                                     {
                                                ?>




<div class="card mb-3">
      <!-- <button type="button" class="btn btn-danger btn-sm">Close</button>
      <button type="button" class="btn btn-danger btn-sm">Close</button>
      <button type="button" class="btn btn-danger btn-sm">Close</button> -->
  <div class="card-header">
    <p class="btn btn-block btn-sm btn-outline m-0" style="color: orange; "><strong><?=$row['opd']?></strong></p>
  </div>
  <div class="card-body">
    
    <?=$row['jenissurat']?> <br /> <br />
    <a class="btn btn-sm btn-primary btn-block" href="./upload/file/<?=$row['file']?>"><small>Dokumen</small></a>

     <a class="btn btn-sm btn-success btn-block" href="#" href="#" data-toggle="modal" data-target="#kekabid<?php echo $row['idbuatsurat'];?>"><small>Disposisi</small></a>
 
   

    
  
  

    <!-- <a href="detail2"><button class="btn btn-primary btn-sm"><small>Dokumen</small></button></a> &nbsp; <a href="detail2"><button class="btn btn-primary btn-sm"><small>Disposisi</small></button></a> -->
  </div>
  <div class="card-footer">
    <small><i class="fas fa-calendar"> <?=$row['tanggal']?></i></small> &nbsp; <small><i class="fas fa-clock"> <?=$row['waktu']?></i></small>
  </div>
</div>
<?php } ?>

<?php } ?>




<!--update-->

                                              <?php 
                                              include 'koneksi.php'; 

                                                $update=mysqli_query($koneksi,"SELECT * FROM tblbuatsurat");
                                                while ($row = mysqli_fetch_assoc($update))
                                                     {


                                              ?>

    <div class="modal fade" id="kekabid<?php echo $row['idbuatsurat'];?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
          <!-- Ini adalah Bagian Header Modal -->
          <div class="modal-header">
            <h4 class="modal-title">Disposisi</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Ini adalah Bagian Body Modal -->








          <div class="modal-body">
            <form method="post" action="kekabid.php?idbuatsurat=<?php echo $row['idbuatsurat'] ?>" enctype="multipart/form-data">

              <input type="hidden" name="idbuatsurat" value="<?php echo $row['idbuatsurat']; ?>">



              <div class="form-group">
                <label>Disposisi Ke</label>
                <select class="form-control" name="idbidang">
                  <option value="0">Pilih</option>
                   <?php  

                  $data = mysqli_query($koneksi, "select * from tblbidang where idbidang=$_SESSION[idbidang]");
                  while ($fetcharray  = mysqli_fetch_array($data)) {
                    $bidang    = $fetcharray['bidang'];
                    $idbidang  = $fetcharray['idbidang'];
                   
                  ?>

                  <option value="<?=$idbidang;?>"><?=$bidang;?></option>


                  
                          <?php
                        }


                  ?>
                </select>
                <!-- <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>"  required> -->
              </div>

              
            

          </div>
          
          <!-- Ini adalah Bagian Footer Modal -->
          <div class="modal-footer">
            <button type="submit"  class="btn btn-primary toastrDefaultSuccess" name="submit">Simpan</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>

            <?php } ?>
<!--akhir update-->








          
