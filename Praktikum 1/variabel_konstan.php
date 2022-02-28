<?php
// definisikan konstansta
define('PHI',3.14);
define('DBIDO','inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;
?>

<hr />
<?php
echo 'Nama data basenya : '.DBIDO;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>