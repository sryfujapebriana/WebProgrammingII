<?php
session_start();

//sambungkan ke database
$koneksi=mysql_connect("localhost","root",""); 

//memilih database yang akan dipakai
mysql_select_db("karyawan",$koneksi); 

//mengambil data dari form login
$username=$_POST['username'];
$password=md5($_POST['password']);

//query untuk mengambil data yang sesuai
$query="select * from login where username='$username' and password='$password'";
$hasil=mysql_query("$query");

$kode = mysql_fetch_array($hasil);

$cek=mysql_num_rows($hasil);

if ($cek==1){
$_SESSION['username']=$kode['ID'];
?>
<script language=javascript>document.location.href="../karyawan/";</script> 
<?php
}else{
?>
<script>alert("Login gagal!");document.location.href="../login/"</script> 
<?php

}
?>