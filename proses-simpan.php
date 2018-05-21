<?php
require_once("koneksi.php");

if(isset($_POST['simpan'])){
$ID= $_POST[ID];
$Judul= $_POST['Judul']; 
$Studio = $_POST['Studio'];
$Harga = $_POST['Harga'];
$Tanggal = $_POST['Tanggal'];
$Jam = $_POST['Jam'];
$Kursi= $_POST['Kursi'];

$simpan = mysql_query("insert into pesanan values ('$ID','$Judul','$Studio','$Harga','$Tanggal','$Jam','$Kursi')");

echo"<script>window.alert('Data Sudah Tersimpan')
window.location='save.php'</script>";
}
?>