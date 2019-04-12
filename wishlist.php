<?php 
    require 'header.php';
?>


<style>
    body
    {
        height: 100%;
    }

    .under_construction
    {
        height : 82%;
        display : flex;
        flex-direction : column;
        justify-content : center;
        align-items : center;
    }

    .under_construction h1 
    {
        text-align : center;
    }

</style>

<div class="under_construction">
<h1>Sorry <br> This page is under construction</h1>
<h2>
    <a class="sitename" href="<?=URL?>index.php">Back home</a>
</h2>
</div>

<?php
require 'footer.php';
?>

