<?php
$connection = new mysqli("localhost", "root", "", "examendos");
include "header.php";
get_header();
$encontrar = $_POST['buscar'];
foreach($connection->query("SELECT * FROM posts WHERE title  LIKE '%$encontrar%'") as $row){
  ?>
  <div class="back">
    <div class="title_date">
      <p class="titulo_Index">
      <?php echo $row['title']; ?>
  </p>

</div>
</div>
<?php } ?>
<?php
foreach($connection->query("SELECT * FROM posts WHERE content  LIKE '%$encontrar%'") as $row){
  ?>
  <div class="back">
    <div class="contenido">
      <div class="contenidoh">
    <p>
        <?php echo $row['content']; ?>
    </p>
  </div>
</div>
</div>
<?php } ?>
<?php
foreach($connection->query("SELECT * FROM posts WHERE date  LIKE '%$encontrar%'") as $row){
  ?>
  <div class="back">
    <div class="title_date">
      <p class="date">
      <?php echo $row['date'];
      ?>
  </p>
  </div>
</div>
<?php } ?>
