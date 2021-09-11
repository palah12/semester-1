<html>
<head>
<title>form input</title>
</head>
<body>
<h2>switch case</h2>
<form method ="POST" action="">
<table>
<tr>
<td>masukan angka</td>
<td>:</td>
<td><input type ="text" name='angka'></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST["simpan"])){
    $angka =$_POST['angka'];

    switch ($angka){
        case 1:
            echo "isi variabel angka adalah satu";
            break;
            case 2:
                echo "isi variabel angka adalah dua";
                break;
                case 3:
                    echo "isi variabel angka adalah tiga";
                    break;
                    case 4:
                        echo "isi variabel angka adalah empat";
                        break;
                        case 5:
                            echo "isi variabel angka adalah lima";
                            break;
                            case 6:
                                echo "isi variabel angka adalah enam";
                                break;
                                default:
                                echo "isi variabel tidak di tentukan";
                                break;
    }
}
?>