
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="284" border="1">
    <tr>
      <td width="168" height="55"><label for="textfield"></label>
      <input type="text" name="id" id="textfield" /></td>
      <td width="100"><div align="right">
        <input type="submit" name="button" id="button" value="Submit">
      &nbsp;</div></td>
    </tr>
    
  </table>
  <p>&nbsp;</p>
  <table width="545" height="114" border="1">
    <tr>
      <td width="73">Name</td>
      <td width="47">Age</td>
      <td width="78">Place</td>
      <td width="109">Email</td>
      <td></td>
     
    </tr>
     <?php
	if(isset($_POST['button']))
	{
		  include("connection.php");
		  $id=$_POST['id'];
		 
		 
	  $i=0;
	  $res=mysql_query("select * from employe where name like '$id%' ");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
  
    <tr>
      
      <td height="58"><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[5]?></td>
      <td><?php echo $res1[9]?></td>
       <td width="172" ><a href="viewfulldetails.php?emp_id=<?php echo $res1[1] ?>">viewfulldetails</a></td>
      
    </tr>
	 <?php 
	  }
	}
	  ?>  
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>


