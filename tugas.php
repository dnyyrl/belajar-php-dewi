<html>
<head>
    <title>
        Skenario Pertama
    </title>

    <style>
        h1 {
            color: blue;
        }
    </style>
<head>
<body>
     <h1>Skenario Pertama</h1>
     <br>
     <?php
     $nilai = 89;
     
     if($nilai <= 100 && $nilai >=90) {
        echo "$nilai = A";
    }else if ($nilai <= 89 && $nilai >= 80) {
        echo "$nilai = B";
    }else if ($nilai <= 79 && $nilai >= 70) {
        echo "$nilai = C";
    }else if ($nilai <= 69 && $nilai >= 0) {
        echo "$nilai = D";
    }else {
        echo "nilai wajib di antara 0 - 100";
    }
    ?>
</body>
</html>