<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: PhotoBusiness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoBusiness</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
  </div>
</div>
<div class="wrapper col2">
  <div id="header">
  
    <div id="logo">
      <h1><a href="index.html">PhotoBusiness</a></h1>
      <p>Free Website Template</p>
    </div>
     <?php
  session_start();
  $type=$_SESSION['type'];
  if($type=='admin')
  {
  ?>
    <ul id="topnav">
   <li><a href="acceptandblock.php">Accept Or Reject Usert</a></li>
      <li><a href="">view</a>
      <ul>
          <li><a href="Viewuploadfile.php">view upload file</a>
          <li><a href="viewcomplaint.php">View complaint</a></li>
         <li><a href="Viewfeedback.php">View feedback</a></li>
          
        </ul>
      </li>
     
      
      <li class="active"><a href="adminhome.php">Home</a></li>
    </ul>
    <?php }else if($type=='user') { ?>
     <ul id="topnav">
   
      <li class="last"><a href="#">Link Text</a></li>
      <li><a href="#">View</a>
        <ul>
          <li><a href="viewandaccept.php">view request</a></li>
          <li><a href="viewfrnd.php">View friends</a></li>
          <li><a href="Viewdeletemyfile.php">view and delete</a></li>
          <li><a href="Viewanddownload.php">View  and download</a></li>
          <li><a href="viewreplay.php">View replay</a></li>
          <li><a href="viewreplay.php">View replay</a></li>
        </ul>
      </li>
      <li><a href="searchuser.php">Search user</a></li>
      <li><a href="upload.php">File upload</a></li>
      <li><a href="postcomplaint.php">Post complaint</a></li>
      <li><a href="Postfeedback.php">Post feedback</a></li>
      <li class="active"><a href="index.html">Home</a></li>
    </ul>
    <?php } ?>
    <br class="clear"/>
  </div>
</div>
<div class="wrapper col3">
  <div id="gallery">
    <ul>
      <li class="placeholder" style="background-image:url('layout/images/gallery-placeholder.gif');">Image Holder</li>
      <li><a class="swap" href="#"><img src="images/gallery/aa.jpg" alt="" /><span><img src="images/gallery/aa.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/2_s.gif" alt="" /><span><img src="images/gallery/2.gif" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/3_s.gif" alt="" /><span><img src="images/gallery/3.gif" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/4_s.gif" alt="" /><span><img src="images/gallery/4.gif" width="950" height="370" alt="" /></span></a></li>
      <li class="last"><a class="swap" href="#"><img src="images/gallery/5_s.gif" alt="" /><span><img src="images/gallery/5.gif" width="950" height="370" alt="" /></span></a></li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="services">
    <ul>
      <li><a href="#"><strong>Weddings</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li><a href="#"><strong>Corporate</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li><a href="#"><strong>Lifestyle</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li class="last"><a href="#"><strong>Events</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li><a href="#"><strong>Artistic</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li><a href="#"><strong>Infants</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li><a href="#"><strong>Architecture</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
      <li class="last"><a href="#"><strong>Black &amp; White</strong><img src="images/demo/234x210.gif" alt="" /></a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="container">