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
        <ul class="album-list">
        </ul>

      </div>
    </main>
    <!-- hanldebars template -->
    <script id="template" type="text/x-handlebars-template">
      <li class="album">
        <img class="poster"src="{{poster}}">
        <h4>{{title}}</h4>
        <p>{{author}}</p>
        <p>{{year}}</p>
      </li>
    </script>
    <script src="dist/app.js"></script>
  </body>
</html>
