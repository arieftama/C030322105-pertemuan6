<?php
$dbname = 'db_siswa';
$host = 'localhost';
$password = '';
$username = 'root';
//Koneksi Ke MySQL
$cnn = mysqli_connect($host, $username, $password, $dbname);
//Membuat Koneksi 
if (!$cnn) {
	die("Koneksi Failed : " . mysqli_connect_error());
}
//Membuat Tabel
$sql = "CREATE TABLE datasiswa (
	nim CHAR(10) NOT NULL,
	nama VARCHAR(25) NOT NULL,
	alamat VARCHAR(50) NOT NULL,
	telp VARCHAR(15) NOT NULL,
constraint pk_datasiswa primary key(nim)
)";

if (mysqli_query($cnn, $sql)) {
	echo "Table Berhasil di Buat";
} else {
	echo "Table Gagal di Buat :" . mysqli_error($cnn);
}
mysqli_close($cnn);
?>