<?php
require_once('mp3file.class.php');
$file="http://localhost/mp3/ID-Belly-.mp3";
$mp3file = new MP3File($file);
    echo @$duration = $mp3file->getDuration();
 ?>