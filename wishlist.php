
<!-- Pas obligatoire -->
<style>
.wishlist
{
    border:1px solid #eaeaec;
}

table, th, tr
{
    text-align:center;
}

.title2
{
    text-align:center;
    color:#66afe9;
    background-color:#efefef;
    padding:2%;
}

h2
{
    text-align:center;
    color:#66afe9;
    background-color:#efefef;
    padding:2%;
}
</style>

<!-- ************************************************************************************************************ -->

<?php 
    require './database/database.php';

// Ajouter à la wishlist sur la base de données

    if(!empty($_POST))
    {
        if(isset($_POST['add']))
        {
            $data =
            [
                'fname' => $_POST['hidden_name'],
                'image' => $_POST['hidden_image'],
            ];
            $prepare = $pdo->prepare('
                INSERT INTO
                    wishlist(fname, image)
                VALUES
                    (:fname, :image) 
            ');
        }

// Supprimer de la wishlist sur la base de données

        else if(isset($_POST['delete']))
        {
            $data =
            [
              'id' =>$_POST['id'],
            ];

            $prepare = $pdo->prepare('
                DELETE FROM
                    wishlist
                WHERE
                    id = :id
            ');
        }
        $prepare->execute($data);
        

    }

    $query = $pdo->query('SELECT * FROM listfilm ORDER BY iD ASC');
    $result = $query->fetchAll();
?>

<!-- ************************************************************************************************************ -->

<!-- Liste de films -->

<div class="container" style="width: 68%">
    <h2>Films list</h2>
    <?php foreach($result as $key => $_result): ?>          
        <div class="col-md-3">
            <form method="post" action= "wishlist.php?action=add&id=<?= $_result->id ?>">
                <div class="wishlist">
                    <img src="./images/<?= $_result->image; ?>" alt="&" class="img-responsive">
                    <h5 class="text-info"><?= $_result->fname;?></h5>
                    <input type="hidden" name="hidden_image" value="<?= $_result->image; ?>">
                    <input type="hidden" name="hidden_name" value="<?= $_result->fname; ?>">
                    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Wishlist">
                </div>
            </form>
        </div>
    <?php endforeach ?>
    <div style="clear:both"></div>


<!-- ************************************************************************************************************ -->

<!-- Wishlist -->

    <h3 class="title2">Wishlist Details</h3>
            <div class="container" style="width: 68%">
    <?php 
    $query = $pdo->query('SELECT * FROM wishlist ORDER BY iD ASC'); 
    $result = $query->fetchAll();
    ?>
    <?php foreach($result as $key => $_result): ?>          
        <div class="col-md-3">
            <form method="post" action= "wishlist.php">
                <div class="wishlist">
                    <img src="./images/<?= $_result->image; ?>" alt="&" class="img-responsive">
                    <h5 class="text-info"><?= $_result->fname;?></h5>
                    <input type="hidden" name="id" value="<?= $_result->id ?>">
                    <input type="submit" name="delete" style="margin-top: 5px;" class="btn btn-success" value="Delete from Wishlist">
                </div>
            </form>
        </div>
    <?php endforeach ?>
</div>