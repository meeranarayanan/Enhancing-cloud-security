<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="503" border="1">
    <tr>
    <td width="30">Sno</td>
      <td width="60">Name</td>
      <td width="37">Age</td>
      <td width="58">Gender</td>
      <td width="44">Place</td>
      <td width="70">Mobile</td>
      <td width="102">Email</td>
        </tr>
     <?php
 include("connection.php");
 session_start();
 $lid= $_SESSION["lid"];
 $i=1;
	 $a=mysql_query("select request.*,employe.Name,employe.Age,employe.Gender,employe.Place,employe.Mobile,employe.Email from request,employe where request.senderid=employe.Logid and request.receiverid='$lid' and status='pending'");
	 while($res1=mysql_fetch_array($a))
		 {
		  
		  ?>
        <tr> 
       <td><?php echo $i++ ?></td>
      <td><?php echo $res1[4] ?></td>
      <td><?php echo $res1[5]?></td>
      <td><?php echo $res1[6]?></td>
      <td><?php echo $res1[7] ?></td>
      <td><?php echo $res1[8]?></td>
      <td><?php echo $res1[9] ?></td>
      <td><p><a href="accept request.php?id=<?php echo $res1[0]?>">Accept</a></p>
      <td><p><a href="reject request.php?id=<?php echo $res1[0]?>">Reject</a></p>
       </td>
       </tr> 
	   <?php
		 }
		 ?>

  </table>
</form>
</body>
</html>
