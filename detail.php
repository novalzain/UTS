<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM db_covid WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);
 
 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>DETAIL DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Positif</td>
			</tr>
			<tr>
				<td><input disabled  type="text" value="<?= $d['positif'] ?>" name="positif"></td>
			</tr>
			<tr>
				<td>Dirawat</td>
			</tr>
			<tr>
				<td><input disabled type="text" value="<?= $d['dirawat'] ?>" name="dirawat"></td>
			</tr>
			<tr>
				<td>Sembuh</td>
			</tr>
			<tr>
				<td><input disabled type="text" value="<?= $d['sembuh'] ?>" name="sembuh"></td>
			</tr>
			<tr>
				<td>Meninggal</td>
			</tr>
			<tr>
				<td>
					<td><input disabled type="text" value="<?= $d['meninggal'] ?>" name="meninggal"></td>
				</td>
			</tr>			
		</tbody>
	</table>
</div>