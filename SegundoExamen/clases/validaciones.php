<?php
include_once "helpers.php";
include_once "FlashMessage.php";
include_once "../Repetido/conexion.php";
$flashMessage = new FlashMessage();
$connection = new mysqli("localhost", "root", "", "examendos");
$titulo= $_POST['titulo'];
$contenido= $_POST['contenido'];
$fecha = date('Y-n-j');

if($connection->connect_errno){
  echo "Fallo al conectar a MYSQL(".$connection->connect_errno.")".
    $connection->connect_error;
}
if(!empty($titulo) && !empty($contenido)){
$result = $connection->query(
    "SELECT * FROM posts WHERE title='$titulo' ",
    "SELECT * FROM posts WHERE content='$contenido'",
    "SELECT * FROM posts WHERE date='$fecha'"
);

}else{
$flashMessage->setMessage('Verifique que todos los campos esten llenos.');
}
if ($flashMessage->hasMessage() || $flashMessage->hasErrors()) {

  $flashMessage->setInputs($_POST);

  // Guardando los cambios en la sesion
  $flashMessage->save();
  header("Location: "."../agregar.php");
  exit();
}
$result = $connection->query(
  "INSERT INTO posts (title, content, date)"."VALUES('$titulo','$contenido','$fecha')"
);

$flashMessage->save();
header("Location: "."../index.php");
exit();
 ?>
