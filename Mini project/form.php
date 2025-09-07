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
                else if(document.forms["myForm"]["c"].value.length<6){
                    alert("password tooo short");
                    return false;
                }
                else if(document.forms["myForm"]["d"].value.length<10){
                    alert("Invalid phone no");
                    return false;
                }
            }
            </script>

    <form name="myForm" method="POST" action="register.php" onsubmit="return validateForm()">
        Enter your name:<br>
        <input type="text" name="a" size=""30><br>
        Enter your email:<br>
        <input type="email" name="b" size=""30><br>
        Enter your password:<br>
        <input type="password" name="c" size=""30><br>
        Enter your phone no:<br>
        <input type="text" name="d" size=""30><br>
        <input type="submit" value="click to submit"><br>
        <input type="reset" value="click to reset"><br>
    </form>
    
</center>
</body></html>