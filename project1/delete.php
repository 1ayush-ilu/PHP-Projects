<?php
$x=$_POST['a'];
$y=$_POST['b'];



mysql_connect("localhost" , "root" , "");
mysql_select_db("rkgit");
$query="DELETE   FROM netcamp WHERE email='$x' AND password='$y'";
mysql_query($query);
echo "data deleted";




?>