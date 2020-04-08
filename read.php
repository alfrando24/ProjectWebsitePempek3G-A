<?php 
include 'koneksi.php';
	$query = "SELECT * FROM alamat ORDER BY id ASC";
	$result = mysqli_query($koneksi,$query);

	$no = 1;
	while ($row = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php  echo $no; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['telephone']; ?></td>
				<td><?php echo $row['kotakabupaten']; ?></td>
				<td><?php echo $row['provinsi']; ?></td>
				<td><?php echo $row['kode_pos'];?></td>
				<td><?php echo $row['kecamatan'];?></td>
				<td><?php echo $row['kelurahan']; ?></td>
			</tr>
	}