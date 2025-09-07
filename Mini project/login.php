<html>
<body bgcolor="pink">
    <center>
        <script>
            function validateForm(){
                var x=document.forms["myForm"]["a"].value;
                if(x==""){
                    alert("name must be filled");
                    return false;
                }
                else if(document.forms["myForm"]["b"].value.length<6){
                    alert("password tooo short");
                    return false;
                }
              
            }
            </script>

    <form name="myForm" method="POST" action="login2.php" onsubmit="return validateForm()">
        <h1>Login</h1>
        Name:<input type="text" name="a" size=""30><br><br>
       Password:<input type="password" name="b" size=""30><br><br>
       <input type="submit" value="click to submit"><br>
        <input type="reset" value="click to reset"><br>
       </form>
    
</center>
</body></html>