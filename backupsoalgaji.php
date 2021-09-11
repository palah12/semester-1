<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>selamat datang</h1>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">palah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="soalgaji.php">penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vaksin.php">vaksin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="soalke3.php">perulangan</a>
      </li>
    </ul>
  </div>
</nav>

<!--form input-->

<form>
 <div class = "container">
 <h2><center> PT KELINCI MAKMUR</center></h2>
  <div class="form-group">
    <label for="exampleInputEmail1">nama bendahara</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">nama pekerja</label>
    <input type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <fieldset class="form-group row">
    <legend class="col-form-label col-sm-2 float-sm-left pt-0">jenis kelamin</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">perempuan
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          laki-laki
        </label>
      </div>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="exampleInputPassword1">tanggal gaji</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>pilih jabatan</option>
        <option value="manager">manager</option>
        <option value="direktur">direktur</option>
        <option value="karyawan">karyawan</option>
        <option value="ob">ob</option>
      </select>
    </div>
    <br>
    <div class="form-group">
    <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>pendidikan terakhir</option>
        <option value="sd">sd</option>
        <option value="smp">smp</option>
        <option value="sma/smk">sma/smk</option>
        <option value="s1">s1</option>
      </select>
    </div>
  

  </div>
</form>
</html>

<?php
  if(isset($_POST['simpan'])){
    $nama1 = $_POST['namaa'];
    $nama2 = $_POST['namab'];
    $jenis = $_POST['jenis'];
    $tgl = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $pendidikan =$_POST['pendidikan'];
    $lembur= $_POST['lembur'];
    $potongan=$_POST['potongan'];

    $vakasi_lembur =$lembur*20000;

    if($pendidikan == "sd"){
        $tunjangan = 250000;
    } else if($pendidikan == "smp"){
        $tunjangan = 500000;
    } else if ($pendidikan == "sma/smk"){
        $tunjangan = 1000000;
    } else if ($pendidikan == "s1"){
        $tunjangan = 1500000;
    } else {
        echo "error";
    }

    if ($jabatan == "direktur"){
        $rektur = 10000000;
    } else if ($jabatan == "manager"){
        $rektur = 7500000;
    } else if($jabataan == "karyawan") {
        $rektur = 5000000;
    } else if ($jabatan =="ob"){
        $rektur = 2500000;
    } else {
        echo "pilihan tidak ada";
    }

    $total =$rektur + $tunjangan +$vakasi_lembur -$potongan;


    echo "============STRUK GAJI WOI=============<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>tanggal : $tgl</b> <br>";
    echo "<i><b>gaji pokok</b></i> <br>";
    echo "<br>";
    echo "Nama karyawan = $nama1 <br>";
    echo "Jenis kelamin = $jenis <br>";
    echo "pendidikan terakhir = $pendidikan <br>";
    echo "jabatan = $jabatan<br>";
    echo " gaji = $rektur <br>";
    echo "<br>";
    echo "<i><b>Tunjangan</b></i> <br>";
    echo "<br>";
    echo "tunjangan pendidikan = $tunjangan <br>";
    echo "vakasi lembur = $vakasi_lembur <br>";
    echo "<br>";
    echo "<i><b>potongan</b></i> <br>";
    echo "potongan = $potongan <br>";
    echo "total gaji = $total";
    echo "<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>bendahara : $nama1</b> <br>";

    

  }

?>