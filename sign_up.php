<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>SIGN UP PAGE</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup-box">
        <h1>Sign Up</h1><br>
        <form action="signup.php" method="post">
            <label>First Name</label>
            <input type="text"placeholder="" name="fname">
            <label>Last Name</label>
            <input type="text"placeholder=""name="lname">
            <label>Email</label>
            <input type="text"placeholder=""name="email">
            
            <label>Password</label>
            <input type="password"placeholder=""name="pass">
            <br><br><br><br>
            <br><br>
            <input type="button" value="submit">
        </form>
    </div>
</body>
</html>