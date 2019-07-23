<?php
function get_header($head = ''){
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Post</title>
      <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
    <header>
      <form action="search.php" method="POST">
        <div class="p_header">
          <div class="header">
            <a href="http://localhost/SegundoExamen/index.php">JAMES&nbspBLOG</a>
          </div>
          <div class="header">
            <input action="agregar.php"  type="text" class="buscar" name="buscar" placeholder="Buscar...">
          </div>
          <div class="header">
        </form>
      <form action="agregar.php" method="post">
        <input type="submit" class="btn" value="Agregar Publicacion" />
      </form>

          </div>
        </div>
      </header>

<?php } ?>
