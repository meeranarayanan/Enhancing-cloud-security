<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("update login set Usertype='block' where Logid='$id'");
 ?>
<script>
alert("update successfully");
window.location="acceptandblock.php";
</script>


