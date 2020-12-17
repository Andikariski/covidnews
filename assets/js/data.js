$(document).ready(function () {
  semuaData();
  upd();
  dataProvinsi();

  setInterval(function () {
    semuaData();
    upd();
  }, 3000);

  function semuaData() {
    $.ajax({
      url: "https://coronavirus-19-api.herokuapp.com/all",
      success: function (data) {
        try {
          var nf = Intl.NumberFormat();
          var json = data;
          var kasus = data.cases;
          var meninggal = data.deaths;
          var sembuh = data.recovered;

          $("#data-kasus").html(nf.format(kasus));
          $("#data-mati").html(nf.format(meninggal));
          $("#data-sembuh").html(nf.format(sembuh));
        } catch {
          alert("error");
        }
      },
    });
  }

  function upd() {
    $.getJSON(
      "https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/ArcGIS/rest/services/Statistik_Perkembangan_COVID19_Indonesia/FeatureServer/0/query?where=Jumlah_Kasus_Kumulatif%20IS%20NOT%20NULL%20AND%20Jumlah_Pasien_Sembuh%20IS%20NOT%20NULL%20AND%20Jumlah_Pasien_Meninggal%20IS%20NOT%20NULL&outFields=*&orderByFields=Tanggal%20desc&resultRecordCount=2&f=json&fbclid=IwAR0WtY3HaDB_Hx6qjcY8Q2_zj_CTii-x43W3_yleVGpBz6DCrKx8hY5yRuM",
      function (covid) {
        var nf = Intl.NumberFormat();
        var indopositif = covid.features[0].attributes.Jumlah_Kasus_Kumulatif;
        var indomeninggal =
          covid.features[0].attributes.Jumlah_Pasien_Meninggal;
        var indosembuh = covid.features[0].attributes.Jumlah_Pasien_Sembuh;
        var indopositiftoday =
          covid.features[0].attributes.Jumlah_Kasus_Baru_per_Hari;
        var indomeninggaltoday =
          covid.features[0].attributes.Jumlah_Kasus_Meninggal_per_Hari;
        var indosembuhtoday =
          covid.features[0].attributes.Jumlah_Kasus_Sembuh_per_Hari;
        var indotime = moment(covid.features[0].attributes.Tanggal).format(
          "DD-MM-YYYY HH:mm:ss"
        );

        function positif() {
          $(".pos-id").text(nf.format(indopositif));
        }
        positif();

        function positiftoday() {
          $(".pos-idtoday").text(nf.format(indopositiftoday));
        }
        positiftoday();

        function meninggal() {
          $(".meninggal-id").text(nf.format(indomeninggal));
        }
        meninggal();

        function meninggaltoday() {
          $(".meninggal-idtoday").text(nf.format(indomeninggaltoday));
        }
        meninggaltoday();

        function sembuh() {
          $(".sembuh-id").text(nf.format(indosembuh));
        }
        sembuh();

        function sembuhterkini() {
          $(".sembuh-idtoday").text(nf.format(indosembuhtoday));
        }
        sembuhterkini();

        function timeupdate() {
          $(".timeindo").text(indotime);
        }
        timeupdate();
      }
    );
  }

  function dataProvinsi() {
    $.ajax({
      url: "curl.php",
      type: "GET",
      success: function (data) {
        try {
          $("#table-data").html(data);
          $("#example").DataTable({
            scrollY: "500px",
            scrollCollapse: true,
          });
          $(".dataTables_length").addClass("bs-select");
        } catch {
          alert("error");
        }
      },
    });
  }
});
