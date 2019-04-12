<?php
  include "conf/info.php";
  $title="CheckMovies";
  include "header.php";
?>
  <main class="main-container">
    <div class="text-container">
      <h2>Let's CheckMovies!</h2>
      <span>All the informations about your favourite movies, the actors and much more...</span>
    </div>
    <form action="search.php" method="get">
      <div class="search-box">
        <button type="submit"><img src="./images/search.svg" alt="search"></button>
        <input type="search" name="search" placeholder="Ex : Aquaman" autocomplete="off" required>
      </div>
    </form>
  </main>
    

<?php
  include "footer.php";
?>