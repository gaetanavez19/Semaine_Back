<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<div class="container">
        <div class="login">
            <div class="signIn">
                <h3>SIGN IN</h3>
                <form action='validation.php' method="POST">
                    <br>
                    <div>
                        <input required name="usernameIn" type="text" placeholder="username">
                    </div>
                    <div>
                        <input required name="passwordIn" type="password" placeholder="password">
                    </div>
                    <br>
                    <div>
                        <input type="submit">
                    </div>
                </form>
            </div>
            <div class="signUp">
                <h3>SIGN UP</h3>
                <form action="validation.php" method="POST">
                    <br>
                    <div>
                        <input required name="usernameUp" type="text" placeholder="username">
                    </div>
                    <div>
                        <input required name="passwordUp" type="password" placeholder="password">
                    </div>
                    <br>
                    <div>
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>