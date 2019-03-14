<?php
include("connection.php");
$lid=$_GET['lid'];
$i=mysql_query("update request set status='reject' where Rid='$lid'");
 ?>
<script>
alert("update successfully");
window.location="viewandaccept.php";
</script>
