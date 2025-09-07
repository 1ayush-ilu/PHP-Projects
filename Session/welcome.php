<?php
session_start();
if(isset($_SESSION['name'])){
    echo"You have succesfully log in dear!";
    echo $_SESSION['name'] ;
    
    echo"<a href='logout.php'>Click here to logout</a>";
}
else{
echo"<a href='form.php'>Click here to log-in</a>";
}