
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Yellow Dahlia 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130504

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet" type="text/css" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#"><img src="images/image.jpg" width="200" height="110"></a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="player/player_login.php" target="_blank" accesskey="1" title="">Player login</a></li>
				<li></li>
				<li><a href="main_login.php" target="_blank" accesskey="3" title="">Admin login</a></li>
                                <li></li>
                                <li><a href="register.php" accesskey="3" title="">Signup</a></li>


				
			</ul>
		</div>
	</div>
</div>

<div id="wrapper">
	<div id="wide-content">
		<div>
			<h2>Register</h2>
                        <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
    <?php
require_once 'db.php';
error_reporting(0);
if(isset($_POST['Submit']))
{
    $uname = $_POST['myusername'];
    $passcode = md5($_POST['mypassword']);
    $phone = $_POST['myphone'];
    
    //check if user already exist
    $tableName = "members";

    //--------------------------------------------------------------------------
    // 1) Connect to mysql database
    //--------------------------------------------------------------------------
    $con = mysql_connect($host,$username,$password);
    $dbs = mysql_select_db($db_name, $con);

    //--------------------------------------------------------------------------
    // 2) Query database for data
    //--------------------------------------------------------------------------
    $result = mysql_query("SELECT * FROM $tableName where username='$uname' and member_type='member'");//query
    if (mysql_num_rows($result) != 0)
    {
      echo "<center><font color='red'>Username already exists</font></center>";
    }else
    {
        //register data
        $sql="insert into members(username,password,phone,member_type) values('".$uname."','".$passcode."','".$phone."','".'member'."')";
        $res=mysql_query($sql);
        If($res)
        {
            Echo "<br/><br/><font color='green'>Record successfully inserted</font>";
        }Else
        {
            Echo "There is some problem in inserting record";
        }
    }
    
    
}

?>
<form name="form1" method="post" action="register.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername" required></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword" required></td>
</tr>
<tr>
<td>Phone No.</td>
<td>:</td>
<td><input name="myphone" type="text" id="myphone" required onkeypress="return isNumberKey(event)" maxlength="10"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Register"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
			
		</div>
	</div>
</div>
<div id="page-wrapper">
<div id="page" class="container">
	<div id="content">
		<div>
			<ul class="style1">
				<li class="first">
					<h3>Lorem ipsum dolor interdum</h3>
					<p>Ut vel nisl tristique justo ornare iaculis. Suspendisse suscipit, orci ac interdum viverra, nulla orci facilisis mi, a ultrices mi lectus vitae felis. Morbi suscipit adipiscing orci et blandit. Morbi a nulla ut tellus blandit placerat a quis eros.</p>
					<p><a href="#" class="button-style">Read More</a></p>
				</li>
				<li>
					<h3>Magna phasellus etiam ultrices</h3>
					<p>Ut vel nisl tristique justo ornare iaculis. Suspendisse suscipit, orci ac interdum viverra, nulla orci facilisis mi, a ultrices mi lectus vitae felis. Morbi suscipit adipiscing orci et blandit. Morbi a nulla ut tellus blandit placerat a quis eros.</p>
					<p><a href="#" class="button-style">Read More</a></p>
				</li>
			</ul>
		</div>
	</div>
	<div id="sidebar">
		<h2>Fusce ultrices</h2>
		<ul class="style3">
			<li class="first">
				<p class="date">05-04-2013</p>
				<p><a href="#">Vestibulum laoreet lorem sed amet condimentum eget ultrices et mago porttitor nequese blandit.</a></p>
			</li>
			<li>
				<p class="date">04-23-2013</p>
				<p><a href="#">Vestibulum laoreet lorem sed amet condimentum eget ultrices et mago porttitor nequese blandit.</a></p>
			</li>
			<li>
				<p class="date">04-17-2013</p>
				<p><a href="#">Vestibulum laoreet lorem sed amet condimentum eget ultrices et mago porttitor nequese blandit.</a></p>
			</li>
		</ul>
	</div>
</div></div>
<div id="footer">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html>
