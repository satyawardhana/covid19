<?php
$dbhost = 'localhost';
$dbroot = 'root';
$dbpass = 'root';
$dbname = 'covid2';

$db = new mysqli($dbhost, $dbroot, $dbpass, $dbname);

if ($db->connect_error) {
    die("Koneksi Database Tidak Berhasil");
}

// <!-- REKAP TOTAL -->
$jumlahTotal = $db->query("SELECT Jumlah_Total_Positif_Kasus FROM `total`");
$jml = $jumlahTotal->fetch_array();
$jumlahKematian = $db->query("SELECT Jumlah_Kematian FROM `total`");
$jml1 = $jumlahKematian->fetch_array();
$jumlahSembuh = $db->query("SELECT Jumlah_Kasus_Sembuh FROM `total`");
$jml2 = $jumlahSembuh->fetch_array();
$jumlahHarian = $db->query("SELECT Jumlah_Kasus_Harian FROM `total`");
$jml3 = $jumlahHarian->fetch_array();
$harianMeninggal = $db->query("SELECT Jumlah_Kematian_Harian FROM `total`");
$jml4 = $harianMeninggal->fetch_array();
$harianSembuh = $db->query("SELECT Jumlah_Sembuh_Harian FROM `total`");
$jml5 = $harianSembuh->fetch_array();
$kasusAktif = $db->query("SELECT Jumlah_Kasus_Aktif FROM `total`");
$jml6 = $kasusAktif->fetch_array();



// <!-- TOTAL Kasus Positif (Index.php) -->
$jumlah = mysqli_query($db, "SELECT SUM(Aceh)  AS total_jumlah FROM total_positif_case ");
$total = mysqli_fetch_array($jumlah);

$jumlah1 = mysqli_query($db, "SELECT SUM(Bali)  AS total_jumlah1 FROM total_positif_case ");
$total1 = mysqli_fetch_array($jumlah1);

$jumlah2 = mysqli_query($db, "SELECT SUM(Banten)  AS total_jumlah2 FROM total_positif_case ");
$total2 = mysqli_fetch_array($jumlah2);

$jumlah3 = mysqli_query($db, "SELECT SUM(Babel)  AS total_jumlah3 FROM total_positif_case ");
$total3 = mysqli_fetch_array($jumlah3);

$jumlah4 = mysqli_query($db, "SELECT SUM(Bengkulu)  AS total_jumlah4 FROM total_positif_case ");
$total4 = mysqli_fetch_array($jumlah4);

$jumlah5 = mysqli_query($db, "SELECT SUM(DIY)  AS total_jumlah5 FROM total_positif_case ");
$total5 = mysqli_fetch_array($jumlah5);

$jumlah6 = mysqli_query($db, "SELECT SUM(Jakarta)  AS total_jumlah6 FROM total_positif_case ");
$total6 = mysqli_fetch_array($jumlah6);

$jumlah7 = mysqli_query($db, "SELECT SUM(Jambi)  AS total_jumlah7 FROM total_positif_case ");
$total7 = mysqli_fetch_array($jumlah7);

$jumlah8 = mysqli_query($db, "SELECT SUM(Jabar)  AS total_jumlah8 FROM total_positif_case ");
$total8 = mysqli_fetch_array($jumlah8);

$jumlah9 = mysqli_query($db, "SELECT SUM(Jateng)  AS total_jumlah9 FROM total_positif_case ");
$total9 = mysqli_fetch_array($jumlah9);

$jumlah10 = mysqli_query($db, "SELECT SUM(Jatim)  AS total_jumlah10 FROM total_positif_case ");
$total10 = mysqli_fetch_array($jumlah10);

$jumlah11 = mysqli_query($db, "SELECT SUM(Kalbar)  AS total_jumlah11 FROM total_positif_case ");
$total11 = mysqli_fetch_array($jumlah11);

$jumlah12 = mysqli_query($db, "SELECT SUM(Kaltim)  AS total_jumlah12 FROM total_positif_case ");
$total12 = mysqli_fetch_array($jumlah12);

$jumlah13 = mysqli_query($db, "SELECT SUM(Kalteng)  AS total_jumlah13 FROM total_positif_case ");
$total13 = mysqli_fetch_array($jumlah13);

$jumlah14 = mysqli_query($db, "SELECT SUM(Kalsel)  AS total_jumlah14 FROM total_positif_case ");
$total14 = mysqli_fetch_array($jumlah14);

$jumlah15 = mysqli_query($db, "SELECT SUM(Kaltara)  AS total_jumlah15 FROM total_positif_case ");
$total15 = mysqli_fetch_array($jumlah15);

$jumlah16 = mysqli_query($db, "SELECT SUM(Kep_Riau)  AS total_jumlah16 FROM total_positif_case ");
$total16 = mysqli_fetch_array($jumlah16);

$jumlah17 = mysqli_query($db, "SELECT SUM(NTB)  AS total_jumlah17 FROM total_positif_case ");
$total17 = mysqli_fetch_array($jumlah17);

$jumlah18 = mysqli_query($db, "SELECT SUM(Sumsel)  AS total_jumlah18 FROM total_positif_case ");
$total18 = mysqli_fetch_array($jumlah18);

