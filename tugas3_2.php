<?php
$bungasetahun = 12.5;
$tabunganawal = 150000;

echo "Tabungan Awal =  Rp $tabunganawal<br>";
echo "Bunga Setahun = $bungasetahun % <br>";
echo "Total Tabungan Setahun = .... ? <br>";

$bunga = ($bungasetahun / 100) * $tabunganawal;
$tabunagntotal = $tabunganawal + $bunga;
echo "Jawaban : Rp $tabunagntotal";
?>