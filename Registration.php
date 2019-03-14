<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
function valid()
{
	var flag=true;
	
if(document.getElementById("Name").value=="")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
		
		if(document.getElementById("Age").value=="")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
		
		if(document.getElementById("Place").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
		
		if(document.getElementById("District").value=="")
	{
            flag=false;
            document.getElementById("d").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }

   
    if(document.getElementById("State").value=="")
	{
            flag=false;
            document.getElementById("e").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("e").style.visibility="hidden";
        }
		if((document.getElementById("Mobile").value).length!=10)
	
	{
	    flag=false;
            document.getElementById("f").style.visibility="visible";
	}
        else
        {
            document.getElementById("f").style.visibility="hidden";
        }
		
		if(document.getElementById("Email").value=="")
	{
            flag=false;
            document.getElementById("g").style.visibility="visible";
 	}
        var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("Email").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		flag=false;
            document.getElementById("g").style.visibility="visible";
	}
        else
        {
            document.getElementById("g").style.visibility="hidden";
        }
		
		if(document.getElementById("Username").value=="")
	{
            flag=false;
            document.getElementById("h").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("h").style.visibility="hidden";
        }
		
		
		 if(document.getElementById("Password").value=="")
	{
		flag=false;
		document.getElementById("i").style.visibility="visible";
 	}
        
	if(document.getElementById("Password").value.length<6)
	{
		document.getElementById("i").style.visibility="visible";
	}
         else
        {
            document.getElementById("i").style.visibility="hidden";
        }




return flag;
}
</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="textfield"></label>
      <input type="text" name="Name" id="Name" /></td>
 <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>    </tr>
    <tr>
      <td>Age</td>
      <td><label for="age"></label>
      <input type="text" name="Age" id="Age" /></td>
      <td><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry</font></div></td>    </tr>
    
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="Gender" id="male" value="male" />
      <label for="male">male<br />
        <input type="radio" name="Gender" id="female" value="female" />
      female      </label></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="textfield2"></label>
      <input type="text" name="Place" id="Place" /></td>
       <td><div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry</font></div></td>   
    </tr>
    <tr>
      <td>District</td>
      <td><label for="textfield3"></label>
      <input type="text" name="District" id="District" /></td>
      <td><div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>State</td>
      <td><label for="textfield4"></label>
      <input type="text" name="State" id="State" /></td>
      <td><div style="visibility:hidden" id="e"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label for="textfield5"></label>
      <input type="text" name="Mobile" id="Mobile" /></td>
      <td><div style="visibility:hidden" id="f"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield6"></label>
      <input type="text" name="Email" id="Email" /></td>
      <td><div style="visibility:hidden" id="g"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><label for="textfield7"></label>
      <input type="text" name="Username" id="Username" /></td>
      <td><div style="visibility:hidden" id="h"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield8"></label>
      <input type="password" name="Password" id="Password" /></td>
       <td><div style="visibility:hidden" id="i"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><label for="textfield7"></label>
        <div align="center">
          <input type="submit" name="oo" id="sub" value="Register"  onclick="return valid()"/>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['oo'])){
	
	
$name=$_POST['Name'];
 $age=$_POST['Age'];
 $gender=$_POST['Gender'];
 $place=$_POST['Place'];
 $district=$_POST['District'];
 $state=$_POST['State'];
 $mobile=$_POST['Mobile'];
 $email=$_POST['Email'];
 $username=$_POST['Username'];
 $password=$_POST['Password'];
 mysql_query("insert into login values(null,'$username',' $password','pending')");
 $lid=mysql_insert_id();
 mysql_query("insert into employe values(null,'$lid','$name','$age','$gender','$place','$district','$state','$mobile','$email')");
}
?>