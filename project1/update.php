<?php
$xx=$_POST['x'];
$yy=$_POST['y'];
$zz=$_POST['z'];


mysql_connect("localhost" , "root" ,"");
mysql_select_db("rkgit");



$query="UPDATE netcamp SET password='$zz' WHERE name='$xx' AND email='$yy'";
mysql_query($query);
echo "password updated";





?>