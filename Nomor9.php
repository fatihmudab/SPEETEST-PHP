
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <h1>Masukan Uang</h1>
            <div>
                <input type="number" name="inputuang" placeholder="masukan uang">
            </div>
            <div>
                <input type="submit" value="cari pecahan">
            </div>
    
            <div class="hasil">
            <?php
    $uang = @$_POST['inputuang'];
    $pecahan = [100000,50000, 20000, 10000, 5000, 2000, 1000, 500,200,100];
    $hasil = [];
    
    foreach ($pecahan as $nilai) {
        $hasil[$nilai] = intdiv($uang, $nilai);
        $uang %= $nilai;
    }
    
    echo "<br>";
    echo "<br>";
    echo "Lembar Rupiah";
    echo "<br>";
    
    foreach ($hasil as $nilai => $lembar) {
        echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
    }
    
    ?>
            </div>
        </form>
    </body>
    </html>
    
