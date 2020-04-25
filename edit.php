<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM db_covid WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);
 
 ?>
<form method="POST" action="">
<div>
	<table>
		<thead>
			<tr>
				<th>EDIT DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Positif</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['positif'] ?>" name="positif"></td>
			</tr>
			<tr>
				<td>Dirawat</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['dirawat'] ?>" name="dirawat"></td>
			</tr>
			<tr>
				<td>Sembuh</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['sembuh'] ?>" name="sembuh"></td>
			</tr>
			<tr>
				<td>Meninggal</td>
			</tr>
			<tr>
				<td>
					<input type="text" value="<?= $d['meninggal'] ?>" name="meninggal"></td>
				</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
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
		$SQL = "UPDATE db_covid SET positif = '$positif',dirawat='$dirawat',sembuh='$sembuh',meninggal='$meninggal' WHERE id =$id";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal edit data buku tamu !!";
		}
		
	}
 ?>
 </center>