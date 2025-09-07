<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
mysql_connect("localhost" , "root" , "");
mysql_select_db("rkgit");
$query="SELECT * FROM netcamp WHERE email='$aa' AND password='$bb'";
 $result=mysql_query($query);

 while($row=mysql_fetch_array($result))
 {
 echo"<table border='2'>";
echo"<th>"."name"."</th>";
echo"<th>"."email"."</th>";
echo"<th>"."password"."</th>";
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"</tr>";
 echo"</table>";}
?>
