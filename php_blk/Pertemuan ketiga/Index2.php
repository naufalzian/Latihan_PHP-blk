<?php

// Array assosative

/*
objective di javascript
let siswa={
    nama ="Naufal"
    alamat= "Kosambi 2"
    umur= 23 Tahun
}
*/

$siswa=[
    "nama" => "naufal zian andhika", //key value pair
    "alamat" => "dusun kosambi 2",
    "umur" => 23 
];
echo $siswa["nama"], "<br>";
echo $siswa["alamat"], "<br>";
echo $siswa["umur"];

$arr = [
   [
     "nama" => "Asep Balon",
     "pekerjaan" => "Teknisi Mobil",
     "alamat" => "cilamaya"
   ],
   [
    "nama" => "sigit rendang",
    "pekerjaan" => "supir di arab",
    "alamat" => "pancawati"
   ],
   [
    "nama" => "ujang galon",
     "pekerjaan" => "tambal ban",
     "alamat" => "dawuan"
   ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($arr as $a) : ?>
        <ul>
             <li> Nama : <?php echo $a ["nama"] ?></li>
             <li> Nama : <?php echo $a ["pekerjaan"] ?></li>
             <li> Nama : <?php echo $a ["alamat"] ?></li>
        
            </ul>
            <?php endforeach ?>
</body>
</html>
