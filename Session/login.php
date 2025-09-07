<?php
session_start();
$aa=$_POST['a'];
$bb=$_POST['b'];
if($aa==""|| $bb==""){
    echo"Please fill all";
    echo"<a href='form.php'>Click here to go back</a>";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("internship");
$query="SELECT * FROM student WHERE name='$aa' AND email='$bb'";
 $result=mysql_query($query);
 $count =mysql_num_rows($result);
 if($count!=0){
    $_SESSION['name']=$aa;
    header("location:welcome.php");
 }
 else{
    echo"mismatch";
    echo"<a href='form.php'>Click here to go back</a>";
 }
}
?>