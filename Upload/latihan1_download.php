<?php
$myDir = "c:/xampp/htdocs/PWD/Upload"; //variabel untuk menampung direktori penyimpanan file yang sudah diunggah
$dir = opendir($myDir); //berfungsi untuk membuka $myDir
echo "Isi folder (klik link untuk download : <br>"; //mencetak kalimat
while ($tmp = readdir($dir)) { //perulangan dengan variabel untuk membaca direktori sementara
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>"; //merujuk kepada file yang berada disana, apabila di klik maka akan dibuka di tab baru
}
closedir($dir); //menutup $myDir
?>