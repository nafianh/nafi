<!DOCTYPE html>
<html>
<head>
<title>INPUT BIODATA</title>
</head>
<body>
<h1> Input data</h1>
<a href="home.php">lihat semua data</a>
<br>
<h3>Input data baru</h3>
<form action="insertaksi.php" method="post">
<table>
<tr>
	<td>Nama</td>
	<td><input type="text" name="nama"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type="text" name="alamat"></td>
</tr>
<tr>
	<td>Usia</td>
	<td><input type="text" name="usia" ></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>