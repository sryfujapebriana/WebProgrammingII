<?php
session_start();

if (isset($_SESSION['username'])){
?>
<script>document.location.href="../karyawan/"</script>
<?php
}else{
?>
<html>
<title>Login CRUD</title>
<style type="text/css">
<!--
.judul {
	background-color: #800080;
}
.style1 {
	background-color:#FFB6C1;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
	color:#FF1493;
}
-->
</style>


<style type="text/css">
body{
background: url('sakura1.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
</style>
<div align="center">
  <p>&nbsp;</p>
  <h1 class="style1">LOGIN</h1>
  <br /><br />
  <form method="post" action="login.php">
    <table width="500" height="198" border="0" align="center" background="pink1.jpg">
    <tr>
      <th width="24" rowspan="3" scope="row">&nbsp;</th>
      <th height="35%" colspan="3" scope="row">&nbsp;</th>
      <td width="22" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th width="85" height="45" scope="row"> <div align="left" class="style1"><em>Username</em></div></th>
      <td width="15">:</td>
      <td width="161">
        <input type="text" name="username" />      </td>
      </tr>
    <tr>
      <th height="30" scope="row"><div align="left" class="style1"><em>Password</em></div></th>
      <td>:</td>
      <td><input type="password" name="password" /></td>
      </tr>
    <tr>
      <th height="45" colspan="5" scope="row">
         <input type="submit" name="Submit" value="Login" />  
        <input name="reset" type="reset" value="Batal" /></th>
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