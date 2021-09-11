<!DOCTYPE html>
<html>
<head>
    <title>Status Vaksin</title>
</head>
<body>
    <h2><center>Syarat Masuk Ke MIKO MALL</center></h2>
	<br>
     <form method = "POST" action = " ">
		 <center>
        <table>

            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'> </td>
            </tr>   
			<tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type = 'text' name = 'umur'> </td>
            </tr>   
            <tr>
                <td>Status Vaksin</td>
                <td>:</td>
                <td><select name = "status">
				<option value= "0">---Status Vaksin---</option>
                <option value= "1">Sudah Vaksin</option>
                <option value= "2">Belum Vaksin</option>
                </td>
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = 'KIRIM'>
            </tr>   

</table>
<table>
<td>
<?php 
if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $umur = $_POST['umur'] ;
        $status = $_POST['status'] ;
        $sudah = "Sudah Vaksin";
        $belum = "Belum Vaksin";

        {
			echo "<br>";
            echo " Nama Anda  :  $nama <br>";
            echo " Umur : $umur <br>";
        }

        if ($umur < 12) {
            echo "TIDAK BISA MASUK!";
        }elseif ($umur > 50) {
            echo "TIDAK BISA MASUK!";
        }elseif ($status == "1") {
            echo "Status Vaksin : $sudah <br>" ;
            echo "<br>";
            echo "SILAHKAN MEMASUKI MALL";
        }else if ($status == "2") {
            echo "Status Vaksin : $belum <br>";
            echo "<br>";
            echo "ANDA DILARANG MEMASUKI MALL!<br>";
            echo "Lakukan Vaksinasi Terlebih Dahulu";
            echo "<br>";
            echo "<a href = https://pedulilindungi.id/>pedulilindungi.id</a>";
        }else {
            echo "Isi Data!";
        }
}
?>
</td>
</form>
</center>
</table>
</body>
</html>