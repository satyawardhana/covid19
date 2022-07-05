<?php
include 'koneksi.php';
$jumlah = mysqli_query($db, "SELECT SUM(Aceh)  AS total_jumlah FROM total_casualties ");
$total = mysqli_fetch_array($jumlah);

$jumlah1 = mysqli_query($db, "SELECT SUM(Bali)  AS total_jumlah1 FROM total_casualties ");
$total1 = mysqli_fetch_array($jumlah1);

$jumlah2 = mysqli_query($db, "SELECT SUM(Banten)  AS total_jumlah2 FROM total_casualties ");
$total2 = mysqli_fetch_array($jumlah2);

$jumlah3 = mysqli_query($db, "SELECT SUM(Babel)  AS total_jumlah3 FROM total_casualties ");
$total3 = mysqli_fetch_array($jumlah3);

$jumlah4 = mysqli_query($db, "SELECT SUM(Bengkulu)  AS total_jumlah4 FROM total_casualties ");
$total4 = mysqli_fetch_array($jumlah4);

$jumlah5 = mysqli_query($db, "SELECT SUM(DIY)  AS total_jumlah5 FROM total_casualties ");
$total5 = mysqli_fetch_array($jumlah5);

$jumlah6 = mysqli_query($db, "SELECT SUM(Jakarta)  AS total_jumlah6 FROM total_casualties ");
$total6 = mysqli_fetch_array($jumlah6);

$jumlah7 = mysqli_query($db, "SELECT SUM(Jambi)  AS total_jumlah7 FROM total_casualties ");
$total7 = mysqli_fetch_array($jumlah7);

$jumlah8 = mysqli_query($db, "SELECT SUM(Jabar)  AS total_jumlah8 FROM total_casualties ");
$total8 = mysqli_fetch_array($jumlah8);

$jumlah9 = mysqli_query($db, "SELECT SUM(Jateng)  AS total_jumlah9 FROM total_casualties ");
$total9 = mysqli_fetch_array($jumlah9);

$jumlah10 = mysqli_query($db, "SELECT SUM(Jatim)  AS total_jumlah10 FROM total_casualties ");
$total10 = mysqli_fetch_array($jumlah10);

$jumlah11 = mysqli_query($db, "SELECT SUM(Kalbar)  AS total_jumlah11 FROM total_casualties ");
$total11 = mysqli_fetch_array($jumlah11);

$jumlah12 = mysqli_query($db, "SELECT SUM(Kaltim)  AS total_jumlah12 FROM total_casualties ");
$total12 = mysqli_fetch_array($jumlah12);

$jumlah13 = mysqli_query($db, "SELECT SUM(Kalteng)  AS total_jumlah13 FROM total_casualties ");
$total13 = mysqli_fetch_array($jumlah13);

$jumlah14 = mysqli_query($db, "SELECT SUM(Kalsel)  AS total_jumlah14 FROM total_casualties ");
$total14 = mysqli_fetch_array($jumlah14);

$jumlah15 = mysqli_query($db, "SELECT SUM(Kaltara)  AS total_jumlah15 FROM total_casualties ");
$total15 = mysqli_fetch_array($jumlah15);

$jumlah16 = mysqli_query($db, "SELECT SUM(Kep_Riau)  AS total_jumlah16 FROM total_casualties ");
$total16 = mysqli_fetch_array($jumlah16);

$jumlah17 = mysqli_query($db, "SELECT SUM(NTB)  AS total_jumlah17 FROM total_casualties ");
$total17 = mysqli_fetch_array($jumlah17);

$jumlah18 = mysqli_query($db, "SELECT SUM(Sumsel)  AS total_jumlah18 FROM total_casualties ");
$total18 = mysqli_fetch_array($jumlah18);

$jumlah19 = mysqli_query($db, "SELECT SUM(Sumbar)  AS total_jumlah19 FROM total_casualties ");
$total19 = mysqli_fetch_array($jumlah19);

$jumlah20 = mysqli_query($db, "SELECT SUM(Sulut)  AS total_jumlah20 FROM total_casualties ");
$total20 = mysqli_fetch_array($jumlah20);

$jumlah21 = mysqli_query($db, "SELECT SUM(Sumut)  AS total_jumlah21 FROM total_casualties ");
$total21 = mysqli_fetch_array($jumlah21);

$jumlah22 = mysqli_query($db, "SELECT SUM(Sultra)  AS total_jumlah22 FROM total_casualties ");
$total22 = mysqli_fetch_array($jumlah22);

$jumlah23 = mysqli_query($db, "SELECT SUM(Sulsel)  AS total_jumlah23 FROM total_casualties ");
$total23 = mysqli_fetch_array($jumlah23);

