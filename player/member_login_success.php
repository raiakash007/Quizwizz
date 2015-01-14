<?php
session_start();
if(!$_SESSION['myusername']){
header("location:player_login.php");
}

echo "Hello"." ".$_SESSION['myusername'];
?>
<?php
require_once 'db.php';
$tbl_name="questions"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

//$tbl_name2="quiz_questions_played"; // Table name
//
//// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect");
//mysql_select_db("$db_name")or die("cannot select DB");
//
//$id = $_SESSION['id'];
//$date = date("d-m-Y");
//
//$sql2="SELECT * FROM $tbl_name2 where user_id=$id and doplay='$date'";
//$result2=mysql_query($sql2);

 

?>
<html>
<style>
div.scroll {
    background-color: #00FFFF;
    height: 297px;
    overflow: scroll;
    width: 191px;
    width:250px;
    float:left;
    
}
#question_detail{
    
    background-color:Yellow;
    min-width:50%;
    max-width:500px;
    float:right;
    margin-right: 405px;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
-->
<body>
Login Successful - 
<a href="player_logout.php">Logout</a><br/>
NOTE:- Please note next time you login you have to play the quiz again, currently in this version the functionality is not included, please wait for next version to come. :)
<p>Questions List</p>
<div class="scroll">
    
    <table border="1">
    
        <tr>
            <td>Question No.</td>
            <td>Status</td>
        </tr>
        
        <?php 
        
        $i=1;  
        while($row = mysql_fetch_assoc($result)) 
        { 
         
             
  
        ?>
        <tr id="col<?php echo $row['q_id']; ?>">
            <td onclick="getid(<?php echo $row['q_id']; ?>);" id="q<?php echo $row['q_id']; ?>" ><?php echo $i; ?></td>
            <td id="s<?php echo $row['q_id']; ?>">Not Played</td>
        </tr>
        <?php
        
        
        $i++; 
        
        }
        ?>
        
    </table>

</div>

<div id="question_detail">
                  <form id="form">

    <p id="question"></p>
    <!--Radio button 1-->
                  <input name="group1" value="0" type="radio" style="display:none;" id="group0" />
          
                  <span id="ans0"></span>&nbsp;<p id="p0" style="margin-left: 169px;margin-top: -24px;"></p>
          
                  <br />
                  
                  <!--Radio button 2-->
                  <input name="group1" value="1" type="radio" style="display:none;" id="group1" />
          
                  <span id="ans1"></span>&nbsp;<p id="p1" style="margin-left: 169px;margin-top: -24px;"></p>
          
                  <br />
                  
                  <!--Radio button 3-->
                  <input name="group1" value="2" type="radio" style="display:none;" id="group2" />
          
                  <span id="ans2"></span>&nbsp;<p id="p2" style="margin-left: 169px;margin-top: -24px;"></p>
          
                  <br />
                            
                  <!--Radio button 4-->
                  <input name="group1" value="3" type="radio" style="display:none;" id="group3" />
          
                  <span id="ans3"></span>&nbsp;<p id="p3" style="margin-left: 169px;margin-top: -24px;"></p>
          
                  <br />
                  
                  <input type="hidden" id="cor_answer" value=""/>
                  
                  <input type="hidden" id="userid" value="<?php echo $_SESSION['id']; ?>"/>
                  
                  <input type="hidden" id="qid" value=""/>
                  
                  
                  
                  </form>
    
</div>

</body>
</html>