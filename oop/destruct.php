<?php

class manusia{
function __destruct(){
    echo "ini adalah destruct";
}
function nama(){
    echo "<br> nama saya uus <br>";
}
function __construct(){
    echo "ini construck";
  }
}

$cetak = new manusia();
echo $cetak-> nama();

?>