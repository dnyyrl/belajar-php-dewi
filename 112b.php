
<?php
// jika senin - selasa - rabu maka, mengenakan seragam osis
// jika kamis, mengenakan seragam batik
// jika jum'at, mengenakan seragam olahraga
// jika sabtu, mengenakan seragam pramuka

$hari = "selasa";
 if($hari== "senin" || $hari == "selasa" || $hari == "rabu")
 {
    echo "$hari mengenakan seragam osis";
 }

 else if ($hari == "kamis") 
 {
    echo "$hari mengenakan seragam batik";
 }
 else if ($hari == "jum'at") 
 {
    echo "$hari mengenakan seragam olahraga";
 }
 else if ($hari == "sabtu") 
 {
    echo "$hari mengenakan seragam pramuka";
 }
 else {
    echo "$hari libur bos.....";
}

$jam > date("10:00"); //lebih dari jam 10
$jam < date("08:00"); //kurang dari jam
?>
