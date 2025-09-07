<?php
$aa=$_POST['a'];
$bb=$_POST['b'];
if($aa==""||$bb==""){
    echo"Please fill all";
    echo"<a href='show.php'>Click here to go back</a>";
}
else{
    mysql_connect("localhost" , "root" , "");
mysql_select_db("symmercamp");
$query="SELECT * FROM netcamp WHERE email='$aa' AND password='$bb'";
 $result=mysql_query($query);
 $count=mysql_num_rows($result);
 if($count==0)
{
    echo"Enrty is not present";
    echo"<a href='show.php'>click to go back</a>";
}
else{
    $query="SELECT * FROM netcamp WHERE email='$aa' AND password='$bb'";
 $result=mysql_query($query);

 while($row=mysql_fetch_array($result))
 {
 echo"<table border='2'>";
echo"<th>"."name"."</th>";
echo"<th>"."email"."</th>";
echo"<th>"."password"."</th>";
echo"<th>"."phone"."</th>";
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"</tr>";
 echo"</table>";}
}
}
?>