<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="497" border="1">
    <tr>
      <td width="117">Username</td>
      <td width="104"><p>Emai</p></td>
      <td width="119">Filename</td>
      </tr>
    <tr>
       <?php
 include("connection.php");
 session_start();
 $lid=$_SESSION['lid'];
 $i=1;
	 $a=mysql_query("select upload.*,employe.* from employe,upload where upload.lid!='$lid' and (upload.lid=(select employe.Logid from employe,request where employe.Logid=request.Senderid and request.Receiverid='$lid' or employe.Logid=request.Receiverid and request.Senderid='$lid' and request.Status='friends')or upload.Mode='public' )and upload.lid=employe.Logid");
	 
		
	   while($res1=mysql_fetch_array($a))
		 {
		  
		  ?>
          <tr>  
      <td><?php echo $res1[8] ?></td>
      <td><?php echo $res1[15]?></td>
      <td><?php echo $res1[1]?></td>
      <td><p><a href="Download.php?filename=<?php echo $res1[1]?>">Download</a></p>
      </td>
  
  </tr>
	 <?php
	  }
	   ?>
   
  </table>
</form>
</body>
</html>