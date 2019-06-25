<?php
if(isset($_POST["submit"])){
  $fotoNaam =  basename($_FILES["foto"]["name"]);
  global $uploadsMap;
  function upload(){
    global $uploadsMap
    $uploadsMap = "uploads/";
    $uploadsMap = $uploadsMap
  }
}



?>
