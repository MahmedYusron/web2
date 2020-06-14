<?php  
include "koneksi.php";
$articleID = $_GET['articleID'];
$perintah = "DELETE FROM articles WHERE articleID =\"$articleID\"";
if (mysqli_query($koneksi, $perintah)) {
    echo "Artikel berhasil dihapus<br>";
    echo "<a href=\"13TampilanArtikel.php\">Back</a>";
} else {
    echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
 ke database MySQL.";
}
?>
