

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div>
        <form action="php/loginaction.php" name="login-form" method="POST">
            
            <div>
                <h2>Login</h2>
                <label for="Email">Email</label>
                <input type="email" id="emailid" name="email" placeholder="Enter your Email-ID" required>
                <span id="emailid-alert" class="text-danger"></span></br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                <span id="password-alert" class="text-danger"></span></br>

                <br><input type="submit" value="Login">
                <input type="button" value="Register Now" onclick="window.open('registration.php')">
            </div>
            
        </form>
    </div>
</body>
</html>