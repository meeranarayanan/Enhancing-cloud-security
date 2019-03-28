<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="425" border="0">
    <tr>
      <td width="110">Username</td>
      <td width="305"><label for="textfield"></label>
      <input type="text" name="Username" id="textfield" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield2"></label>
      <input type="password" name="Password" id="textfield2" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">

        <div align="center">
          <p>
            <input type="submit" name="oo" id="button" value="Login" />
          </p>
          
      </div></td>


    </tr>
  </table>
  
</form>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['oo'])){
 $username=$_POST['Username'];
 $password=$_POST['Password'];
 $a=mysql_query("select * from login where Username='$username' and Password='$password'");
 if($b=mysql_fetch_array($a))
 {
	 $lid=$b['Logid']; 
	 $type=$b['Usertype'];
	 session_start();
	 $_SESSION["lid"]=$lid;
	  $_SESSION["type"]= $type;
	  if($type=='admin')
	  {
		  header("location:adminhome.php");
	  }
	  else if($type=='user')
	  {
		  header("location:userhome.php");
	  }
	  else
	  {
		  ?>
          <script>alert("invalid user")</script>
	 
 <?php
	  }
	  }
}
?>


<body>
</body>
</html>