<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
	require_once 'koneksi.php';
?>
<center><h1>Data Pemantauan Covid-19 Wilayah DKI Jakarta</h1></center>
<center><h1>Per 18 April 202 21:38:16 (Waktu dan Jam Sekarang)</h1></center>
<center><h1>Noval Zainal/2016142012</h1></center>
<center>
	<a class="button" href="?page=list">LIHAT DATA</a>
	<a class="button" href="?page=add">TAMBAH DATA</a>
</center>
<hr>
<?php 
	$page = (isset($_GET['page'])) ? $_GET['page'] : 'add' ;
 
	switch ($page) {
		case 'add':
			require_once 'add.php';
			break;
		case 'list':
			require_once 'list.php';
			break;
		case 'edit':
			require_once 'edit.php';
			break;
		case 'hapus':
			require_once 'delete.php';
			break;
		case 'detail':
			require_once 'detail.php';
			break;
		default:
			require_once 'add.php';
			break;
	}
 ?>
</body>
</html>