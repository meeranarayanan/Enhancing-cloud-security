<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Complaint</td>
      <td><label for="textfield"></label>
      <input type="text" name="Complaint" id="textfield" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="Send" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['button']))
	
{
	include("connection.php");
	session_start();
	$lid= $_SESSION["lid"];
	$complaint=$_POST['Complaint'];
 mysql_query("insert into complaint values(null,'$lid','$complaint',curdate(),'pending','')");
}
?>
