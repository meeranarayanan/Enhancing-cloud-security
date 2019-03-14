<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="478" border="1">
    <tr>
      <td width="30">Sno</td>
      <td width="112">Name</td> 
      <td width="48">Email</td>
      <td width="43">date</td>
      <td width="79">complaint</td>
      <td width="79">&nbsp;</td>
      </tr>
    <?php
 include("connection.php");
 session_start();
 $i=1;
	 $a=mysql_query("select complaint.*,employe.Name,employe.Email from complaint,employe where complaint.Logid=employe.Logid and Replay='pending'");
	 
		
	   while($res1=mysql_fetch_array($a))
		 {
		  
		  ?>
          <tr>
      
      <td><?php echo $i++ ?></td>  
      <td><?php echo $res1[6] ?></td>
      <td><?php echo $res1[7]?></td>
      <td><?php echo $res1[3]?></td>
      <td><?php echo $res1[2] ?></td>
      <td><p><a href="Replay1.php?id=<?php echo $res1[1]?>">Replay</a></p>
      </td>
  
  </tr>
	 <?php
	  }
	   ?>
       </tr>                   
	  </table>  
   </form>
</body>
</html>
