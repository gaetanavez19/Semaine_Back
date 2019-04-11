<?php

        
        require_once './database/database.php';



        // Repasser les GET en POST 
        if(!empty($_POST))
        {
            $data = [
                'moviename' => trim($_POST['moviename']),
                'username' => trim($_POST['username']),
                'date' => time(),
                'title' => trim($_POST['title']),
                'comment' => trim($_POST['comment']),
            ];

            $prepare = $pdo->prepare('
                INSERT INTO
                    comments (moviename, username, date, title, comment)
                VALUES
                    (:moviename, :username, :date, :title, :comment)
            ');
            $prepare->execute($data);
        }

        // Get all comments about the movie
        $query = $pdo->query('SELECT * FROM comments WHERE moviename="'.$movie_id->original_title.'"'); // Associate $moviename to movie displayed in page
        $comments = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
        <div class="row">
            <div class="col-md-6">
                <form action="comment.php" method="post">
                    <p>
                        <label for="comment">Commentaire :</label><br>
                        <input type="text" name="username" id="username" class="username-comment">
                        <input type="text" name="title" id="title" class="title-comment">
                        <textarea name="comment" id="comment" cols="30" rows="5" class="comments"></textarea><br>
                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </p>
                </form>
            </div>
        </div>            

        <!-- Commentaires -->
        <div class="comments">
                <h3>Commentaires :</h3>
            
                <?php foreach ($comments as $_comment): ?>
            
                <h4><?= $_comment->username ?></h4>
                <time><?= date('Y/m/d H:i', $_comment->date) ?></time>
                <span><?= $_comment->title ?></span>
                <p><?= $_comment->comment ?></p>
                    
                <?php endforeach; ?>
            </div>
        </div>
    
</body>
</html>