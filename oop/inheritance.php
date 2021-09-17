<?php
//class utama
class manusia{

    
    protected function berinama(){
        echo "nama saya palah<br>";
    }
}

//class turunan
class teman extends manusia{
    public function berinamateman(){
        echo $this->berinama();
        echo "nama teman saya andi";
    }
}

//instalasi
$malasngoding = new teman;


$malasngoding->berinamateman();

?>