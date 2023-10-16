<?php
    $dbname="db_tamu";
    $host='localhost';
    $password='';
    $username='root';
//Konesik ke MySQL
    $cnn = mysqli_connect($host, $username, $password, $dbname);
//Membuat Koneksi
    if(!$cnn){
        die("Koneksi Failed : ".mysqli_connect_error());
    }
//Membuat tabel
$sql ="CREATE TABLE bukutamu (
    id integer not null auto_increment,
    nama varchar (25),
    email varchar (25),
    url varchar (25),
    komentar varchar (25),
    constraint pk_bukutamu primary key(id)
    )";
if (mysqli_query($cnn, $sql)){
    echo "Table Berhasil dibuat.";
    }else{ echo" Tabel Gagal dibuat : ".mysqli_error($cnn);
}
    mysqli_close($cnn);
?>