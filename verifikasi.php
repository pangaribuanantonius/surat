<?php
ob_start(); 
session_start();

include "koneksi.php";



$nip   		= $_REQUEST['nip'];
$password 	= $_REQUEST['password'];



$sql_cek = "SELECT * FROM tbluser WHERE nip='$nip' 
		    AND password='$password' ";
$qry_cek = mysqli_query($koneksi,$sql_cek) 
		   or die ("Gagal Cek".mysqli_error($koneksi));
$ada_cek = mysqli_num_rows($qry_cek);
$array = mysqli_fetch_array($qry_cek);
if ($ada_cek >=1) {
	
	
	
	$_SESSION['iduser']=$array['iduser'];
	$_SESSION['nip']=$array['nip'];
	$_SESSION['nama']=$array['nama'];
	$_SESSION['jabatan']=$array['jabatanok'];
	$_SESSION['idbidang']=$array['idbidang'];
	


	if ($_SESSION['jabatan']=="") 
	{
		header("location: index.php?page=dashboard");

	} else if ($_SESSION['jabatan']=="kadis") {
		header("location: index.php?page=lamankadis");

	} else if ($_SESSION['jabatan']=="kabid") {
		header("location: index.php?page=lamanbidang");

	} else if ($_SESSION['jabatan']=="kasi") {
		header("location: index.php?page=lamanseksi");
		
	} else if ($_SESSION['jabatan']=="staff") {
		header("location: index.php?page=lamanstaff");
	}

	
	







	
	exit;
}
else { ?>

<script language='javascript' type='text/javascript'> alert('Username dan Password Tidak Valid');
window.location='logout.php'; 
</script>

<?php } 