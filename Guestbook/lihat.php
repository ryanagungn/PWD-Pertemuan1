<?php
//head
echo "<head><title>My Guest Book</title></head>";

$fp = fopen("guestbook.txt", "r"); //variabel $filecounter untuk menampung isi dari document text "counter.txt"
echo "<table border=0>"; //pembuka tabel dengan atribut border dijadikan nol
while ($isi = fgets($fp, 80)) //variabel $isi dibuat untuk menampung nilai dari fgets, yang mana fgets sendiri digunakan untuk membaca string dari file sampai ditemukan garis baru '\n' atau setelah (n-1) karakter
{
    $pisah = explode("|", $isi); //variabel pisah digunakan untuk memisah string yang ada didalam $sisi
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; //Nama digunakan di indeks ke - 0
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>"; //Alamat digunakan di indeks ke - 1
    echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>"; //Email digunakan di indeks ke - 2
    echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>"; //Status digunakan di indeks ke - 3
    echo "<tr><td>Komentar </td><td>: $pisah[4]</td> </tr> <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; //Komentar digunakan di indeks ke - 4
}
echo "</table>"; //penutup tabel
echo "<a href=bukutamu.php> Klik Disini </a>Isi Form Buku Tamu"; //sebagai link untuk menuju ke bukutamu.php / tampilan
