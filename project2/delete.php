<?php
$a=$_POST['a'];
$b=$_POST['b'];
if($a==""|| $b==""){
    echo"Please fill all";
    echo"<a href='del.php'>Click here to go back</a>";
}
else{
    mysql_connect("localhost" , "root" , "");
mysql_select_db("symmercamp");

$query="SELECT * FROM netcamp WHERE email='$b' AND name='$a'";
 $result=mysql_query($query);
 $count=mysql_num_rows($result);
 if($count==0)
{
    echo"Enrty is not present";
    echo"<a href='del.php'>click to go back</a>";
}
else{
    $query1="DELETE FROM netcamp WHERE name='$a' AND email='$b'";
    mysql_query($query1);
    echo"data deleted";
    echo"<a href='del.php'>click to go back</a>";
}


}
?>