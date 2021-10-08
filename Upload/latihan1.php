<!-- form -->
<form enctype="multipart/form-data" method="post" action="latihan1_upload.php">  <!-- form actionnya merujuk ke latihan1_upload.php  -->4file 
    <!-- file yang diupload akan bernama fupload, agar lebih mudah untuk dihubungkan dengan php -->
    File yang diupload: <input type="file" name="fupload"><br> 
    <!-- inputan bertipe text area, karena deskripsi biasanya membutuhkan banyak kata/kalimat -->
    Deskripsi File: <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br>
    <!-- button untuk mengirim file -->
    <input type=submit value=Upload>
</form>