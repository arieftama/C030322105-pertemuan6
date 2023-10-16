<html>
<head>
	<title>CRUD Data Siswa</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: dodgerblue;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: dodgerblue;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            background-color: #fff;
            border-collapse: collapse;
            margin: 20px;
            width: 90%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: dodgerblue;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }

        td a {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            background-color: dodgerblue;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        td a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="tambah_data.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";

	$query = "SELECT * FROM datasiswa"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/" . $data['foto'] . "' width='100' height='100'></td>";
		echo "<td>" . $data['nis'] . "</td>";
		echo "<td>" . $data['nama'] . "</td>";
		echo "<td>" . $data['jenis_kelamin'] . "</td>";
		echo "<td>" . $data['telp'] . "</td>";
		echo "<td>" . $data['alamat'] . "</td>";
		echo "<td><a href='form_ubah.php?nis=" . $data['nis'] . "'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?nis=" . $data['nis'] . "'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
