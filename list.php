<div style="width: 800px;">
	<table style="width: 800px; border : solid red 1px;">
	<thead>
		<tr>
			<th align="left">No</th>
			<th align="left">Positif</th>
			<th align="left">Dirawat</th>
			<th align="left">Sembuh</th>
			<th align="left">Meninggal</th>
			<th >Action</th>		
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT id,positif,dirawat,sembuh,meninggal FROM db_covid";
			$data=mysqli_query($MySQli,$SQL);
 
			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><a href="?page=detail&id=<?= $d['id'] ?>"><?= $d['positif'] ?></a></td>
			<td><?= $d['dirawat'] ?></td>
			<td><?= $d['sembuh'] ?></td>
			<td><?= $d['meninggal'] ?></td>
			<td align="center"> <a href="?page=edit&id=<?= $d['id'] ?>">Edit</a> - <a class="hapus" href="?page=hapus&id=<?= $d['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>