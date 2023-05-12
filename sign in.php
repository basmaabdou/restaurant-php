<?php ?>
<html>

<head>
    <link rel="stylesheet" href="css/in.css">
    <meta charset="utf-8">
</head>


<body style="background-image: url('photo/image3.png')">
    <address>
        <h2>
            <center>
                <form name="myform" onsubmit="return test()" action="page1.php">
                    <p><i> Welcome Back</i></p>
                    </p>
                    <label for="username">Enter User Name:</label><br>
                    <input type="text" id="username" name="username" placeholder="First Name"><br>
                    <br>
                    <label for="pass">Enter User Password:</label><br>
                    <input type="password" id="pass" name="pass" maxlength="11" minlength="2" pattern="[A-Z a-z 0-9]{3}"
                        placeholder="Enter Passward"><br>
                    <br>
                    <!-- <a href="page1.php" class="sub">Login</a> -->
                    <input type="reset" value="Reset" class="clear">
                    <input type="submit" value="login" class="sub">
                    <h5>
                        <a href="sign up.php">To Sign Up</a>
                    </h5>
                </form>

                <script type="text/javascript">
                function test() {
                    console.log("login begin");
                    var narr = ["basma", "basant", "aya"];
                    var parr = ["123", "456", "789"];
                    var name = document.forms["myform"]["username"].value;
                    var pass = document.forms["myform"]["pass"].value;
                    for (var i = 0; i < 3; i++) {
                        if ((name == narr[i]) && (pass == parr[i]))
                            return true;
                        else if (name == "" || pass == "") {
                            alert("name or password empty")
                            return false;
                        } else {
                            alert("name or password invalid")
                            return false;
                        }
                    }
                    return false;
                }
                </script>
            </center>
            <!-- </form> -->
        </h2>
    </address>
</body>

</html>