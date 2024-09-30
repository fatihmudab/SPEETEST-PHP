<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Angka</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="name" placeholder="Masukan Teks">
    <button type="submit">Cek Teks</button>
    </form> 

        <?php
        if($_SERVER ['REQUEST_METHOD'] == "POST"){
            $nama = $_POST ['name'];
            $angka = preg_replace('/\D/', '', $nama);
            if ($angka !== '') {
                echo "Teks mengandung angka: $angka";
            } else {
                echo "Teks tidak mengandung angka.";
            }   
        }
        ?>

    </body>
</html>
