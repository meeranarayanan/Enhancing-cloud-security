
<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("update request  set Status='accept' where Rid='$id'");
 ?>
<script>
alert("update successfully");
window.location="viewandaccept.php";
</script>


