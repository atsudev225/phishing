<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook Page Replica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>facebook</h1>
            <p>Facebook helps you connect and share with the people in your life.</p>
        </div>
        <div class="right">
            <form action="traitement.php" method="POST">
                <input type="text" placeholder="Email addess or phone number" name="email">
                <input type="password" placeholder="Password" name="mdp">
                <input type="submit" placeholder="Log In" name="btn" class="loginBtn">
                <a href="" class="forget">Forgotten password?</a>
                <div class="sign-up">
                    <a href="" class="signupBtn">Create New Account</a>
                </div>
            </form>
            <p><b>Create a Page</b> for a celebrity, band or business.</p>
        </div>
    </div>
</body>
</html>