<?php include("Header.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="527" border="1">
    <tr>
      <td width="30">Sno</td>
      <td width="89">Username</td>
      <td width="55">Email</td>
      <td width="43">Date</td>
      <td width="88">Filename</td>
      
     </tr>
    <?php
 include("connection.php");
 //session_start();
 $i=1;
	 $a=mysql_query("select upload.*,employe.Name,employe.Email from upload,employe where upload.lid=employe.Logid");
	 
		
	   while($res1=mysql_fetch_array($a))
		 {
		  
		  ?>
          <tr>
      
      <td><?php echo $i++ ?></td>  
      <td><?php echo $res1[6] ?></td>
      <td><?php echo $res1[7]?></td>
      <td><?php echo $res1[4]?></td>
      <td><?php echo $res1[1] ?></td>
       
      
  </tr>
	 <?php
	  }
	   ?>
   
    </tr>
  </table>
</form>
</body>
</html>
<?php include("Footer.php") ?>