$jumlah24 = mysqli_query($db, "SELECT SUM(Sulteng)  AS total_jumlah24 FROM total_casualties ");
$total24 = mysqli_fetch_array($jumlah24);

$jumlah25 = mysqli_query($db, "SELECT SUM(Riau)  AS total_jumlah25 FROM total_casualties ");
$total25 = mysqli_fetch_array($jumlah25);

$jumlah26 = mysqli_query($db, "SELECT SUM(Malut)  AS total_jumlah26 FROM total_casualties ");
$total26 = mysqli_fetch_array($jumlah26);

$jumlah27 = mysqli_query($db, "SELECT SUM(Maluku)  AS total_jumlah27 FROM total_casualties ");
$total27 = mysqli_fetch_array($jumlah27);

$jumlah28 = mysqli_query($db, "SELECT SUM(Papbar)  AS total_jumlah28 FROM total_casualties ");
$total28 = mysqli_fetch_array($jumlah28);

$jumlah29 = mysqli_query($db, "SELECT SUM(Papua)  AS total_jumlah29 FROM total_casualties ");
$total29 = mysqli_fetch_array($jumlah29);

$jumlah30 = mysqli_query($db, "SELECT SUM(Sulbar)  AS total_jumlah30 FROM total_casualties ");
$total30 = mysqli_fetch_array($jumlah30);

$jumlah31 = mysqli_query($db, "SELECT SUM(NTT)  AS total_jumlah31 FROM total_casualties ");
$total31 = mysqli_fetch_array($jumlah31);

$jumlah32 = mysqli_query($db, "SELECT SUM(Gorontalo)  AS total_jumlah32 FROM total_casualties ");
$total32 = mysqli_fetch_array($jumlah32);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="icon" href="icon.png">
    <title>Data Covid19 Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: 'Bebas Neue', cursive;
        background-color: #f4f4f4;
    }

    a {
        color: #000;
    }

    /* header */

    .header {
        background-color: #fff;
        box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, .1);
        position: fixed;
        width: 100%;
        z-index: 3;
    }

    .header ul {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: hidden;
        background-color: #fff;
    }

    .header li a {
        display: block;
        padding: 20px 20px;
        border-right: 1px solid #f4f4f4;
        text-decoration: none;
    }

    .header li a:hover,
    .header .menu-btn:hover {
        background-color: #f4f4f4;
    }

    .header .logo {
        display: block;
        float: left;
        font-size: 2em;
        padding: 10px 20px;
        text-decoration: none;
    }

    /* menu */

    .header .menu {
        clear: both;
        max-height: 0;
        transition: max-height .2s ease-out;
    }

    /* menu icon */

    .header .menu-icon {
        cursor: pointer;
        display: inline-block;
        float: none;
        padding: 28px 20px;
        position: relative;
        user-select: none;
    }

    .header .menu-icon .navicon {
        background: #333;
        display: block;
        height: 2px;
        position: relative;
        transition: background .2s ease-out;
        width: 18px;
    }

    .header .menu-icon .navicon:before,
    .header .menu-icon .navicon:after {
        background: #333;
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all .2s ease-out;
        width: 100%;
    }

    .header .menu-icon .navicon:before {
        top: 5px;
    }

    .header .menu-icon .navicon:after {
        top: -5px;
    }

    /* menu btn */

    .header .menu-btn {
        display: none;
    }

    .header .menu-btn:checked~.menu {
        max-height: 240px;
    }

    .header .menu-btn:checked~.menu-icon .navicon {
        background: transparent;
    }

    .header .menu-btn:checked~.menu-icon .navicon:before {
        transform: rotate(-45deg);
    }

    .header .menu-btn:checked~.menu-icon .navicon:after {
        transform: rotate(45deg);
    }

    .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,
    .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:after {
        top: 0;
    }

    /* 48em = 768px */

    @media (min-width: 48em) {
        .header li {
            float: left;
        }

        .header li a {
            padding: 20px 30px;
        }

        .header .menu {
            clear: none;
            float: right;
            max-height: none;
        }

        .header .menu-icon {
            display: none;
        }
    }
    </style>



</head>

<!-- BODY -->

