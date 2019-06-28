<?php
// Vind de sessie
session start();
// Eind sessie melden
echo "Tot ziends" . $_SESSION['user'];
// verwijder de sessie.
session_destroy();
