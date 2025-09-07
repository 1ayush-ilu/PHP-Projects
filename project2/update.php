<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

if($a==""|| $b==""||$c==""){
    echo"Please fill all";
    echo"<a href='up.php'>Click here to go back</a>";
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
    echo"<a href='up.php'>click to go back</a>";
}
else{
    $query1="UPDATE netcamp SET phone='$c' WHERE name='$a' AND email='$b'";
mysql_query($query1);
echo "phone no updated";
}
}
?>