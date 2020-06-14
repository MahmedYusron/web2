<?php
include "koneksi.php";
$perintah = "SELECT * FROM articles ORDER BY articleID DESC";
echo ("
<h2>List Artikel</h2>
<br><UL>
");
if ($data = $koneksi->query($perintah)) {
    while ($row = $data->fetch_row()) {
        echo ("
 <LI>$row[1] &nbsp;$row[2] &nbsp; $row[3] &nbsp;<a
href=\"13EditArtikel.php?articleID=$row[0]\">Edit</a>
 &nbsp;<a
href=\"13DeleteArtikel.php?articleID=$row[0]\">Hapus</a></LI><br>");
    }
}
echo ("</table>");
echo "<br><a href=\"13FormulirArtikel.php\">Tambah</a>";
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
