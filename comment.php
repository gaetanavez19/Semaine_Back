<?php
    require_once './database/database.php';

        if(!empty($_POST))
        {
            $data = [
                'moviename' => $movie_id->original_title,
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
    <div class="container_comments">
        <h2 class="title_container_comments" for="comment">Commentaire :</h2><br>  
        <form action="#" method="post">
            <p>
                <input type="text" name="username" id="username" class="username-comment" placeholder="Your name">
                <input type="text" name="title" id="title" class="title-comment" placeholder="Title">
                <textarea name="comment" class="comments_text" cols="30" rows="5" class="comments" placeholder="text"></textarea><br>
                <input type="submit" value="Submit !" class="btn btn-success"></button>
            </p>
        </form>
    </div> 

    <!-- Print comments -->
    <div class="comments">
            <h2 class="other_comments">Other comments :</h2>
        
            <?php foreach ($comments as $_comment): ?>
            <div class="comment_user">
                <h4><?= $_comment->username ?></h4>
                <time><?= date('Y/m/d H:i', $_comment->date) ?></time>
                <span><?= $_comment->title ?></span>
                <p><?= $_comment->comment ?></p>
            </div> 
            <?php endforeach; ?>
        </div>
    </div>
    
</body> 
</html>