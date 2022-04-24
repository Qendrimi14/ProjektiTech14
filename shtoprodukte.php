<?php

$dbconn = mysqli_connect('localhost', 'root', '', 'tech14');

if(!$dbconn){
    die("Nuk eshte lidhur me DB ". mysqli_error($dbconn));
}


?>