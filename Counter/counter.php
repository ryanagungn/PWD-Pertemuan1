<?php

$filecounter = "counter.txt"; //variabel $filecounter untuk menampung isi dari document text "counter.txt"
$fl = fopen($filecounter, "r+"); //variabel $fl untuk menampung fopen, yang digunakan untuk membuka file dari $filecounter, dengan akses r+ (dibaca dan ditulis)
$hit = fread($fl, filesize($filecounter)); //variabel $hit untuk membaca $fl dan mengembalikan ukuran file dari $filecounter kedalam byte

echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>"); //berisi deklarasi tabel dan css untuk memperbagus dan merapihkan layout tabel tersebut dan juga terdapat tag baris
echo ("<td width=250 valign=middle align=center>"); //td digunakan untuk membuat kolom pada sebuah tabel, terdapat css untuk memrapihkan layout
echo ("<font face=verdana size=2 color=#FF0000><b>"); //berfungsi untuk mengatur jenis, ukuran, dan warna dari font yang akan dipakai & juga untuk menebalkan teks
echo ("Anda pengunjung yang ke:"); //mencetak "Anda pengunjung yang ke:"
echo ($hit); //memanggil variabel $hit
echo ("</b></font>"); //tag penutup pada font dan juga bold diatas
echo ("</td>"); //tag penutup untuk pembuatan kolom
echo ("</tr></table>"); //tag penutup untuk baris dan tabel

fclose($fl); //berfungsi untuk menutup file yang telah dibaca (yaitu $fl) , agar tidak bertabrakan dengan kode dibawah
$fl = fopen($filecounter, "w+"); //variabel $fl diubah menjadi w+, yang berfungsi untuk menulis dan membaca, juga menulis ulang konten tersebut (write)
$hit = $hit + 1; //increment untuk $hit
fwrite($fl, $hit, strlen($hit)); //digunakan untuk menghitung jumlah karakter dari $hit
fclose($fl); //berfungsi untuk menutup file kembali

?>