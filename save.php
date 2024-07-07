<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lyrics = $_POST["lyrics"];
    file_put_contents("lyrics.txt", $lyrics);
    echo "Lyrics saved successfully!";
}
?>
