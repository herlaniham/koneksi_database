<?php
$host="localhost";
$user="root";
$password="";
$database="inwepo";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($database,$koneksi);

if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>
