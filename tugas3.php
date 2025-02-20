
<?php


$jam = "16:35";
$ada_tugas = true;

if ($jam >= "15:30" && $jam <= "15:45") {
    echo "Jam $jam: Andi sedang dalam perjalanan pulang sekolah";
} elseif ($jam > "15:45" && $jam < "16:00") {
    echo "Jam $jam: Andi sedang mandi dan persiapan sholat";
}elseif ($jam >= "16:00" && $jam <= "16:30"){
    echo "$jam andi mengaji";
}elseif ($jam >= "16:30" && $jam < "18:00") { // Simulasi apakah Andi memiliki tugas sekolah
    if ($ada_tugas == true) {
        echo "Jam $jam: Andi sedang mengerjakan tugas sekolah dan menghafal dialog festival";
    } else {
        echo "Jam $jam: Andi sedang menghafal dialog festival";
    }
} elseif ($jam >= "18:00" && $jam < "18:30") { // Simulasi apakah ada tugas yang belum selesai
    if ($ada_tugas == false) {
        echo "Jam $jam: Andi makan malam bersama keluarga";
    } else {
        echo "Jam $jam: Andi sedang belanja bahan masakan dengan ibu";
    }
} elseif ($jam >= "18:30" && $jam <= "19:00") {
    echo "Jam $jam: Andi sedang mempersiapkan makan malam";
}elseif ($jam >= "19:00" && $jam <= "20:00") {
    echo "Jam $jam: Andi makan malam bersama keluarga";
} elseif ($jam >= "20:00" && $jam <= "20:30") {
    echo "Jam $jam: Andi sedang sholat Isya ";
} elseif ($jam >= "20:30" && $jam <= "21:00") {
    echo "Jam $jam: Andi sedang menghafalkan dialog festival seni";
} elseif ($jam >= "21:00" && $jam <= "21:30") {
    echo "Jam $jam: Andi sedang chatting dengan Raya untuk persiapan festival seni";
} elseif ($jam >= "21:30" && $jam <= "22:00") {
    echo "Jam $jam: Andi sedang mengobrol bersama keluarga sebelum tidur";
} elseif ($jam >= "22:00" && $jam <= "04:00") {
    echo "Jam $jam: Andi sedang tidur malam";
} elseif ($jam == "04:00"){
    echo "jam $jam: andi bangun tidur";
} 
else {
    echo "Jam $jam: Waktu tidak valid atau di luar jadwal Andi";
}
// else if ($jam >= "15:45" && $jam <= "16:00")
// {
//     echo "$jam andi mandi dan bersiap untuk ngaji";
// } 
// else if ($jam >= "16:00" && $jam <= "16:30")
// {
//     echo "$jam andi mengaji";
// }
// else if ($jam >= "16:30" && $jam <= "18:30")
// {
//     echo "$jam andi mengerjakan tugas sekolah";
// }  
// else if ($jam >= "18:30" && $jam <= "19:00")
// {
//     echo "$jam andi membantu ibu membeli bumbu masakan sebelum makan malam";
// } 
// else if ($jam >= "19:00" && $jam <= "20:00")
// {
//     echo "$jam andi makan malam";
// } 
// else if ($jam >= "20:00" && $jam <= "20:30")
// {
//     echo "$jam andi sholat isya";
// } 
// else if ($jam >= "20:30" && $jam <= "21:00")
// {
//     echo "$jam andi menghafal dialog festival seni";
// } 
// else if ($jam >= "21:00" && $jam <= "21:30")
// {
//     echo "$jam andi chatting dengan raya untuk persiapan festival seni";
// } 
// else if ($jam >= "21:30" && $?jam <= "22:00")
// {
//     echo "$jam andi mengobrol bersama keluarga";
// } 
// else if ($jam >= "22:00")
// {
//     echo "$jam andi tidur";
// } 
// else if ($jam == "04:00")
// {
//     echo "$jam andi bangun tidur";
// } 

?>
    