<?php
function umur() {
    $usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    
    $jumlahAnak = 0;
    $jumlahDewasa = 0;

    
    foreach ($usia as $age) {
        
        if ($age < 17) {
            $jumlahAnak++;
        } else {
           
            $jumlahDewasa++;
        }
    }

    echo "List Usia :" . implode(", ", $usia). "<br>";
    echo "Jumlah kategori dewasa: $jumlahDewasa<br>";
    echo "Jumlah Kategori Anak-Anak: $jumlahAnak<br>";

 
    return [
        'anak' => $jumlahAnak,
        'dewasa' => $jumlahDewasa
    ];
}
$hasil = umur();

?>
