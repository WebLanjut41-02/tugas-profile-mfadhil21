<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Foto-Foto -><a href="<?php echo base_url()?>c_tugas/foto">Klik Disini</a><br>
	Pengalaman -><a href="<?php echo base_url()?>c_tugas/folio">Klik Disini</a>
	<form action="<?php echo base_url()?>c_tugas/input" method="post">
		<table>
			<tr>
				<td>Nama : </td><td><input type="text" name="nama"></td>
			</tr>		
			<tr>
				<td>Alamat :</td><td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>komen : </td><td><textarea name="desk" rows="5" cols="20"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>

