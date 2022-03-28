<?php
require_once "class_dispenser.php";
$pepsi = new Dispenser();
echo "Nama Minuman : ".$pepsi -> nama = 'Pepsi';
echo '</br>';
echo "Volume Botol Minuman : ".$pepsi -> isi(1000)." Ml";
echo '</br>';
echo "1 Gelas Seharga : ".$pepsi -> harga('Rp.1500');
echo '</br>';
echo "Jamal Membeli 1 Gelas air pepsi dengan Harga ".$pepsi -> harga('Rp.1500')." dengan volume gelas sebesar ".$pepsi -> volG(250)." Ml";
echo '</br>';
echo "Sisa Volume botol minuman Pepsi sebesar : ".$pepsi -> isi(1000) - $pepsi -> volG(250). " Ml";

?>