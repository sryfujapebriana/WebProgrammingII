<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
        h2 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
		padding: 1em;
        }
		footer, h3 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
        }
		body{
background: url('sakura2.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tambah.php">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	<h3>Data Karyawan</h3>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
      <tr bgcolor="#FFB6C1">
        <th>No.</th>
        <th>NIP</th>
        <th>Nama Lengkap</th>
        <th>Gudang</th>
        <th>Bagian</th>
        <th>Opsi</th>
      </tr>
      <?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIP paling besar
		$query = mysql_query("SELECT * FROM datakaryawan ORDER BY karyawan_nip DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['karyawan_nip'].'</td>';	//menampilkan data nip dari database
					echo '<td>'.$data['karyawan_nama'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['karyawan_gudang'].'</td>';	//menampilkan data gudang dari database
					echo '<td>'.$data['karyawan_bagian'].'</td>';	//menampilkan data bagian dari database
					echo '<td><a href="edit.php?id='.$data['karyawan_id'].'">Edit</a> / <a href="hapus.php?id='.$data['karyawan_id'].'" onclick="return confirm(\'Apakah Anda Yakin Akan Menghapus Data Ini?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=karyawan_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
    </table>
	<footer>Sry Fuja Pebriana - 14.111.161</footer>
</body>
</html>