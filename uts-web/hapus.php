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
$qry = "delete from data_member where id =".$_GET["id"];   
if($koneksi->query($qry)==true)
{
echo "<br> Data id ".$_GET["id"].
" berhasil dihapus ".
'<a href = "main.php">lihat Data</a>';
}
else
{
    echo "<br>Data gagal dihapus";
}