<?php ?>

<html>


<head>
    <link rel="stylesheet" href="css/style.css2.css">
    <meta charset="utf-8">
</head>

<body style="background-image: url('photo/new2.jpeg');">
    <center>
        <h1>Sign up to enjoy with us <img src="photo/8.jfif">
            <h1>
    </center>
    <form name="myform" class="form" action="sign in.php">
        <h2>
            <label for="username">First Name:</label><br>
            <input type="text" id="username" name="username" required><br>
            <br>
            <label for="username">Last Name:</label><br>
            <input type="text" id="username" name="username"><br>
            <br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <br>
            <input type="date" name="date"><br>
            <br>
            <label for="phone"> Your Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="048-280" pattern="[0-9]{3}-[0-9]{6}"><br>
            <br>
            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" placeholder="username@gmail.com" required autocomplete="on"><br>
            <br>
            <label for="pass">Your Password:</label><br>
            <input type="password" id="pss" name="pwd" maxlength="11" minlength="2" required><br>
            <br>
            <label for="apli"> Your Site:</label><br>
            <input type="application" id="apli" name="apli"><br><br>
            <label for="lang">choose your language: </label>
            <select id="lang" name="lang">
                <option value="english">English</option>
                <option value="french">French</option>
                <option value="chinese">chinese</option>
                <option value="japanese">japanese</option>
                <option value="العربيه">العربيه</option>
            </select><br><br>
            <input type="reset" value="Reset" class="clear">
            <input type="submit" class="sub" value="Send" />
    </form>
    </h2>
</body>

</html>