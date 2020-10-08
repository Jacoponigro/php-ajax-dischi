<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <img class="spotify-logo"src="img/spotify.png" alt="">
    </header>
    <main>
      <div class="poster-container">
        <?php foreach ($database as $disc) { ?>
        <div class="album">
          <img class="poster" src="<?php echo $disc["poster"] ?>">
          <div class="info">
            <h3><?php echo $disc["title"] ?></h3>
            <p><?php echo $disc["author"] ?></p>
            <p><?php echo $disc["year"] ?></p>
          </div>
        </div>
      <?php } ?>
      </div>
    </main>
  </body>
</html>
