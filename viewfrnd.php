<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <table width="200" border="1">
    <tr>
    <td width="30">Sno</td>
    <td>Name</td>
      <td>Place</td>
      <td>Email</td>
      <td>Gender</td>
      </tr>
    <tr>
      
    <?php
 include("connection.php");
 session_start();
 $lid=$_SESSION['lid'];
 $i=1;
	 $a=mysql_query("select * from employe,request where ((request.Senderid='$lid' and Receiverid=employe.Logid) or (request.Receiverid='$lid' and request.Senderid=employe.Logid) ) and request.Status='accept' ");
	while($res1=mysql_fetch_array($a))
		 {
		   ?>
          <tr>
          <td><?php echo $i++ ?></td>
        <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[5]?></td> 
      <td><?php echo $res1[9]?></td>
      <td><?php echo $res1[4]?></td>
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