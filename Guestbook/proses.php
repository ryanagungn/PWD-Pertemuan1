<?php
echo "<head><title>My Guest Book</head></title>"; //wadah yang berisi title
$nama = $_POST["nama"]; //variabel untuk menampung data nama yang akan dikirim untuk ditambah/dirubah dalam server
$alamat = $_POST["alamat"]; //variabel untuk menampung data alamat yang akan dikirim untuk ditambah/dirubah dalam server
$email = $_POST["email"]; //variabel untuk menampung data email yang akan dikirim untuk ditambah/dirubah dalam server
$status = $_POST["status"]; //variabel untuk menampung data status yang akan dikirim untuk ditambah/dirubah dalam server
$komentar = $_POST["komentar"]; //variabel untuk menampung data komentar yang akan dikirim untuk ditambah/dirubah dalam server
$fp = fopen("guestbook.txt", "a+"); //variabel $fl untuk menampung fopen, yang digunakan untuk membuka file dari $filecounter, dengan akses a+ (dibaca dan ditulis didalam pointer di akhir file)
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n"); //menulis/menyimpan sebuah karakter pada sebuah file $fp
fclose($fp); //menutup file $fp
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>"; //mencetak teks untuk ditampilkan ke website
echo "<a href=tampilan.html> Isi Buku Tamu </a><br>"; //menjadikan teks link untuk mengakses alamat lain
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>"; //menjadikan teks link untuk mengakses alamat lain
?>