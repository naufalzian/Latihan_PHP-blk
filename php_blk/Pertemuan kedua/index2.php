<?php

// built in function untuk manipulasi string 

// explode, implode, strlen, strcmp

// strlen => mengetahui panjang string
echo strlen("Hello World"), "<br>";
echo strlen("Selamat datang di BLK Karawang"), "<br>";

// str_word_count => menghitung jumlah kata
echo str_word_count("Lorem ipsum dolor, sit amet consectetur elit.
                     Fugit pariatur deleniti recusandae voluptate
                     commodi mollitia  quaerat voluptates nesciunt
                     temporibus perspiciatis! Eveniet natus earum
                     est aperiam sint eum dicta libero official!"), "<br>"
 
 // strcmp => membandingkan 2 buah string/kata
 
 $kata1 = "katak";
 $kata2 = "katak";

 if (strcmp($kata1, $kata2) !== 0) {
    echo "$kata1 tidak sama dengan $kata2",
 }else{
    echo "$kata1 sama dengan $kata2";
 }


 // explode => memecah string
 echo "<br>"
 print_r (explode("-", "IKAN-ASIN-JAMBAL-ROTI-ENAK-BANGET-JIRR", 0));
 print_r (explode(",", "Taopik, Faisal, Ryan"));


 // implode = menggabungkan array menjadi string
 $str = array("Selamat", "DATANG" "di", "Pemrogaman", "PHP");
 echo implode(" ", $str), "<br>";
 
 // strtolower => merubah huruf besar jadi hurf kecil
 echo strotolower("HARAP TENANG! SEDANG BELAJAR"), "<br>";

 // strtoupper => merubah huruf kecil jadi huruf besar
 echo strtoupper("ada udang dibalik gnadu"), "<br>"

 // substr => mengambil beberapa karakter didalam string 
 $kata3 = "pelatihan";
 echo substr($kata3, 2, 5), "<br>";
 echo substr($kata3, -7, 5); //ngambil dari belakang

 // LATIHAN

 
 Misal ada beberapa nama barang sebagai berikut:

 indomie
 lifebuoy
 sarimie
 floridina
 frutang
 
 Ubahlah nama-nama barang tersebut menjadi sebuah kode barang 
 menggunakan built in function di PHP 

 contoh : IND-001, LIF-002 SAR-003 


 
 ?>

 