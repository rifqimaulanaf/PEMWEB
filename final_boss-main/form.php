<html>
<head>
    <title>FORM PENYEWAAN</title>
</head>

<body>
    <h2 align=center  style="border:1px solid;height:30px;background-color:cyan" >FORM PENYEWAAN</h2>

    <h4>Silahkan Isi Data Pada Kolom Tersedia!</h4>
    <form action="prosesform.php" method="post" name="form1">
        <table>
          <br>  </br>
          <label for="mobil">Pilih Mobil:</label>

          <select style="width:1500px;height:25px"  name="mobil" id="mobil" required>
            <option value="pilih">Pilih Mobil......</option>
            <option value="agya">AGYA</option>
            <option value="ayla">AYLA</option>
            <option value="grandmax">GRANDMAX</option>
            <option value="luxio">LUXIO</option>
            <option value="brio">BRIO</option>
            <option value="grandlivina">GRANDLIVINA</option>
            <option value="newavanza">NEWAVANZA</option>
            <option value="newxenia">NEWXENIA</option>
            <option value="terios">TERIOS</option>
            <option value="mobilio">MOBILIO</option>
          </select>
          </br>

          <br> Masukkan Alamat </br>
              <input type="text" name="alamat" style="width:1500px;height:25px" required>
              </br>
          <br> Masukkan No.Telpon </br>
              <input type="text" name="hp" style="width:1500px;height:25px" required>
              </br>
          <br> Masukkan No. KTP </br>
              <input type="text" name="noktp" style="width:1500px;height:25px" required>
              </br>
          <br> Jaminan Motor masukkan nomor plat </br>
              <input type="text" name="no_plat" style="width:1500px;height:25px" required>
              </br>
          <br> Tujuan Perjalanan </br>
              <input type="text" name="tujuan" style="width:1500px;height:25px"  required>
              </br>
          <br> Lama Penyewaan </br>

                    <div class="row">
           <div class="col-lg-6">
            <div class="form-group">
             <label>Tgl Awal</label>
             <div class="input-group date">
              <div class="input-group-addon">
                     <span class="glyphicon glyphicon-th"></span>
                 </div>
                 <input id="tgl_mulai" placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal" required>
             </div>
            </div>
            <div class="form-group">
             <label>Tgl Akhir</label>
             <div class="input-group date">
              <div class="input-group-addon">
                     <span class="glyphicon glyphicon-th"></span>
                 </div>
                 <input id="tgl_akhir" placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir" required>
             </div>
            </div>
           </div>
          </div>

          <br>Menggunakan Sopir</br>
          <input type= "radio" name="menggunakan" value = "YA" required> Ya</input>
          <input type= "radio" name="menggunakan" value = "TIDAK" required> Tidak</input>
        <br></br>
          <div>
            <label>Upload KTP</label> <br>
            <input type="file" name="foto">
          </div>
        <div style="margin-top: 1rem">

                <input type="submit" name="submit" value="Simpan" style="background:#008CBA">

                <input  type="reset" name="reset" value="Reset" style="background:#f44336">

                <a  href="list_mobil.php"><input type="button" name="back" value="back" style="background:#f44336"></a>



        </table>
    </form>

</body>

</html>
