<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="input.php" method="Post">

			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number"  maxlength="10" name="nim"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="25" name="nama"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>

			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="textarea" name="komen"></td>
			</tr>


			<tr>
				<td><input type="submit" name="login" value="login"></td>
			</tr>

		</form>
	</table>
</body>
</html>
