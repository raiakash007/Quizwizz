<?php
require_once 'db.php';
error_reporting(0);

    $uid = $_POST['user_id'];
    $qid = $_POST['qid'];
    $date = date("d-m-Y");
    
    //check if user already exist
    $tableName = "quiz_questions_played";

    //--------------------------------------------------------------------------
    // 1) Connect to mysql database
    //--------------------------------------------------------------------------
    $con = mysql_connect($host,$username,$password);
    $dbs = mysql_select_db($db_name, $con);

    //--------------------------------------------------------------------------
    // 2) Query database for data
    //--------------------------------------------------------------------------
    
        //register data
        $sql="insert into $tableName(user_id,question_id,doplay) values('".$uid."','".$qid."','".$date."')";
        $res=mysql_query($sql);
       
    

?>