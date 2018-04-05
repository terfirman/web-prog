<h1 style="text-align:center;">Formulir Update Data</h1>
<h2 style="color:red;text-align:center;">firman pamungkas</h2>
<hr>
<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
}
$query = "select * from data_member where id='" . 
    $_GET["id"] . "'";
$data = $koneksi->query($query);
$nama = "";
$alamat = "";
$nohp = "";
if($data->num_rows <= 0) {
    echo "Mas/Mba, kalo isi data sesuai prosedur yah!";
} else {
    while($row = $data->fetch_array()) {
        
        $nama = $row["nama"];
        $alamat = $row["alamat"];
        $nohp = $row["no_hp"];
    }
}
?>
<form action="update.php" method="post">
    <table>
        <tr>
            <td>ID </td>
            <td>: <input type="text" name="id" readonly="true"
                value=<?php echo $_GET["id"]; ?> ></td>
        </tr>
        <tr>
            <td>NAMA</td> 
            <td>: <input type="textarea" name="nama" 
                value=<?php echo $nama; ?>></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td> : <input type="text" name="alamat"
                value=<?php echo $alamat; ?>></td>
        </tr>
        <tr>
            <td>NO_HP</td>
            <td> : <input type="text" name="nohp"
                value=<?php echo $nohp; ?>></td>
        </tr>
    </table>
    <input type="submit" value="Simpan">
</form>