<?php



$nama = $_POST['nama'];



$usia = $_POST['usia'];

 
$jenis_kelamin = $_POST['jenis_kelamin'];

$agama = $_POST['agama'];

$alamat = $_POST['alamat'];

$tempat_lahir = $_POST['tempat_lahir'];

$tanggal_lahir = $_POST['tanggal_lahir'];

$hobi = $_POST['hobi'];

$cita = $_POST['cita_cita'];

$asal = $_POST['asal_sekolah'];

echo "Nama: " . $nama;

echo "<br/>";


echo "Usia: " . $usia;
echo "<br/>";

echo "Jenis kelamin: " . $jenis_kelamin;
echo "<br/>";

echo "Agama: " . $agama;
echo "<br/>";

echo "Alamat: " . $alamat;
echo "<br/>";

echo "Tempat lahir: " . $tempat_lahir;
echo "<br/>";

echo "Tanggal lahir: " . $tanggal_lahir;
echo "<br/>";

echo "Hobi: " . $hobi;
echo "<br/>";

echo "Cita-cita: " . $cita;
echo "<br/>";

echo "Asal Sekolah: " . $asal;

?>