<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim">
            </tr>
<tr>
     <td>nama</td>
     <td>:</td>
     <td><input type="text" name="nama"></td>
</tr>
<tr>
     <td>kelas</td>
     <td>:</td>
     <td><input type="text" name="kelas"></td>
</tr>
<tr>
    <td></td>
    <td></td>
<td><input type="submit" name="proses" value="proses"></td>
</tr>
</form>
</table>
</body>
</html>
<?php
/*
*kalkulator sederhana dengan php
*/
if (isset($_POST['proses'])){
    $nim =$_POST['nim'];
    $nama =$_POST['nama'];
    $kelas=$_POST['kelas'];

    class input
    {
        public $x;
        public $y;
        public $d;

        public function data($xc,$yc,$dd)
        {
            $this->x=$xc;
            $this->y=$yc;
            $this->d=$dd;
        }
    }

    $data = new input();
    $data->data($nim,$nama,$kelas);

    echo $data->x."<br>";
    echo $data->y."<br>";
    echo $data->d;
}