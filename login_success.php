<?php
session_start();
if(!$_SESSION['myusername']){
header("location:main_login.php");
}
?>
<html>
<body>
Login Successful - 
<a href="Logout.php">Logout</a>
<?php
require_once 'db.php';
$con=mysql_connect($host,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}
mysql_select_db($db_name,$con);

If(isset($_REQUEST['submit'])!='')
{
$question = $_POST['question'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$cor_option = $_POST['cor_option'];

$sql="insert into questions(question,option1,option2,option3,option4,cor_answer) values('".$question."','".$opt1."','".$opt2."','".$opt3."','".$opt4."','".$cor_option."')";
$res=mysql_query($sql);
If($res)
{
Echo "<br/><br/><font color='green'>Record successfully inserted</font>";
}
Else
{
Echo "There is some problem in inserting record";
}
}
?>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!-- Login and Signup forms -->
<div id="tabs">
                  
    <div id="tabs-2">
    
        <form action="login_success.php" method="post">
        
            <p>Question:<br/><br/><textarea name="question" required></textarea></p>
    
            Option 1:&nbsp;<input type="text" name="opt1" required /><br/><br/>
            Option 2:&nbsp;<input type="text" name="opt2" required /><br/><br/>
            Option 3:&nbsp;<input type="text" name="opt3" required /><br/><br/>
            Option 4:&nbsp;<input type="text" name="opt4" required /><br/><br/>
    
            Correct Answer:&nbsp;<br/><br/>
            <select name="cor_option">
                <option value="0">Option 1</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
                <option value="3">Option 4</option>
                
            </select>
    
            <p><input type="submit" value="Insert" name="submit" /></p>
  </form>
  </div>
</div>
</body>
</html>