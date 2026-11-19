<?php 

mysqli_report(MYSQLI_REPORT_OFF);

//parameter koneksi
$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "db_perpustakaan";

//membuat koneksi 
$koneksi  = mysqli_connect($host, $username, $password, $database);

//memeriksa koneksi
if (!$koneksi) {
    die("Koneksi Gagal: " . htmlspecialchars(mysqli_connect_error()));
} else {
    echo "Koneksi Berhasil";   
}  


//mengatur karakter agar huruf dan simbol tersimpan dengan benar
mysqli_set_charset($koneksi, "utf8mb4"); 

?>