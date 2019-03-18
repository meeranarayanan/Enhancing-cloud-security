<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("update login set Usertype='user' where Logid='$id'");
 ?>
<script>
ssss
alert("update successfully");
window.location="acceptandblock.php";
</script>


