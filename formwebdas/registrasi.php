<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
<table bgcolor="#FA8072" align="CENTER">
	<h3 align="center"> APLIKASI PENDAFTARAN MAHASISWA </h3>
	<form action="prosesregistrasi.php" method="POST">
<tr>
	<td>
		<label> Nama </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Nama" maxlength="25" size="15" pattern="[A-Za-z ]{1,25}" title="caracter max 25" required><br>
</td>
</tr>
<tr>
	<td>
		<label> NIM </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="NIM" minlength="10" size="15" pattern="[0-9]{10}" title="caracter min 10" required><br>
</td>
</tr>
<tr>
	<td>
		<label> Email </label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Email" name="email" placeholder="putty@gmail.com" size="15"><br>
		<br>
</td>
</tr>
<tr>
	<td align="center">
		<input type="submit" value="Submit">
	</td>
</tr>
</form>
</body>
</html>