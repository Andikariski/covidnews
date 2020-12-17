<!DOCTYPE html>
<html lang="en">

<head>
    <title>Self Risk Assesment Covid-19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


    <div class="container">

        <form action="hasil.php" method="POST">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Ya</th>
                        <th>Tidak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>A</b></td>
                        <td>
                            <b>Potensi Tertular Di Luar Rumah</b>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Saya pergi keluar rumah
                        </td>
                        <td><input type="radio" name="satu" value="1" required><b></b></td>
                        <td><input type="radio" name="satu" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Saya menggunakan Transportasi umum: Online, angkot, bus, taksi, kereta api
                        </td>
                        <td><input type="radio" name="dua" value="1" required><b></b></td>
                        <td><input type="radio" name="dua" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Saya berjabat tangan dengan orang lain
                        </td>
                        <td><input type="radio" name="tiga" value="1" required><b></b></td>
                        <td><input type="radio" name="tiga" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Saya tidak memakai masker pada saat berkumpul dengan orang lain
                        </td>
                        <td><input type="radio" name="empat" value="1" required><b></b></td>
                        <td><input type="radio" name="empat" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor
                        </td>
                        <td><input type="radio" name="lima" value="1" required><b></b></td>
                        <td><input type="radio" name="lima" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            Saya menyentuh benda/uang yang juga disentuh orang lain
                        </td>
                        <td><input type="radio" name="enam" value="1" required><b></b></td>
                        <td><input type="radio" name="enam" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            Saya tidak menjaga jarak 1,5m dengan orang lain ketika: belanja, bekerja, beribadah, belajar
                        </td>
                        <td><input type="radio" name="tujuh" value="1" required><b></b></td>
                        <td><input type="radio" name="tujuh" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>
                            Saya makan diluar rumah (warung)
                        </td>
                        <td><input type="radio" name="delapan" value="1" required><b></b></td>
                        <td><input type="radio" name="delapan" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>
                            Saya tidak minum air hangat & cuci tangan dengan sabun setelah tiba di tujuan
                        </td>
                        <td><input type="radio" name="sembilan" value="1" required><b></b></td>
                        <td><input type="radio" name="sembilan" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>
                            Saya berada diwilayah kelurahan tempat pasien tertular
                        </td>
                        <td><input type="radio" name="sepuluh" value="1" required><b></b></td>
                        <td><input type="radio" name="sepuluh" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td><b>B</b></td>
                        <td>
                            <b>Potensi Tertular Di Dalam Rumah</b>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>
                            Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah
                        </td>
                        <td><input type="radio" name="sebelas" value="1" required><b></b></td>
                        <td><input type="radio" name="sebelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>
                            Saya tidak mencuci tangan dengan sabun setelah tiba di rumah
                        </td>
                        <td><input type="radio" name="duabelas" value="1" required><b></b></td>
                        <td><input type="radio" name="duabelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>
                            Saya tidak segera merendam baju dan celan bekas pakai diluar rumah kedalam air panas/sabun
                        </td>
                        <td><input type="radio" name="tigabelas" value="1" required><b></b></td>
                        <td><input type="radio" name="tigabelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>
                            saya tidak segera mandi keramas setelah tiba dirumah
                        </td>
                        <td><input type="radio" name="empatbelas" value="1" required><b></b></td>
                        <td><input type="radio" name="empatbelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>
                            saya tidak mensosialisasikan checklist ini kepada keluarga dirumah
                        </td>
                        <td><input type="radio" name="limabelas" value="1" required><b></b></td>
                        <td><input type="radio" name="limabelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>
                            Saya tidak menyediakan: tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah
                        </td>
                        <td><input type="radio" name="enambelas" value="1" required><b></b></td>
                        <td><input type="radio" name="enambelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td><b>C</b></td>
                        <td>
                            <b>Daya Tahan Tubuh (Imunitas)</b>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>
                            saya dalam sehari tidak kena cahaya matahari minimal 15 menit
                        </td>
                        <td><input type="radio" name="tujuhbelas" value="1" required><b></b></td>
                        <td><input type="radio" name="tujuhbelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>
                            Saya tidak jalan kaki/berolahraga minimal 30 menit setiap hari
                        </td>
                        <td><input type="radio" name="delapanbelas" value="1" required><b></b></td>
                        <td><input type="radio" name="delapanbelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>
                            Saya jarang minum vitamin C dan E dan kurang tidur
                        </td>
                        <td><input type="radio" name="sembilanbelas" value="1" required><b></b></td>
                        <td><input type="radio" name="sembilanbelas" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>
                            Usia saya diatas 60 tahun
                        </td>
                        <td><input type="radio" name="duapuluh" value="1" required><b></b></td>
                        <td><input type="radio" name="duapuluh" value="0"><b></b></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>
                            Saya mempunyai penyakit: jantung/diabetes/gangguan pernapasan kronik
                        </td>
                        <td><input type="radio" name="duasatu" value="1" required><b></b></td>
                        <td><input type="radio" name="duasatu" value="0"><b></b></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="totals-row">
                        <td colspan="4" class="wide-cell" style="text-align:right;">
                            <button href="#home" type="submit" class="submit btn btn-primary btn-block" name="login" value="Login">&nbsp;&nbsp;Lihat Hasil&nbsp;&nbsp;</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>

        <center><a href="#">Back to top</a></center>