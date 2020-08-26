<table border="1" cellpadding="8">
	<tr>
		<th>NIM</th>
		<th>Nama Siswa</th>
		<th>Kelas Siswa</th>
		<th>Nomor Absen</th>
	</tr>
	<?php
	if (!empty($siswa)) { // Jika data pada database tidak sama dengan empty (alias ada datanya)
		foreach ($siswa as $data) { // Lakukan looping pada variabel siswa dari controller
			echo "<tr>";
			echo "<td>" . $data->nim . "</td>";
			echo "<td>" . $data->nama_siswa . "</td>";
			echo "<td>" . $data->kelas_siswa . "</td>";
			echo "<td>" . $data->nomor_absen . "</td>";
			echo "</tr>";
		}
	} else { // Jika data tidak ada
		echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
	}
	?>
</table>
