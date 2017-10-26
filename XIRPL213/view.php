<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran berhasil</title>
</head>
<body>
<p align="center"><font size="5px"><b>SIGN UP SUCCESS</b></font></p>
	<table align="center">
		<tr>
			<td>Mobile Number or Email</td><td>:</td><td><?php echo $_POST["email"]; ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td><td>:</td><td><?php echo $_POST["lengkap"]; ?></td>
		</tr>
		<tr>
			<td>Nama Pengguna</td><td>:</td><td><?php echo $_POST["pengguna"]; ?></td>
		</tr>

		</table>
</body>
</html>