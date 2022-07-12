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
    <section class="p-3" style="background-color:#FFD700;">
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h1 class="text-dark bg-white rounded-pill p-1">Data Sebaran Informasi Covid-19 <br>
                    <h4>Kasus Aktif</h4>
                </h1>
                <h6 style="color:#fff ;"><i>Berdasarkan Data Per 18 Maret 2020 - 29 Oktober 2020</i></h6>
            </div>
        </div>
        <hr>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Data Tanggal</td>
                    <td> <input type="date" name="data_tgl" class="form-control">
                    </td>
                    <td>Sampai Tanggal</td>
                    <td> <input type="date" name="sampai_tgl" class="form-control">
                    </td>
                    <td><input type="submit" class="btn btn-dark" name="submit" value="filter"></td>
                </tr>
            </table>
        </form>
        <?php
        include "koneksi.php";
        if (isset($_POST['submit'])) {
            $dt_tgl = $_POST['data_tgl'];
            $smp_tgl = $_POST['sampai_tgl'];
            echo " Berikut adalah Data Tanggal : " . $dt_tgl . " s/d " . $smp_tgl;
        }

        ?>
        <hr>
        <div style="overflow-x:auto;">
            <table width="100%" id="datatablesSimple" class="table table-striped table-hover">
                <thead class="table-info text-center">
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>ACEH</th>
                        <th>BALI</th>
                        <th>BANTEN</th>
                        <th>BABEL</th>
                        <th>BENGKULU</th>
                        <th>YOGYAKARTA</th>
                        <th>JAKARTA</th>
                        <th>JAMBI</th>
                        <th>JABAR</th>
                        <th>JATENG</th>
                        <th>JATIM</th>
                        <th>KALBAR</th>
                        <th>KALTIM</th>
                        <th>KALTENG</th>
                        <th>KALSEL</th>
                        <th>KALTARA</th>
                        <th>KEPRI</th>
                        <th>NTB</th>
                        <th>SUMSEL</th>
                        <th>SUMBAR</th>
                        <th>SULUT</th>
                        <th>SUMUT</th>
                        <th>SULTRA</th>
                        <th>SULSEL</th>
                        <th>SULTENG</th>
                        <th>RIAU</th>
                        <th>MALUT</th>
                        <th>MALUKU</th>
                        <th>PAPBAR</th>
                        <th>PAPUA</th>
                        <th>SULBAR</th>
                        <th>NTT</th>
                        <th>GORONTALO</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;

                    if (isset($_POST['submit'])) {
                        $dt_tgl = $_POST['data_tgl'];
                        $smp_tgl = $_POST['sampai_tgl'];

                        $filter = mysqli_query($db, "SELECT * FROM case_aktif WHERE Kasus_Aktif BETWEEN '$dt_tgl' AND '$smp_tgl' ");
                    } else {
                        $filter = mysqli_query($db, "SELECT * FROM `case_active`");
                    }

                    while ($row = $filter->fetch_array()) {
                    ?>

                    <tr class="text-center">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['Kasus_Aktif']; ?></td>
                        <td><?php echo $row['Aceh']; ?></td>
                        <td><?php echo $row['Bali']; ?></td>
                        <td><?php echo $row['Banten']; ?></td>
                        <td><?php echo $row['Babel']; ?></td>
                        <td><?php echo $row['Bengkulu']; ?></td>
                        <td><?php echo $row['DIY']; ?> </td>
                        <td><?php echo $row['Jakarta']; ?> </td>
                        <td><?php echo $row['Jambi']; ?></td>
                        <td><?php echo $row['Jabar']; ?> </td>
                        <td><?php echo $row['Jateng']; ?></td>
                        <td><?php echo $row['Jatim']; ?></td>
                        <td><?php echo $row['Kalbar']; ?> </td>
                        <td><?php echo $row['Kaltim']; ?></td>
                        <td><?php echo $row['Kalteng']; ?></td>
                        <td><?php echo $row['Kalsel']; ?></td>
                        <td><?php echo $row['Kaltara']; ?></td>
                        <td><?php echo $row['Kep_Riau']; ?></td>
                        <td><?php echo $row['NTB']; ?></td>
                        <td><?php echo $row['Sumsel']; ?> </td>
                        <td><?php echo $row['Sumbar']; ?></td>
                        <td><?php echo $row['Sulut']; ?> </td>
                        <td><?php echo $row['Sumut']; ?></td>
                        <td><?php echo $row['Sultra']; ?></td>
                        <td><?php echo $row['Sulsel']; ?></td>
                        <td><?php echo $row['Sulteng']; ?> </td>
                        <td><?php echo $row['Riau']; ?> </td>
                        <td><?php echo $row['Malut']; ?></td>
                        <td><?php echo $row['Maluku']; ?></td>
                        <td><?php echo $row['Papbar']; ?></td>
                        <td><?php echo $row['Papua']; ?></td>
                        <td><?php echo $row['Sulbar']; ?></td>
                        <td><?php echo $row['NTT']; ?></td>
                        <td><?php echo $row['Gorontalo']; ?></td>

                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="datatables-simple-demo.js"></script>
        <!-- <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>

</html>