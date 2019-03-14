<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="708" border="1">
    <tr>
      <td width="67">Name</td>
      <td width="37">Age</td>
      <td width="59">Gender</td>
      <td width="44">Place</td>
      <td width="68">District</td>
      <td width="62">State</td>
      <td width="58">Mobile</td>
      <td width="72">Email</td>
      <td width="72">&nbsp;</td>
    </tr>
    

	  <?php
	
 include("connection.php");
	 $id=$_GET["emp_id"];
		$res=mysql_query("select * from employe where Logid='$id'");
	  while($res1=mysql_fetch_array($res))
		 {
		  
		  ?>
      
      <tr>
        <td height="73"><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4]?></td>
      <td><?php echo $res1[5]?></td>
      <td><?php echo $res1[6] ?></td>
      <td><?php echo $res1[7] ?></td>
      <td><?php echo $res1[8]?></td>
      <td><?php echo $res1[9]?></td>
      <td><input type="submit" name="button" id="button" value="Send" /></td>
    </tr>
	 <?php 
	  }
	
	  ?>  
  
	 
   </table>
</form>
</body>
</html><?php
if(isset($_POST['button']))
	
{
session_start();
$lid=$_SESSION['lid'];
 mysql_query("insert into request values(null,'$lid','$id','pending')");
}
?>
