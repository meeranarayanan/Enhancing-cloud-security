<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="471" border="1">
    <tr>
      <td width="62">Sno</td>
      <td width="134">Filename</td>
      <td width="87">Date</td>
      <td width="160"></td>
     </tr>
     <tr> <?php
 include("connection.php");
 session_start();
 $lid=$_SESSION['lid'];
 $i=1;
	 $a=mysql_query("select * from upload where lid='$lid'");
	 
		
	   while($res1=mysql_fetch_array($a))
		 {
		  
		  ?>
          <tr>
      
      <td><?php echo $i++ ?></td>  
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[4]?></td>
      <td><p><a href="Downloadmyfile.php?filename=<?php echo $res1[1]?>">Download</a></p>
      <p><a href="Delete.php?id=<?php echo $res1[0]?>">Delete</a></p>
     </td
     ></tr>
	 <?php
	  }
	   ?>
   
       </td>
     </tr>
    </table>
   </form>
   </body>
  </html>
