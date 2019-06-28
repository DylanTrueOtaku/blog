<?php
session_start();
$mijnSession = session_id();
if(isset($_SESSION['ID']) && $_SESSION['ID']=== $mijnsession){
  echo"<h3>welkom</h3>";
}else{
  echo "<br>je moet eerst inloggen!<br>";
}
?>
<a href='uitloggen.php'><input type='button' name='terug' value='uitloggen'></a>
