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
      echo "Foto moet JPG, JPEG, PNG of Gif zijn.";
      return false;
    }
    return true;
  }

  // verplaats foto van temp-map naar uploadsMap
  if(upload()){
    if (move_uploaded_file($_FILES["foto"]["tmp_name"],
        $uploadsMap)){
      echo "Foto is geupload.";

      //gebruiker opslaan
      $bestand=fopen("gebruikers.txt","ab");
      if (!$bestand)
      {
        echo "Kon geen bestand openen"
      }

      $naam = htmlspecialchars($_POST['naam']);
      $email = htmlspecialchars($_POST['password']);
      $wachtwoord = htmlspecialchars($_POST['password']);
      $profielfoyo
    }
  }
}



?>
