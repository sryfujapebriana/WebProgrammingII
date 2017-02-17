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
	<h2>Edit Data</h2>
	
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tambah.php">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	
	<h3>Edit Data Karyawan</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan karyawan_id yg didapatkan dari GET id -> edit.php?id=karyawan_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=karyawan_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table datakaryawan dengan kondisi WHERE karyawan_id = '$id'
	$show = mysql_query("SELECT * FROM datakaryawan WHERE karyawan_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip" value="<?php echo $data['karyawan_nip']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['karyawan_nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Gudang</td>
				<td>:</td>
				<td>
					<select name="gudang" required>
						<option value="">Pilih Gudang</option>
						<option value="I" <?php if($data['karyawan_gudang'] == 'I'){ echo 'selected'; } ?>>I</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="II" <?php if($data['karyawan_gudang'] == 'II'){ echo 'selected'; } ?>>II</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="III" <?php if($data['karyawan_gudang'] == 'III'){ echo 'selected'; } ?>>III</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<select name="bagian" required>
						<option value="">Pilih Bagian</option>
						<option value="Finishing" <?php if($data['karyawan_bagian'] == 'Finishing'){ echo 'selected'; } ?>>Finishing</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Operator" <?php if($data['karyawan_bagian'] == 'Operator'){ echo 'selected'; } ?>>Operator</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Mekanik" <?php if($data['karyawan_bagian'] == 'Mekanik'){ echo 'selected'; } ?>>Mekanik</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Admin" <?php if($data['karyawan_bagian'] == 'Admin'){ echo 'selected'; } ?>>Admin</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Security" <?php if($data['karyawan_bagian'] == 'Security'){ echo 'selected'; } ?>>Security</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<footer>Sry Fuja Pebriana - 14.111.161</footer>
</body>
</html>