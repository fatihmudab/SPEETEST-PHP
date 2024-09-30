<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function cariData (){
        $data = [80, 90, 75, 100, 85, 100, 66];
        $cari = 100;

        $jumlahMuncul = array_count_values($data);
        $muncul = isset($jumlahMuncul [$cari]) ? $jumlahMuncul [$cari] : 0;
        echo "Jumlah Angka $cari = $muncul <br>";
        }
        cariData();
    ?>
</body>
</html>