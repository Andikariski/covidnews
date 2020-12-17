<?php
$pert1 = $_POST['satu'];
$pert2 = $_POST['dua'];
$pert3 = $_POST['tiga'];
$pert4 = $_POST['empat'];
$pert5 = $_POST['lima'];
$pert6 = $_POST['enam'];
$pert7 = $_POST['tujuh'];
$pert8 = $_POST['delapan'];
$pert9 = $_POST['sembilan'];
$pert10 = $_POST['sepuluh'];
$pert11 = $_POST['sebelas'];
$pert12 = $_POST['duabelas'];
$pert13 = $_POST['tigabelas'];
$pert14 = $_POST['empatbelas'];
$pert15 = $_POST['limabelas'];
$pert16 = $_POST['enambelas'];
$pert17 = $_POST['tujuhbelas'];
$pert18 = $_POST['delapanbelas'];
$pert19 = $_POST['sembilanbelas'];
$pert20 = $_POST['duapuluh'];
$pert21 = $_POST['duasatu'];
$hasil = 0;

if ($pert1 == "1") {
  $hasil++;
}
if ($pert2 == "1") {
  $hasil++;
}
if ($pert3 == "1") {
  $hasil++;
}
if ($pert4 == "1") {
  $hasil++;
}
if ($pert5 == "1") {
  $hasil++;
}
if ($pert6 == "1") {
  $hasil++;
}
if ($pert7 == "1") {
  $hasil++;
}
if ($pert8 == "1") {
  $hasil++;
}
if ($pert9 == "1") {
  $hasil++;
}
if ($pert10 == "1") {
  $hasil++;
}
if ($pert11 == "1") {
  $hasil++;
}
if ($pert12 == "1") {
  $hasil++;
}
if ($pert13 == "1") {
  $hasil++;
}
if ($pert14 == "1") {
  $hasil++;
}
if ($pert15 == "1") {
  $hasil++;
}
if ($pert16 == "1") {
  $hasil++;
}
if ($pert17 == "1") {
  $hasil++;
}
if ($pert18 == "1") {
  $hasil++;
}
if ($pert19 == "1") {
  $hasil++;
}
if ($pert20 == "1") {
  $hasil++;
}
if ($pert21 == "1") {
  $hasil++;
}
?>

<style type="text/css">
  .box {
    align-items: center;
    padding: 30px 40px;
    border-radius: 5px;
  }

  h5 {
    color: white;
  }

  h4 {
    color: white;
  }

  h2 {
    color: white;
  }
</style>
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
if ($hasil < 8) { ?>

  <center>
    <div class="col-md-4">
      <br><img src="../assets/hsl/rendah.png" width="100%"><br><br>
      <div class="bg-success box text-white center" align="center">

        <div class="col-md-9 " align="center">
          <h5>Anda Resiko Sedang</h5>
          <h7>Segera Hubungi Rumahsakit Terdekat jaga kesehatan</h7>
        </div>


      </div>
    </div>
  </center>

<?php
}

//Sedang
else if ($hasil < 15) { ?>

  <center>
    <div class="col-md-4">
      <br><img src="../assets/hsl/sedang.png" width="100%"><br><br>
      <div class="bg-warning box text-white center" align="center">

        <div class="col-md-9 " align="center">
          <h5>Anda Resiko Sedang</h5>
          <h7>Segera Hubungi Rumahsakit Terdekat jaga kesehatan</h7>
        </div>


      </div>
    </div>
  </center>
<?php
}




//Tinggi
else {
?>
  <center>
    <div class="col-md-4">
      <br><img src="../assets/hsl/tinggi.png" width="100%"><br><br>
      <div class="bg-danger box text-white center" align="center">

        <div class="col-md-9 " align="center">
          <h5>Anda Resiko Tinggi</h5>
          <h7>Segera Hubungi Rumahsakit Terdekat</h7>
        </div>


      </div>
    </div>
  </center>



<?php
}

?>