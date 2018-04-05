<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error)
    {
    echo "gagal koneksi : ".$koneksi->connect_error;
    }
else
    {
        echo "sambungan basis data berhasil";
    }
$query = "update data_member"." set nama = '".$_POST["nama"]."', alamat = '".$_POST["alamat"]."', no_hp = ".$_POST["nohp"]." where id = ".$_POST["id"];
    
if($koneksi->query($query)==true)
{
echo "<br> Data dengan nama '".$_POST["nama"]."' berhasil disimpan ke database".
'<a href = "main.php">silahkan lihat Data</a>';
}
else
{
    
    echo "<br>Data gagal disimpan <br>";
    echo $query;
}