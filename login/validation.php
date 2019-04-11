<?php

    include '../database/database.php';
    include "../conf/info.php";
    $title="Validation";
    require "../header.php";

    session_start();

    // On screen content
    if(isset($_POST['usernameIn']))
    {
        $message = [
            'Logged in succesfully '.$_POST['usernameIn'].'.',
            'Username or password is incorrect.',
            'Signed up succesfully',
        ];
    }
    if(isset($_POST['usernameUp']))
    {
        $message = [
            'Logged in succesfully',
            'Username or password is incorrect.',
            'Signed up succesfully, hello '.$_POST['usernameUp'].'.',
        ];
    }
    $link = [
        '../wishlist.php',
        '../login/login.php',
        '../wishlist.php',
    ];
    $linkName = [
        'Go to your watchList',
        'Try again or Sign Up',
        'Go to your watchList',
    ];

    // Sign In
    if(isset($_POST['usernameIn']))
    {
        if(!empty($_POST) && !empty($_POST['usernameIn'] ))
        {
            $query = $pdo->query('SELECT * FROM users');
            $users = $query->fetchAll();
            
            $j=1;

            for ($i=0; $i < count($users); $i++) { 
                if($users[$i]->username == $_POST['usernameIn'])
                {
                    $prepare = $pdo->prepare('
                        SELECT
                            password
                        FROM
                            users
                        WHERE
                            username = :username
                    ');

                    $prepare->bindValue('username', $_POST['usernameIn']);

                    $execute = $prepare->execute();

                    if($prepare->fetch()->password == hash('ripemd160', $_POST['passwordIn']))
                    {
                        $j=0;
                        $_SESSION["username"]=$_POST['usernameIn'];
                    }
                }
                else 
                {

                    if($j==1)
                    {
                        $j=1;
                    }
                    else {
                        $j=0;
                    }
                }
            }
        }
    }

    // Sign Up
    if(isset($_POST['usernameUp']))
    {
        if(!empty($_POST) && !empty($_POST['usernameUp']))
        {

            $username = trim($_POST['usernameUp']);
            $passwordHash = hash('ripemd160', $_POST['passwordUp']);

            $prepare = $pdo->prepare('
                INSERT INTO
                    users (username, password)
                VALUES
                    (:username, :password)
            ');

            $prepare->bindValue(':username', $username);
            $prepare->bindValue(':password', $passwordHash);

            $execute = $prepare->execute();

            $j=2;

            $_SESSION["username"]=$username;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Validation</title>
</head>
<body class="body_validation">
    <div class="container_validation">
        <div class="validation">
            <a href="<?= $link[$j] ?>" class="login validationBox">
                <h3><?= $message[$j] ?></h3>
                <br>
                <br>
                <h2><?= $linkName[$j] ?></h2>
            </a>
        </div>
    </div>
<?php
  include "../footer.php";
?>
</body>
</html>