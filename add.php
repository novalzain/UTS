<form action="" method="POST">
<div>
	<table>
		<thead>
			<tr>
				<th>TAMBAH DATA BARU</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Positif</td>
			</tr>
			<tr>
				<td><input required type="text" name="positif"></td>
			</tr>
			<tr>
				<td>Dirawat</td>
			</tr>
			<tr>
				<td><input required type="text" name="dirawat"></td>
			</tr>
			<tr>
				<td>Sembuh</td>
			</tr>
			<tr>
				<td><input required type="text" name="sembuh"></td>
			</tr>
			<tr>
				<td>Meninggal</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="meninggal">
				</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
					<input  type="reset" value="RESET" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$positif = $_POST['positif'];
		$dirawat = $_POST['dirawat'];
		$sembuh = $_POST['sembuh'];
		$meninggal = $_POST['meninggal'];
		$SQL = "INSERT INTO db_covid (positif,dirawat,sembuh,meninggal) VALUES('$positif','$dirawat','$sembuh','$meninggal')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data buku tamu !!";
		}
		
	}
 ?>
 </center>