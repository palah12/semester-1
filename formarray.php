<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>document</title>
</head>
<body><center>
    <form action="" method="post">
        <h2>Data Siswa Kelas XII RPL</h2>
        <table>
            <tr>
                <td>jumlah siswa</td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type ="submit" name="proses" value="proses"></td>
</tr>
</table>
<br>
</form>

<?php

      if(isset($_POST['proses'])){
          $jumlah =$_POST['jumlah'];
          ?>

          <form action="hasilformarray.php" method="post">
              <table>
                  <?php
                  for($i=1; $i <= $jumlah;$i++){
                      ?>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>data siswa ke - <?php echo $i; ?></td>
                  </tr>
                  <tr>
                      <td>nama</td>
                      <td>:</td>
                      <td><input type ="text" name="nama[]"></td>
                  </tr>
                  <tr>
                      <td>kelas</td>
                      <td>:</td>
                      <td><input type ="text" name ="kelas[]"/></td>
                  </tr>
                  <tr>
                      <td>jurusan</td>
                      <td>:</td>
                      <td><input type ="text" name ="jurusan[]"/></td>
                  </tr>


                 <?php
                  }
                  ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name ="simpan" value="simpan"/></td>
                </tr>
                </table>
                </form>
                <?php
      }
      ?>
      </body>
    </center>
    </html>