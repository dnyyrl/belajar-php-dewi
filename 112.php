<html>

<head>
   <title>
       Php belajar dewi
   </title>
   <style> 
   .abang {
    color: red;
   }
   </style>
</head>

<body>
   Hii
   <?php
    $walkes = 'bu yuniar';
   echo "<br> Perkenalkan aku dewi";
   echo '<br> Aku bersekolah di snapan';
   echo "<div class='abang'>Wali kelas: $walkes </div>";
        // ini komentar satu baris 
        # ini juga komentar satu baris
        /* ini komentar 
        bsris 
        berbaris */
   
    echo " $walkes ";
    $angka1 = 5;
    $angka2 = 10;
    $penjumlahan = $angka1 + $angka2;
    $x = $angka1 * $angka2;

    echo "<br> $angka1 + $angka2 = ", $penjumlahan;
    echo "<br>";
    echo $x ," = $angka1 x $angka2";
    echo "<br> $angka1<sup>$angka2</sup> = ";
    echo number_format(pow($angka1,$angka2), 0, '', '');
?> 
</body>

</html>