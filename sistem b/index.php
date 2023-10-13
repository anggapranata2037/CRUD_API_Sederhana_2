<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Pure CSS Table Highlight (vertical & horizontal)</title>
  
  
  
      <link rel="stylesheet" href="style.css">

</head>

<?php

$url="http://localhost/crud_api/sistem_a/service_tampil.php";

$json=@json_decode(file_get_contents($url));

?>

<body>
  <div class="container">
  <a href='tambah.php'>Tambah</a><br></br>
<center>
<tr>

	<table>	
  	<th><center>DATA MAHASISWA</center></th>
	</table>
	</tr>	 
      <table>
		<thead>		
			<tr>		
					
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>hp</th>
					<th>Aksi</th>
					
				</tr>
		</thead>

<?php

foreach($json as $key => $jsons){
	echo"	
<tr>
<td>".$jsons ->nim."</td>
<td>".$jsons ->nama."</td>
<td>".$jsons ->alamat."</td>
<td>".$jsons ->hp."</td>
<td><a href='edit.php?id=".$jsons->nim."'> Edit</a>/ 
	<a href='aksi_hapus.php?id=".$jsons->nim."'> Hapus</a>/ 
</tr>";	

}
		
?>	

</tbody>
</center>
</table>
</div>  
</body>
</html>









	