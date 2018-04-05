<h1 style="text-align:center;">Aplikasi Data Member</h1>
<h2 style="color:red;text-align:center;">firman pamungkas</h2>
<hr>
<a href="input.php">Tambah Data</a>
<table border="1";>

    
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO HP</th>
    </tr>
   
    <?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error) {
    echo "<tr><td>";
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</td></tr>";
} //else {
//    echo "<tr><td>";
//    echo "Sambungan basis data berhasil";
//    echo "</td></tr>";
//}
$query = "select * from data_member";
$data = $koneksi->query($query);
if($data->num_rows <= 0) {
    echo "<tr><td>";
    echo "-------------";
    echo "</td>";
    echo "<td>-------------</td>";
    echo "<td>-------------</td>";
    echo "<td>-------------</td>";
    echo "</tr>";
    echo "<br>Tidak Ada Data Di Dalam Tabel Silahkan Klik Tambah Data";
    
    
} else {
    while($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["alamat"] . "</td>";
        echo "<td>".$row["no_hp"]."</td>";
        echo '<td><a href="edit.php?id=' . 
            $row["id"] . '">Edit</a></td>';       
        echo '<td><a href="hapus.php?id='.
            $row["id"].'">Hapus</a></td>';
        echo "</tr>";
    }
}
    ?>