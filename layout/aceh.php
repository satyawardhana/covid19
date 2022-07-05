<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h3></h3>
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Active Cases
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="aceh.php">Aceh</a></li>
                <li><a class="dropdown-item" href="bali.php">Bali</a></li>
                <li><a class="dropdown-item" href="banten.php">Banten</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kasus Harian</th>
                            <th scope="col">Aceh</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        // $mysqli = new mysqli("localhost", "root", "", "covid");
                        // $query = "";
                        $tampil = $db->query("SELECT * FROM totalpositivescases");
                        $no = 1;
                        while ($t = $tampil->fetch_array()) {
                            echo "<tr>
            <td>$no</td>
            <td>$t[Total_Kasus]</td>
            <td>$t[Aceh]</td>
            </tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <canvas id="myChart" style="width:100%;max-width:700px;">
                </canvas>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script>
        var xValues = ["Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
        var yValues = [55, 49, 44, 24, 15, 30, 23, 26];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#F4E06D",
            "#C499BA",
            "#3A5BA0"
        ];
        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "World Wide Wine Production"
                }
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>