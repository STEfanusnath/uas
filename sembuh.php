<?php
$kaloripermakan= 2500;
$totalmakanperhari=[3, 2, 2, 3, 3, 2, 1];

$jumlahkaloriperhari = array_sum($totalmakanperhari) *$kaloripermakan;
$jumlahkaloriperminggu = $jumlahkaloriperhari * 7;

$waktuharianistirahat = [5, 6, 8, 8, 5, 6, 4];
$jumlahistirahat1minggu =array_sum($waktuharianistirahat);

echo "jumlah kalori perhari: $jumlahkaloriperhari kalori<br>";
echo "jumlah kalori perminggu: $jumlahkaloriperminggu kalori<br>";
echo "waktu istirahat per hari: " . implode(" jam, ", $waktuharianistirahat) . " jam<br>" ;
echo "jumlah waktu istirahat per minggu: $jumlahistirahat1minggu jam<br>";

if ($jumlahkaloriperminggu >= 15000 && $jumlahistirahat1minggu >= 56) {
    echo "Fu akhirnya sembuhhhhh!!!!.<br>";
} else 
    echo "Telah kami putuskan dengan banyak pertimbangan Fu masih sakit dan tidak terselamatkan :(";
?>