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
});
