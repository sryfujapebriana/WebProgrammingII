<?php
session_start();

if (isset($_SESSION['username'])){
?>
<script>document.location.href="../pakar/index.html"</script>
<?php
}else{
?>
<html>
<title>Login</title>
<style type="text/css">
<!--
.judul {
	background-color: #666666;
}
body {
	background-color: #FF9999;
	background-image: url(../download%20(8).jpg);
}
-
.style1 {font-size: larger}
body,td,th {
	font-family: Times New Roman, Times, serif;
	color: #F0F0F0;
}
.style1 {font-weight: bold}
.style2 {
	font-size: larger;
	font-weight: bold;
}
.style3 {font-size: larger}
</style>
<body>
<div align="center">
  <p><br />
  </p>
  <p class="style2">ADMIN LOGIN </p>
  <form method="post" action="login.php">
    <div align="left"></div>
    <table width="786" height="478" border="0" align="center" bordercolor="#333333" background="bg3.jpg" bgcolor="#666666">
    <tr>
      <th width="57" rowspan="3" scope="row"><div align="left">
        <p>&nbsp;</p>
        <p><br>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div></th>
      <th height="35%" colspan="3" scope="row">&nbsp;</th>
      <td width="11" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th width="269" height="45" scope="row"> 
        <p align="right" class="style3"><strong> Username</strong></p>
        <p align="right" class="style3"><strong>Password</strong></p></th>
      <td width="48">&nbsp;</td>
      <td width="379"><p>
        <input type="text" name="username" />
      </p>
        <p>
          <input type="password" name="password" />
        </p></td>
      </tr>
    <tr>
      <th height="47" scope="row">
        <p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>        
        <p align="center">&nbsp;</p></th>
      <td><div align="left">
        <input type="submit" name="Submit2" value="Login" />
      </div></td>
      <td><div align="left">
        <input name="reset2" type="reset" value="Batal" />
</div></td>
      </tr>
    <tr>
      <th height="45" colspan="5" scope="row"><strong><span class="style1"><img src="cropped-header-nm-cream-kecantikan.jpg" alt="login" width="781" height="263" align="left" longdesc="index.php"></span></strong></th>
      </tr>
    <tr>
      <th height="27" colspan="5" scope="row">&nbsp;</th>
    </tr>
  </table>
  </form>
</div>
</body>
</html>
<?php
}
?>