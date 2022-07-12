<?php
include 'koneksi.php';
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

    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
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
        <div class="row mb-1 mt-4">
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
        <div id=" maincounter-wrap" style="margin-top:15px">
            <h1>Total Kasus Positif:</h1>
            <div class="maincounter-number">
                <span style="color:#aaa">
                    <h4><?= number_format($jml[0]); ?></h4>
                </span>
            </div>
        </div>
        <div id="maincounter-wrap" style="margin-top:15px">
            <h1>Meninggal Dunia:</h1>
            <div class="maincounter-number" style="color: red ;">
                <span>
                    <h4><?= number_format($jml1[0]); ?></h4>
                </span>
            </div>
        </div>
        <div id="maincounter-wrap" style="margin-top:15px;">
            <h1>Sembuh:</h1>
            <div class="maincounter-number" style="color:#00FF7F ">
                <span>
                    <h4><?= number_format($jml2[0]); ?></h4>
                </span>
            </div>
        </div>
    </section>
    <section class="p-3" style="background-color: #DDDDDD;">
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h1 class="text-dark bg-white rounded-pill p-1">Data Sebaran Informasi Covid-19</h1>
                <h6><i>Berdasarkan Data Per 29 Oktober 2020</i></h6>
            </div>
        </div>
        <div class="row mb-5 mt-5">
            <div class="col-md-3 d-flex justify-content-center">

                <div class="card" style="width: 18rem; background-color: #87CEFA;">
                    <div class=" shadow-lg p-3 card-body rounded">
                        <h6 class="card-subtitle mb-2 text-bold text-primary bg-white rounded-pill p-1">Daily Cases</h6>
                        <p class="card-text"><?= number_format($jml3[0]); ?></p>
                        <span class="d-flex justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-clipboard-pulse" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Zm6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128L9.979 5.356Z" />
                            </svg>
                        </span>
                        <a href="harianPositif.php"><span>Lihat Data</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">

                <div class="card" style="width: 18rem; background-color: #FFD700;">
                    <div class=" shadow-lg p-3 card-body rounded">
                        <h6 class="card-subtitle mb-2 text-bold text-warning bg-white rounded-pill p-1">Active Cases
                        </h6>
                        <p class="card-text"><?= number_format($jml6[0]); ?></p>
                        <span class="d-flex justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z" />
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
                            </svg>
                        </span>
                        <a href="kasusAktif.php"><span>Lihat Data</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">

                <div class="card" style="width: 18rem;background-color: #B22222;">
                    <div class=" shadow-lg p-3 card-body rounded">
                        <h6 class="card-subtitle mb-2 text-bold text-danger bg-white rounded-pill p-1">Daily Casualties
                        </h6>
                        <p class="card-text"><?= number_format($jml4[0]); ?></p>
                        <span class="d-flex justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-emoji-dizzy-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM8 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                            </svg>
                        </span>
                        <a href="harianMeninggal.php"><span>Lihat Data</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">

                <div class="card" style="width: 18rem; background-color: #90EE90;">
                    <div class=" shadow-lg p-3 card-body rounded">
                        <h6 class="card-subtitle mb-2 text-bold text-success bg-white rounded-pill p-1">Daily Recovered
                        </h6>
                        <p class="card-text"><?= number_format($jml5[0]); ?></p>
                        <span class="d-flex justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
                            </svg>
                        </span>
                        <a href="harianSembuh.php"><span>Lihat Data</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3 mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="shadow-lg p-3 card-body rounded">
                        <canvas id="myChart" style="width:100%;">
                        </canvas>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="p-12">
        <footer class="text-black text-center p-3" style="height: 50%; width: 100%; background-color:#DDDDDD; ">
            <p>Created by <a href="https://satyawardhana.github.io/" class="text-black ">Satya Wardhana</a>
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
                label: 'Total Positif',
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
                    'rgba(106, 90, 205, 1)'

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>