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
                        <div class="col-md-3" data-aos="fade-down">
                            <h2>INDONESIA</h2>

                            <h5>Positif : <span class="pos-id"></span></h5>
                            <h5>Meninggal : <span class="meninggal-id"></span></h5>
                            <h5>Sembuh : <span class="sembuh-id"></h5>

                        </div>
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="./assets/assetsimg/indonesia.svg" style="width: 150px">
                        </div>
                        <div class="col-md-5" data-aos="fade-down">
                            <h2>Terkini</h2>
                            <h5>Positif : <span class="pos-idtoday"></span></h5>
                            <h5>Meninggal : <span class="meninggal-idtoday"></span></h5>
                            <h5>Sembuh : <span class="sembuh-idtoday"></h5>
                            <h6 style="color: white">Update <span class="timeindo"> </h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper-scroll-y my-custom-scrollbar" data-aos="zoom-in">
            <div class="card mt-3">
                <div class="card-header  text-white" data-aos="zoom-in" style="background-color: rgb(65 ,47 ,179);">
                    <b>Data Kasus Corona Virus diIndonesia Bedasarkan Provinsi</b>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%" data-aos="zoom-in">

                        <thead>
                            <th>No.</th>
                            <th>Nama Provinsi</th>
                            <th>Positif</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </thead>
                        <tbody id="table-data">
                            <tr>
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg"></td>
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg"></td>
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg"></td>
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg"></td>
                                <td><img width="50px" src="./assets/assetsimg/Preloader.svg"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
<!-- data section ends -->