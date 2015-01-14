<?php
session_start();
if(!$_SESSION['myusername']){
header("location:player_login.php");
}

//--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  require_once 'db.php';
  $tableName = "questions";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $con = mysql_connect($host,$username,$password);
  $dbs = mysql_select_db($db_name, $con);
  $id = $_POST["id"];

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysql_query("SELECT * FROM $tableName where q_id=$id");          //query
  $array = mysql_fetch_row($result);                          //fetch result 

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  
  
  echo json_encode($array);
