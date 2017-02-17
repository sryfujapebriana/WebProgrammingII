<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
h2, footer{
				padding: 1em;
				color:#FFFFFF;
				background-color:#FFB6C1;
				clear:left;
				text-align :center;
			}
			h3 {
				color:#FFFFFF;
				background-color:#FFB6C1;
				clear:left;
				text-align :center;
			}
			body{
background: url('sakura2.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>INPUT DATA</h2>
	
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tambah.php">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	
	<h3>Tambah Data Karyawan</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Gudang</td>
				<td>:</td>
				<td>
					<select name="gudang" required>
						<option value="">Pilih Gudang</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<select name="bagian" required>
						<option value="">Pilih Bagian</option>
						<option value="Finishing">Finishing</option>
						<option value="Operator">Operator</option>
						<option value="Mekanik">Mekanik</option>
						<option value="Admin">Admin</option>
						<option value="Security">Security</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<footer>Sry Fuja Pebriana - 14.111.161</footer>
</body>
</html>