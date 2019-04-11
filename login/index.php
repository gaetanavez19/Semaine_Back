<?php
  include "../conf/info.php";
  $title="Login";
  require "../header.php";
?>

<body class="body_login">
    <div class="container_login">
        <div class="login">
            <div class="signIn">
                <h3>SIGN IN</h3>
                <form action='validation.php' method="POST">
                    <br>
                    <div>
                        <input required name="usernameIn" type="text" placeholder="Username">
                    </div>
                    <div>
                        <input required name="passwordIn" type="password" placeholder="Password">
                    </div>
                    <br>
                    <div>
                        <input type="submit">
                    </div>
                </form>
            </div>
            <div class="or"><h1>OR</h1></div>
            <div class="signUp">
                <h3>SIGN UP</h3>
                <form action="validation.php" method="POST">
                    <br>
                    <div>
                        <input required name="usernameUp" type="text" placeholder="Username">
                    </div>
                    <div>
                        <input required name="passwordUp" type="password" placeholder="Password">
                    </div>
                    <br>
                    <div>
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
  include "../footer.php";
?>
</body>
</html>