$jumlah19 = mysqli_query($db, "SELECT SUM(Sumbar)  AS total_jumlah19 FROM total_positif_case ");
$total19 = mysqli_fetch_array($jumlah19);

$jumlah20 = mysqli_query($db, "SELECT SUM(Sulut)  AS total_jumlah20 FROM total_positif_case ");
$total20 = mysqli_fetch_array($jumlah20);

$jumlah21 = mysqli_query($db, "SELECT SUM(Sumut)  AS total_jumlah21 FROM total_positif_case ");
$total21 = mysqli_fetch_array($jumlah21);

$jumlah22 = mysqli_query($db, "SELECT SUM(Sultra)  AS total_jumlah22 FROM total_positif_case ");
$total22 = mysqli_fetch_array($jumlah22);

$jumlah23 = mysqli_query($db, "SELECT SUM(Sulsel)  AS total_jumlah23 FROM total_positif_case ");
$total23 = mysqli_fetch_array($jumlah23);

$jumlah24 = mysqli_query($db, "SELECT SUM(Sulteng)  AS total_jumlah24 FROM total_positif_case ");
$total24 = mysqli_fetch_array($jumlah24);

$jumlah25 = mysqli_query($db, "SELECT SUM(Riau)  AS total_jumlah25 FROM total_positif_case ");
$total25 = mysqli_fetch_array($jumlah25);

$jumlah26 = mysqli_query($db, "SELECT SUM(Malut)  AS total_jumlah26 FROM total_positif_case ");
$total26 = mysqli_fetch_array($jumlah26);

$jumlah27 = mysqli_query($db, "SELECT SUM(Maluku)  AS total_jumlah27 FROM total_positif_case ");
$total27 = mysqli_fetch_array($jumlah27);

$jumlah28 = mysqli_query($db, "SELECT SUM(Papbar)  AS total_jumlah28 FROM total_positif_case ");
$total28 = mysqli_fetch_array($jumlah28);

$jumlah29 = mysqli_query($db, "SELECT SUM(Papua)  AS total_jumlah29 FROM total_positif_case ");
$total29 = mysqli_fetch_array($jumlah29);

$jumlah30 = mysqli_query($db, "SELECT SUM(Sulbar)  AS total_jumlah30 FROM total_positif_case ");
$total30 = mysqli_fetch_array($jumlah30);

$jumlah31 = mysqli_query($db, "SELECT SUM(NTT)  AS total_jumlah31 FROM total_positif_case ");
$total31 = mysqli_fetch_array($jumlah31);

$jumlah32 = mysqli_query($db, "SELECT SUM(Gorontalo)  AS total_jumlah32 FROM total_positif_case ");
$total32 = mysqli_fetch_array($jumlah32);


// <!-- TOTAL MENINGGAL DUNIA (kasusMeninggal.php) -->
$maret = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-03-18' AND '2020-03-31'");
$mar = mysqli_fetch_array($maret);
$april = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-04-01' AND '2020-04-30'");
$apr = mysqli_fetch_array($april);
$mei = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-05-01' AND '2020-05-31'");
$may = mysqli_fetch_array($mei);
$juni = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-06-01' AND '2020-06-30'");
$jun = mysqli_fetch_array($juni);
$juli = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-07-01' AND '2020-07-31'");
$jul = mysqli_fetch_array($juli);
$agustus = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-08-01' AND '2020-08-31'");
$agu = mysqli_fetch_array($agustus);
$september = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-09-01' AND '2020-09-30'");
$sep = mysqli_fetch_array($september);
$oktober = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_casualties` WHERE Meninggal_Dunia BETWEEN '2020-10-01' AND '2020-10-29'");
$okt = mysqli_fetch_array($oktober);


// <!-- TOTAL KESEMBUHAN (kasusSembuh.php) -->
$maret = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-03-18' AND '2020-03-31'");
$mar1 = mysqli_fetch_array($maret);
$april = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-04-01' AND '2020-04-30'");
$apr1 = mysqli_fetch_array($april);
$mei = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-05-01' AND '2020-05-31'");
$may1 = mysqli_fetch_array($mei);
$juni = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-06-01' AND '2020-06-30'");
$jun1 = mysqli_fetch_array($juni);
$juli = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-07-01' AND '2020-07-31'");
$jul1 = mysqli_fetch_array($juli);
$agustus = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-08-01' AND '2020-08-31'");
$agu1 = mysqli_fetch_array($agustus);
$september = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-09-01' AND '2020-09-30'");
$sep1 = mysqli_fetch_array($september);
$oktober = mysqli_query($db, "SELECT SUM(Aceh+Bali+Banten+Babel+Bengkulu+DIY+Jakarta+Jambi+Jabar+Jateng+Jatim+Kalbar+Kaltim+Kalteng+Kalsel+Kaltara+Kep_Riau+NTB+NTT+Sumsel+Sumbar+Sulut+Sumut+Sultra+Sulsel+Sulteng+Sulbar+Lampung+Riau+Malut+Maluku+Papbar+Papua+Gorontalo) FROM `total_recovered_case` WHERE Sembuh BETWEEN '2020-10-01' AND '2020-10-29'");
$okt1 = mysqli_fetch_array($oktober);