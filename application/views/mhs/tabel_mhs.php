<h1>Halaman Mhs</h1>
<?php


?>

<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>NRP</th>
		<th>Nama</th>
		<th>Action</th>
	</tr>
	<?php
		foreach($m as $row){
			echo "<tr>";
			echo "<td>$row->nrp</td> <td>$row->nama </td>";
			echo "<td><a href='mahasiswa/show/$row->nrp/$row->nama'>Edit</a></td>";
			echo "</tr>";
		}
	?>
</table>