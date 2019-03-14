<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="564" border="1">
    <tr>
      <td width="174">Name</td>
      <td width="86">Date</td>
      <td width="233">Feedback</td>
    </tr>
    <?php
 include("connection.php");
 session_start();
 $i=1;
 $a=mysql_query("select feedback.*,employe.Name from employe,feedback where feedback.uid=employe.Logid");
 while($res1=mysql_fetch_array($a))
		 {
		
		?>
             
        <tr>
       <td><?php echo $res1[4]?></td>
      <td><?php echo $res1[3]?></td>
      <td><?php echo $res1[2]?></td>
      
    </tr>
     <?php
		 }
		 ?>
    
  </table>
</form>
</body>
</html>