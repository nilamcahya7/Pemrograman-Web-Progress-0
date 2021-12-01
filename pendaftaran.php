<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<style>
.box-pendaftaran{
    align-content: center;
}
</style>
<body>
    <div class="box-pendaftaran">
        <form action="" method="post">
            <input type="text" name="nik" placeholder="Masukan nomor NIK"><br>
            <input type="text" name="nama" placeholder="Masukan Nama"><br>
            <input type="text" name="tgl_lahir" placeholder="Masukan Tanggal Lahir"><br>
            <input type="text" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin"><br>
            <input type="text" name="nomor_ponsel" placeholder="Masukan Nomor ponsel"><br>
            <input type="text" name="alamat" placeholder="Masukan Alamat"><br>
            <input type="submit" name="Daftar" value = "Daftar" ><br>
        </form>
    </div>
</body>
</html>
<?php
session_start();
include "koneksi.php";

if(isset($_POST['Daftar'])){
    $sql=mysqli_query($con," INSERT INTO pendaftaran_pengguna set
    nik = '$_POST[nik]',
    nama = '$_POST[nama]',
    tgl_lahir = '$_POST[tgl_lahir]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    nomor_ponsel = '$_POST[nomor_ponsel]',
    alamat = '$_POST[alamat]'");


}

?>