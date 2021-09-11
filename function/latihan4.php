<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <table>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td><input type="radio" name="jk" value="Laki-laki"> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td> : </td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td> : </td>
                <td>
                    <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kristen">Kristen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td>
                    <textarea name="alamat"></textarea>
                </td>
            </tr>
            <tr>
            <td>Hobi</td>
            <td> : </td>
            <td><input type="checkbox" name="hobi[]" value="Dance"> Dance <br>
                <input type="checkbox" name="hobi[]" value="Renang"> Renang <br>
                <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br>
                <input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br>
                <input type="checkbox" name="hobi[]" value="Kuliner"> Kuliner <br></td>
        </tr>
        <tr>
            <td></td><td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $hobi = $_POST['hobi'];
    function biodata($nama, $jk, $tl, $agama, $alamat, $hobi) {
        echo "Nama : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tanggal lahir : $tl <br>";
        echo "Agama : $agama <br>";
        echo "Alamat : $alamat <br>";
        echo "Hobi : ";
        foreach ($hobi as $key ) {
            echo $key;
            echo ", ";
        }
    }
    echo biodata($_POST['nama'], $_POST['jk'], $_POST['date'], $_POST['agama'], $_POST['alamat'], $hobi);

}

?>