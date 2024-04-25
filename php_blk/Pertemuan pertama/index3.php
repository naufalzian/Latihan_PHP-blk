<?php 

// percabangan
// if
// if else
// if else.. if else
// switch

$angka = 23;

if ($angka % 2 === 0) {
    echo "$angka merupakan bilangan genap";
} else {
    echo "$angka merupakan bilangan ganjil";
}

// if else.. if else..
echo "<br>";

$nilai = 78;

if ($nilai > 85) {
    echo "Index nilai anda adalah A";
} else if ($nilai > 75 && $nilai <= 85) {
    echo "Index nilai anda adalah B";
} else if ($nilai > 60 && $nilai <= 75) {
    echo "Index nilai anda adalah C";
} else if ($nilai > 45 && $nilai <= 60) {
    echo "Index nilai anda adalah D";
} else {
    echo "Index nilai anda adalah E";
}

print "<br>";
// switch case

switch ($nilai) {
    case ($nilai > 85):
        echo "Index nilai anda adalah A";
        break;
    case ($nilai > 75 && $nilai <= 85):
        echo "Index nilai anda adalah B";
        break;
    case ($nilai > 60 && $nilai <= 75):
        echo "Index nilai anda adalah C";
        break;
    case ($nilai > 45 && $nilai <= 60):
        echo "Index nilai anda adalah D";
        break;
    case ($nilai <= 45):
        echo "Index nilai anda adalah E";
        break;
    defalut:
        echo "Nilai yang anda input tidak valid";
        break;      
}
?>