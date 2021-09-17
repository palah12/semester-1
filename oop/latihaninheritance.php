<?php

class bangundatar{
    
    public $luas;
    public $keliling;
}

   class persegi extends bangundatar{
    public function psg($sisi){
            echo  "Menghitung Luas Persegi<br>";
            echo  "Sisinya = $sisi<br>";
          
          $this->luas=$sisi*$sisi;
          $this->keliling=$sisi*$sisi*$sisi*$sisi;
          echo  "Luasnya = $this->luas <br>";
          echo "kelilingnya = $this->keliling <br>";
          echo "<hr>";
          echo "<hr>";
          echo "<hr>";
    }
}

   class pp extends bangundatar{
       public function persegipanjang($panjang,$lebar){
           echo "menghitung luas persegi panjang<br>";
           echo "panjangnya = $panjang<br>";
           echo "lebarnya = $lebar<br>";

           $this->luas=$panjang*$lebar;
           $this->keliling=2*$panjang+$lebar;
           echo "luasnya = $this->luas <br>";
           echo "kelilingnya = $this->keliling <br>";
           echo "<hr>";
           echo "<hr>";
           echo "<hr>";
       }
   }

   class po extends bangundatar{
    public function segitiga($alas,$tinggi,$b,$c){
        echo "menghitung luas segitiga<br>";
        echo "alasnyanya = $alas<br>";
        echo "tingginya = $tinggi<br>";

        $this->luas=1/2*$alas*$tinggi;
        $this->keliling=$alas+$b+$c;
        echo "luasnya = $this->luas <br>";
        echo "kelilingnya= $this->keliling";
        echo "<hr>";
        echo "<hr>";
        echo "<hr>";
    }
}

class pa extends bangundatar{
    public function lingkaran($jari,$phi=3.14){
        echo "menghitung luas lingkaran<br>";
        echo "phi = $phi<br>";
        echo "jari = $jari<br>";

        $this->luas=$phi*$jari*$jari;
        $this->keliling=2*$phi*$jari;
        echo "luasnya = $this->luas <br>";
        echo "kelilingnya = $this->keliling <br>";
        echo "<hr>";
        echo "<hr>";
        echo "<hr>";
    }
}
$cetak = new persegi();
$cetak -> psg(5);
$pletak = new pp();
$pletak ->persegipanjang(10,5);
$jos = new po();
$jos ->segitiga(10,50,5,5);
$king = new pa();
$king ->lingkaran(10);

?>