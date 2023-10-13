
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Pure CSS Table Highlight (vertical & horizontal)</title>
  
  
  
      <link rel="stylesheet" href="style.css">

</head>


<?php

$id=$_GET['id'];

$url="http://localhost/crud_api/sistem_a/service_tampilid.php?id=".$id;

$json=@json_decode(file_get_contents($url));

?>



<body>
  <div class="container">
<center>
<form method="post" action="aksi_edit.php">

<tr>
	<table>	
	<thead>
  	<th><center>EDIT DATA</center></th>
	</table>
	</thead>
	</tr>	 
<table>	
    <tr>
	<thead>
    <td>NIM</td>
    <td><input type="text" name="nim" value =" <?php echo $json->nim ; ?>"></td> 
    </tr>
	<tr>
	<thead>
    <td>NAMA</td>
    <td><input type="text" name="nama" value=" <?php echo $json->nama ; ?>" ></td> 
    </tr>
	<tr>
	<thead>
    <td>ALAMAT</td>
    <td><input type="text" name="alamat"  value=" <?php echo $json->alamat ; ?>"></td> 
    </tr>
	<tr>
	<thead>
    <td>HP</td>
    <td><input type="text" name="hp" value=" <?php echo $json->hp ; ?>" ></td> 
    </tr>
    <td>
    <td><input type="submit" name="edit" value="EDIT"></td> 
    </tr>
</center>
</table>
</form>
</html>