<body>
    <header>
        <?php
        require 'navigation.php';
        ?>
    </header>
    <section class="p-3 mb-2 text-center bg-white">
        <div class="row mb-3 mt-4">
            <div class="jumbotron jumbotron-fluid">
                <div class="container mt-5 mb-5">
                    <div class="jumbotron text-center bg-transparent">
                        <h1 class="display-4">Data Warehouse</h1>
                        <p class="lead">Website Informasi Covid-19 Di Indonesia</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="p-1 mb-3 text-center bg-white">
        <div id="maincounter-wrap" style="margin-top:10px">
            <h1>Deaths:</h1>
            <div class="maincounter-number" style="color:#800000">
                <span>
                    <h3><?= number_format($jml1[0]); ?></h3>
                </span>
            </div>
        </div>
    </section>
    <section class="p-3" style="background-color:#800000;">
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h1 class="text-dark bg-white rounded-pill p-1">Data Sebaran Informasi Covid-19</h1>
                <h6 style="color:#fff ;"><i>Berdasarkan Data Per 29 Oktober 2020</i></h6>
            </div>
        </div>
        <div class="row mb-7 mt-5 d-flex justify-content-center">

            <div class="col-md-3">
                <div class="card" style="width: 18rem; background-color: #FA8072;">
                    <div class=" shadow-lg p-3 card-body rounded">
                        <h6 class="card-subtitle mb-2 text-bold text-white bg-danger rounded-pill p-1">Daily Casualties
                        </h6>
                        <p class="card-text"><?= number_format($jml4[0]); ?></p>
                        <span class="d-flex justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-emoji-dizzy-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM8 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3 mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="shadow-lg p-3 card-body rounded">
                        <canvas id="myChart" style="width:100%;max-width:700px;">
                        </canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="shadow-lg p-3 card-body rounded">
                        <canvas id="myChart1" style="width:100%;max-width:700px;">
                        </canvas>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="p-12">
        <footer class="text-black text-center p-3" style="height: 50px;width: 100%; background-color:#800000">
            <p>Created by <a href="https://www.instagram.com/stywrdhn/" class="text-black ">Satya Wardhana</a>
            </p>
        </footer>
    </section>

    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["ACEH", "BALI", "BANTEN", "BABEL", "BENGKULU", "YOGYAKARTA", "JAKARTA", "JAMBI", "JABAR",
                "JATENG", "JATIM", "KALBAR", "KALTIM", "KALTENG", "KALSEL", "KALTARA", "KEPRI", "NTB",
                "SUMSEL", "SUMBAR", "SULUT", "SUMUT", "SULTRA", "SULSEL", "SULTENG", "RIAU", "MALUT",
                "MALUKU", "PAPBAR", "PAPUA", "SULBAR", "NTT", "GORONTALO"
            ],
            datasets: [{
                label: 'Total Meninggal',
                data: [
                    <?php echo $total['total_jumlah']; ?>,
                    <?php echo $total1['total_jumlah1']; ?>,
                    <?php echo $total2['total_jumlah2']; ?>,
                    <?php echo $total3['total_jumlah3']; ?>,
                    <?php echo $total4['total_jumlah4']; ?>,
                    <?php echo $total5['total_jumlah5']; ?>,
                    <?php echo $total6['total_jumlah6']; ?>,
                    <?php echo $total7['total_jumlah7']; ?>,
                    <?php echo $total8['total_jumlah8']; ?>,
                    <?php echo $total9['total_jumlah9']; ?>,
                    <?php echo $total10['total_jumlah10']; ?>,
                    <?php echo $total11['total_jumlah11']; ?>,
                    <?php echo $total12['total_jumlah12']; ?>,
                    <?php echo $total13['total_jumlah13']; ?>,
                    <?php echo $total14['total_jumlah14']; ?>,
                    <?php echo $total15['total_jumlah15']; ?>,
                    <?php echo $total16['total_jumlah16']; ?>,
                    <?php echo $total17['total_jumlah17']; ?>,
                    <?php echo $total18['total_jumlah18']; ?>,
                    <?php echo $total19['total_jumlah19']; ?>,
                    <?php echo $total20['total_jumlah20']; ?>,
                    <?php echo $total21['total_jumlah21']; ?>,
                    <?php echo $total22['total_jumlah22']; ?>,
                    <?php echo $total23['total_jumlah23']; ?>,
                    <?php echo $total24['total_jumlah24']; ?>,
                    <?php echo $total25['total_jumlah25']; ?>,
                    <?php echo $total26['total_jumlah26']; ?>,
                    <?php echo $total27['total_jumlah27']; ?>,
                    <?php echo $total28['total_jumlah28']; ?>,
                    <?php echo $total29['total_jumlah29']; ?>,
                    <?php echo $total30['total_jumlah30']; ?>,
                    <?php echo $total31['total_jumlah31']; ?>,
                    <?php echo $total32['total_jumlah32']; ?>

                ],
                borderColor: [
                    'rgba(128, 0, 0, 1)'

                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
    <script>
    var xValues = ["Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
    var yValues = [<?= $mar[0]; ?>, <?= $apr[0]; ?>, <?= $may[0]; ?>, <?= $jun[0]; ?>, <?= $jul[0]; ?>,
        <?= $agu[0]; ?>, <?= $sep[0]; ?>, <?= $okt[0]; ?>
    ];

    new Chart("myChart1", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: 'Total Kematian',
                borderColor: "rgba(128, 0, 0, 1)",
                data: yValues
            }]
        }
    });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>