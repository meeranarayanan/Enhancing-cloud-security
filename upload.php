<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="312" border="1">
    <tr>
      <td width="102">Chosefile</td>
      <td width="194"><p>
        <label for="textfield"></label>
      </p>
      <p>
        <label for="fileField"></label>
        <input type="file" name="fileField" id="fileField" />
      </p></td>
    </tr>
    <tr>
      <td>Mode of upload</td>
      <td><input type="radio" name="radio" id="radio" value="public" />
      <label for="radio">Public<br />
        <input type="radio" name="radio" id="radio" value="private" />
      Private      <br />
      <input type="radio" name="radio" id="radio" value="protect" />
      Protect      </label></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Upload" /></td>
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
	$lid=$_SESSION['lid'];
	$mode=$_POST['radio'];
	$my_file=$_FILES['fileField']['name'];
	move_uploaded_file($_FILES['fileField']['tmp_name'],"files/".$my_file);
	mysql_query("insert into upload(Filename,Filesize,Mode,Date,lid)values('$my_file','0','$mode',curdate(),'$lid')");
	
}
?>


