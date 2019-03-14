<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

<table width="516" border="1">
  <tr>
  <td width="46">Sl.No</td>
    <td width="46">Name</td>
    <td width="32">Age</td>
    <td width="58">Gender</td>
    <td width="44">Place</td>
    <td width="60">District</td>
    <td width="39">State</td>
    <td width="58">Mobile</td>
    <td width="47">Email</td>
    <td></td>
     
       </tr>
       
  <?php
 include("connection.php");
session_start();

$i=0;
 $a=mysql_query("select employe.* from employe,login where employe.Logid=login.Logid and login.Usertype='pending' ");
 while($res1=mysql_fetch_array($a))
 {
	 $i++;
	?>

  <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4]?></td>
      <td><?php echo $res1[5]?></td>
      <td><?php echo $res1[6]?></td>
  <td><?php echo $res1[7]?></td>
  <td><?php echo $res1[8]?></td>
 <td><?php echo $res1[9]?></td>
 <td><p><a href="Block.php?id=<?php echo $res1[1]?>">Block</a></p>
 <p><a href="accept.php?id=<?php  echo $res1[1]?>">Accept</a></p></td>
  
  </tr>
	 <?php } ?>
</table>
</form>
</body>
</html>