<h1 style="text-align:center;">Konfirmasi Pengisian Data</h1>
<h2 style="color:red;text-align:center;">firman pamungkas</h2>
<hr>
<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else {
    echo "Sambungan basis data berhasil";
}
/*
echo 'id : ' . $_POST["id"];
echo "<br>";
echo "nama : " . $_POST["nama"];
echo "<br>";
echo "alamat : " . $_POST["alamat"];
echo "<br>";
echo "no hp : " . $_POST["nohp"];
echo "<br>";
*/
$query = "insert into data_member(id, nama, alamat,no_hp) " .
        "values(" . $_POST["id"] . ",'" . 
        $_POST["nama"] . "','" . $_POST["alamat"] . "',".$_POST["nohp"] . ")";
//echo "<br>".$query;
if($koneksi->query($query) === true) {
    echo "<br> Data dengan nama '" . $_POST["nama"] . "' berhasil disimpan ke database." .
            ' <a href="main.php">Lihat Data Anda</a>';
} else {
    echo "<br>Data GAGAL disimpan";
}
$koneksi->close();
?>