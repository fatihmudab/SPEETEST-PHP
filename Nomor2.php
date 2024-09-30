    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jam Lembur</title>
    </head>
    <body>

        <form action="" method="POST">
            <label for="datang">Jam Datang</label><br>
            <input type="number" name="datang" id="datang"><br>

            <label for="pulang">Jam Pulang</label><br>
            <input type="number" name="pulang" id="pulang"><br>

            <button type="submit" name="kirim">Hitung Kompensasi</button>
        </form>
        <?php
        if (isset ($_POST ['kirim'])) {
            $jamDatang = $_POST ['datang'];
            $jamPulang = $_POST ['pulang'];
            $totalJam = $jamPulang - $jamDatang ;

            $jamNormal = 8;
            $kompensasi = 0;

            $lembur = $totalJam - $jamNormal ;

            if ($lembur > 0){
                $kompensasi += 50000;

                if ($lembur > 1){
                    $kompensasi +=($lembur - 1) * 25000;
                }
            } 
            echo "Lama Kerja : ". ($totalJam);
            echo "<br>";
            echo "Jam Lebih : " .($lembur);
            echo "<br>";
            echo "Jumlah Kompensasi: Rp. ".number_format($kompensasi, 0, ',', '.');
        }

    
        
        ?>
    </body>
    </html>