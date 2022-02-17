<?php ob_start(); session_start();
include "koneksi.php";
error_reporting(0);
if($_SESSION['iduser']){



?>








   

     


       


                <form class="form-horizontal" method="post" action="addsuratmasuk.php"  enctype="multipart/form-data">
                <div class="box-body">
                  
                  <div class="form-group">
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
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sifat Surat<span class="required"></span></label>
                    <div class="col-md-12">
                      <select class="form-control" id="first-name" name="jenissurat">
                        <option value="0">Pilih</option>
                        <option value="Biasa">Biasa</option>
                        <option value="Segera">Segera</option>
                      </select>
                    </div>
                  </div>



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

                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File<span class="required"></span></label>
                    <div class="col-md-12">
                      <input class="form-control" type="file" name="file" required="required">
                    </div>
                  </div>
                </div>

                

                <div class="box-footer ml-2">
                  <button type="submit" class="btn btn-sm btn-success btn-block">Kirim</button>
                  <button class="btn btn-sm btn-danger btn-block" type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
                </div>
              </form>


              
         
      


    







  
    
      

    
    

<?php } else   {
  header('location:logindulu.php');
}
?>



  

