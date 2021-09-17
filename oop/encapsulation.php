<?php

//class
//class manusia{
    //prop
   // public $nama;

    //method
   // public function tampilkan_nama(){
        //echo "nama saya uus";
   // }
    //public function biodata(){
        //echo $this->tampilkan_nama();
   // }
//}
//$manusia = new manusia();

//echo $manusia->biodata();

//private
//class
//class manusia{
    //prop
   // private $nama="palah";

    //method
    //private function tampilkan_nama(){
        //return "nama saya" .$this-> nama;
    //}
    //public function output(){
        //echo $this->tampilkan_nama();
    //}
    
//}
//$manusia = new manusia();

//echo $manusia-> output();

//protected
//class
class manusia{
    //property
    // protected $nama="palah rante";

    //method
    protected function nama(){
        return "nama saya palah ea ";
    }
    public function keluar(){
        return $this-> nama();
    }
    //public function tampilkan_nama(){
        //return $this->nama();
    //}
    
}
$manusia = new manusia();

echo $manusia-> keluar();


?>