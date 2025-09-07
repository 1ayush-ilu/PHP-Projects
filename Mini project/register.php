<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
$dd=$_POST['d'];

if($aa==""|| $bb==""||$cc==""||$dd==""){
    echo"Please fill all";
    echo"<a href='form.php'>Click here to go back</a>";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("net");
$query="SELECT * FROM student WHERE name='$aa' AND password='$cc'";
 $result=mysql_query($query);
 $count =mysql_num_rows($result);
 if($count==0){
    $query1="INSERT INTO student VALUES('$aa','$bb','$cc','$dd',0)";
    mysql_query($query1);
    echo"database updated";
 }
 else{
    echo" entry already exists";<br>
    $result1=mysql_query("SELECT confirmation FROM student WHERE name='$aa' AND password='$cc'");
    $row1=mysql_fetch_array($result1);
    if($row1[0]==1){
        echo"confirmed!!!!!";
    }
    else{
        echo" You are not confirmed!!!!!!";
    }
    echo"<a href='form.php'>Click here to go back</a>";
 }
}
?>
