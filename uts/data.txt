<!DOCTYPE html>
 <html>
 <head>
 	<title>UTS Covid19</title>
 </head>
 <style type="text/css">
 	body{
 		font-family: arial;
 	}
 </style>
 <body>
 <center><h2>Data Pemantaun Covid19 Di Beberapa Wilayah <br>  <?php
echo "Per " . date("Y-m-d h:i:sa") . "<br>";
?> <br> MUHAMMAD YUSRON / 171011401462</h2>
<table border="2" cellpadding="7">
	<tr>
	<th>Nama Wilayah     </th>	
	<th>Positif     </th>
	<th>Dirawat     </th>
	<th>Sembuh      </th>
	<th>Meninggal   </th>
	</tr>
	<?php 
	include("koneksi.php");
	$query=mysqli_query($koneksi,"SELECT * FROM dki_jakarta");
	while($data = mysqli_fetch_array($query)){
	 ?>
	
<tr>
	<td>DKI Jakarta</td>
	<td><?php echo $data['positif']; ?></td>
	<td><?php echo $data['dirawat']; ?></td>
	<td><?php echo $data['sembuh']; ?></td>
	<td><?php echo $data['meninggal']; ?></td>
</tr>

<tr>
	<td>Jawa Barat</td>
	<td>762</td>
	<td>612</td>
	<td>79</td>
	<td>71</td>
</tr>
<tr>
	<td>Banten</td>
	<td>337</td>
	<td>273</td>
	<td>29</td>
	<td>35</td>
</tr>
<tr>
	<td>Jawa Tengah</td>
	<td>479</td>
	<td>373</td>
	<td>54</td>
	<td>52</td>
</tr>
</table>
<?php } ?>

 </center>

 </body>
 </html>