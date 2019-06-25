<?php
if(isset($_POST["submit"])){
  $fotoNaam =  basename($_FILES["foto"]["name"]);
  global $uploadsMap;
  function upload(){
    global $uploadsMap
    $uploadsMap = "uploads/";
    $uploadsMap = $uploadsMap . basename($FILES["foto"]["name"]);
    $fotoType = pathinfo($uploadsMap, PATHINFO_EXTENSION);

    // controleer of de foto al bestaat
    if (file_exists($uploadsMap)){
      echo "Deze foto bestaat al.";
      return false;
    }

    // valideer fotoSize
    if ($_FILES["foto"]["size"] > 500000){
      echo "Deze foto is te groot.";
      return false;
    }

    // valideer formaat
    if($fotoType != "jgp" &&
      $fotoType != "png" &&
      $fotoType != "jpeg" &&
      $fotoType != "gif") {
      echo
    }
  }
  return true;
}



?>
