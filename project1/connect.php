<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];


mysql_connect("localhost" , "root" , "");
mysql_select_db("rkgit");
$query="INSERT INTO netcamp VALUES('$aa','$bb','$cc')";
mysql_query($query);
echo "database updated";

?>