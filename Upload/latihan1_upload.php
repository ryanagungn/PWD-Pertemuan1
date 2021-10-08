<?php
$lokasi_file = $_FILES['fupload']['tmp_name']; //variabel $lokasi_file digunakan untuk menampung unggahan dan menyimpan file di server secara sementara (temp)
$nama_file = $_FILES['fupload']['name']; //variabel $nama_file digunakan untuk menampung unggahan dan menyimpan file
$deskripsi = $_POST['deskripsi']; //variabel $deskripsi digunakan untuk menampung deskripsi agar bisa ditambah/dirubah di server
$direktori = "c:/xampp/htdocs/PWD/Upload/$nama_file"; //variabel untuk menampung direktori file unggahan

/*
    apabila file unggahan ada dan benar, maka cetak "file dengan nama yang sudah ditentukan telah berhasil diupload beserta dengan deskripsi
    apabila tidak, maka cetak "file gagal diupload"
*/

if (move_uploaded_file($lokasi_file, $direktori)) {
    echo "Nama File: <b>$nama_file</b> berhasil di upload <br>";
    echo "Deskripsi File :<br>$deskripsi";
} else {
    echo "File gagal diupload";
}
