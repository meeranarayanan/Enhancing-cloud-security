<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from upload where upload_id='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="Viewdeletemyfile.php";
	</script>
    <?php
}
?>