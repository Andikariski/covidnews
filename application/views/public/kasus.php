<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if (isset($_GET['country']) && !empty($_GET['country'])) {

    curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/' . urlencode($_GET['country']));
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api');
    $MainApi = curl_exec($ch);
    $totalStatistics = json_decode($MainApi, true);
}

curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/ID');
$resultId = curl_exec($ch);
$dataCovidId = json_decode($resultId, true);

?>

<div class="jumbotron bg-white">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-5 text-center text-md-left">
                <h1 class="h1 font-weight-bold">Kasus COVID-19</h1>
                <p class="lead text-secondary my-4">Di Indonesia, kasus terkonfirmasi positif COVID-19 pertama kali terdektesi pada Senin, 2 Maret 2020. Sejak itu, jumlah yang terkonfirmasi COVID-19 semakin bertambah dari hari ke hari.</p>
                <a href="#" class="btn btn-primary rounded-pill px-4" role="button">Cek Selengkapnya</a>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="jumbotron__img">
                    <img src="./assets/assetsimg/banner/curva.png" class="img-fluid" alt="banner img" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jumbotron ends -->
<!-- data section -->
<section class="section-margin">
    <div class="container">

        <h1 style="text-align: center;" data-aos="zoom-in">Kasus Covid-19 Terkini</h1>
        <p style="text-align: center;" data-aos="zoom-in">Berikut adalah jumlah kasus Positif, Meninggal, dan Sembuh seluruh dunia</p>

        <div class="row">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="bg-danger box text-white">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-down">
                            <h5>Positif</h5>
                            <h4 id="data-kasus">
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg">
                            </h4>
                            <h5>Orang</h5>
                        </div>
                        <div class="col-md-4" data-aos="fade-up">
                            <img src="./assets/assetsimg/sad.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in">
                <div class="bg-info box text-white">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-down">
                            <h5>Meninggal</h5>
                            <h4 id="data-mati">
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg">
                            </h4>
                            <h5>Orang</h5>
                        </div>
                        <div class="col-md-4 " data-aos="fade-up">
                            <img src="./assets/assetsimg/cry.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in">
                <div class="bg-success box text-white">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-down">
                            <h5>Sembuh</h5>
                            <h4 id="data-sembuh">
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg">
                            </h4>
                            <h5>Orang</h5>
                        </div>
                        <div class="col-md-4" data-aos="fade-up">
                            <img src="./assets/assetsimg/happy.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-3" data-aos="zoom-in">
                <div class="bg box text-black" style="background-color: rgb(65 ,47 ,179);">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-down">
                            <h2>INDONESIA</h2>
                            <?php if (!empty($dataCovidId['confirmed']) || empty($dataCovidId['confirmed'])) : ?>
                                <h5>Terinfeksi : <span class="pos-id"><?php echo number_format($dataCovidId['confirmed']['value']) ?></span></h5>
                                <h5>Meninggal : <span class="meninggal-id"><?php echo number_format($dataCovidId['deaths']['value']) ?></span></h5>
                                <h5>Sembuh : <span class="sembuh-id"><?php echo number_format($dataCovidId['recovered']['value']) ?></h5>
                            <?php endif; ?>

                        </div>
                        <div class="col-md-6" data-aos="zoom-in">
                            <img src="./assets/assetsimg/indonesia.svg" style="width: 150px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-dark">
            <div class="jumbotron mt-3 bg-dark">
                <h1 class="mb-2 text-primary">Cek Statistik Covid-19</h1>
                <form class="form-group" method="get">
                    <input class="form-control" type="text" name="country" placeholder="masukkan nama negara">
                    <button class="btn btn-primary float-right mt-3" type="submit">Lihat Kasus</button>
                </form>

                <?php if (!empty($data['confirmed'])) : ?>
                    <h4>Statistik <?php echo htmlspecialchars($_GET['country'], ENT_QUOTES); ?></h4>
                    <ul>
                        <li>Terinfeksi - <?php echo number_format($data['confirmed']['value']) ?></li>
                        <li>Sembuh - <?php echo number_format($data['recovered']['value']) ?></li>
                        <li>Meninggal(s) - <?php echo number_format($data['deaths']['value']) ?></li>
                        <li>Terakhir Updated @ <?php echo $data['lastUpdate'] ?></li>
                    </ul>
                    <hr>
                <?php endif; ?>

                <!-- <img class='mt-2 text-center' src='https://covid19.mathdro.id/api/og' height="300px" width="1050px" /> -->
            </div>
        </div>
</section>
<!-- data section ends -->