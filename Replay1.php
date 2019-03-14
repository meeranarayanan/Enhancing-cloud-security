<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="778" border="1">
    <tr>
      <td width="242" height="72">Replay</td>
      <td width="199"><input type="text" name="Replay" id="textfield" /></td>
      <td width="315"><div align="center">
        <input type="submit" name="button" id="button" value="Ok" />
      </div></td>

    </tr>
   <?php
   if(isset($_POST['button']))
   {
  include("connection.php");
$id=$_GET['id'];
$replay=$_POST['Replay'];
$i=mysql_query("update complaint set Replay='$replay' where Logid='$id'");
   }
 ?>
 
  </table>
</form>
</body>
</html>