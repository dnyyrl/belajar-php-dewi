<html>
    <head>
        <title>
            Skenario Kedua
        </title>
</head>
<body>
    <h1>Skenario Kedua</h1>
    <?php
    $jam = "25:00";

    if ($jam >= date(format: "00:00") && $jam <= date (format: "04:00")) {
        echo "$jam = Dini hari";
    } else if ($jam >= date (format: "04:00") && $jam<= date(format: "10:00")) {
        echo "$jam = Pagi";   
    }else if ($jam >= date (format: "10:00") && $jam<= date(format: "15:00")) {
        echo "$jam = Siang";
    }else if ($jam >= date (format: "15:00") && $jam<= date(format: "17:30")) {
        echo "$jam = Sore";
    }else if ($jam >= date (format: "17:30") && $jam<= date(format: "18:30")) {
        echo "$jam = Petang";
    }else if ($jam >= date (format: "04:00") && $jam<= date(format: "10:00")) {
        echo "$jam = Malam";
    }else {
        echo "$jam= Dunia Lain";
    }
    ?>
    </body>
    </html>