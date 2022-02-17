<?php ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){



?>








   

     


       


                <form class="form-horizontal mb-2" method="post" action="suratkeluarstaff.php" enctype="multipart/form-data">
                <div class="box-body">

                  <!-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Asal Surat<span class="required"></span></label>
                    <div class="col-md-12">

                      <select class="form-control" id="first-name" name="idopd">
                        <option value="0">Pilih</option>

                        <?php  

                  $data = mysqli_query($koneksi, "select * from tblopd");
                  while ($fetcharray  = mysqli_fetch_array($data)) {
                    $opd    = $fetcharray['opd'];
                    $idopd      = $fetcharray['idopd'];
                   
                  ?>

                  <option value="<?=$idopd;?>"><?=$opd;?></option>


                  
                          <?php
                        }


                  ?>

                      </select>

                    </div>
                  </div> -->

                 <!--  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sifat Surat<span class="required"></span></label>
                    <div class="col-md-12">
                      <select class="form-control" id="first-name" name="jenissurat">
                        <option value="0">Pilih</option>
                        <option value="Biasa">Biasa</option>
                        <option value="Segera">Segera</option>
                      </select>
                      
                    </div>
                  </div> -->



                  <!--  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Keterangan<span class="required"></span></label>
                    <div class="col-md-12">
                      <input class="form-control" type="text" id="first-name" name="jenissurat" required="required">
                    </div>
                  </div>-->

              <!--    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Desposisi Ke<span class="required"></span></label>
                    <div class="col-md-12">
                      <input class="form-control" type="text" name="disposisike" required="required">
                    </div>
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File<span class="required"></span></label>
                    <div class="col-md-12">
                      <input class="form-control" type="file" name="file" required="required">
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Nomor Surat<span class="required"></span></label>
                    <div class="col-md-12">
                      <input type="text" name="nomorsurat" required="required" class="form-control">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Sifat<span class="required"></span></label>
                    <div class="col-md-12">
                      <select class="form-control" name="jenissurat" required="required">
                        <option value="0">Pilih</option>
                        <option value="Biasa">Biasa</option>
                        <option value="Segera">Segera</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Lampiran<span class="required"></span></label>
                    <div class="col-md-12">
                      <input type="text" name="lampiran" required="required" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Perihal<span class="required"></span></label>
                    <div class="col-md-12">
                      <input type="text" name="perihal" required="required" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">OPD Tujuan<span class="required"></span></label>
                    <div class="col-md-12">

                      <select class="form-control" id="first-name" name="idopd">
                        <option value="0">Pilih</option>

                        <?php  

                  $data = mysqli_query($koneksi, "select * from tblopd");
                  while ($fetcharray  = mysqli_fetch_array($data)) {
                    $opd    = $fetcharray['opd'];
                    $idopd      = $fetcharray['idopd'];
                   
                  ?>

                  <option value="<?=$idopd;?>"><?=$opd;?></option>


                  
                          <?php
                        }


                  ?>

                      </select>

                    </div>
                  </div>


                  <!-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Desposisi<span class="required"></span></label>
                    <div class="col-md-12">

                      <select class="form-control" id="first-name" name="iduser">
                        <option value="0">Pilih</option>

                        <?php  

                  $data = mysqli_query($koneksi, "select * from tbluser where jabatanok='kasi' AND idbidang=$_SESSION[idbidang]");
                  while ($fetcharray  = mysqli_fetch_array($data)) {
                    $nama    = $fetcharray['nama'];
                    $iduser      = $fetcharray['iduser'];
                   
                  ?>

                  <option value="<?=$iduser;?>"><?=$nama;?></option>


                  
                          <?php
                        }


                  ?>

                      </select>

                    </div>
                  </div> -->

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Isi Surat<span class="required"></span></label>
                    <div class="col-md-12">
                      <textarea class="form-control" name="keterangan" required="required"></textarea>
                    </div>
                  </div>

                <!--   <div class="form-group">
                    <label for="" class="col-sm-2 control-label">File<span class="required"></span></label>
                    <div class="col-md-12">
                      <input type="file" name="file" class="form-control" required="required"> 
                    </div>
                  </div> -->

                <br />

                <div class="box-footer ml-2">
                  <button type="submit" class="btn btn-success btn-sm btn-block">Submit</button>
                  <button class="btn btn-sm btn-danger btn-block" type="button" class="btn btn-danger" onclick="history.back(-1)">Cancel</button>
         

                </div>
              </form>
<br />




              
         
      


    







  
    
      

    
    

<?php } else   {
  header('location:logindulu.php');
}
?>



  

