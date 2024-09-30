<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Nama</title>
    <style>
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="name1">Nama Pertama:</label>
        <input type="text" id="name1" name="name1" placeholder="Masukkan nama pertama" required>

        <label for="name2">Nama Kedua:</label>
        <input type="text" id="name2" name="name2" placeholder="Masukkan nama kedua" required>

        <input type="submit" value="Bandingkan Nama">
    </form>

    <div class="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name1 = $_POST['name1'];
            $name2 = $_POST['name2'];

            $length1 = strlen($name1);
            $length2 = strlen($name2);

            if ($length1 > $length2) {
                $moreCharsName = $name1;
                $lessCharsName = $name2;
                $diff = $length1 - $length2;
            } else {
                $moreCharsName = $name2;
                $lessCharsName = $name1;
                $diff = $length2 - $length1;
            }

            echo "$moreCharsName memiliki jumlah karakter lebih banyak dari $lessCharsName: selisih $diff karakter.";
        }
        ?>
    </div>
</body>
</html>
