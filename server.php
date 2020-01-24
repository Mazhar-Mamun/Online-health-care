
<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="medicare";
 
$conn=mysql_connect($host,$user,$password,$db);
if (!conn) {
    die('Connection Failed'.mysql_connect_error());
}
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user_details where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>