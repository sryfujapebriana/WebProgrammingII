<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$nip		= $_POST['nip'];	//membuat variabel $nip dan datanya dari inputan NIP
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$gudang		= $_POST['gudang'];	//membuat variabel $gudang dan datanya dari inputan dropdown Gudang
	$bagian 	= $_POST['bagian'];	//membuat variabel $bagian dan datanya dari inputan dropdown Bagian
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE karyawan_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE datakaryawan SET karyawan_nip='$nip', karyawan_nama='$nama', karyawan_gudang='$gudang', karyawan_bagian='$bagian' WHERE karyawan_id='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>