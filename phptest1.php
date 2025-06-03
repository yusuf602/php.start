<?php 
date_default_timezone_set('europe/amsterdam');

$uur = date('H');
$tijd = date('H:i');

$achtergrond ='img/morning.png';
$groet = "goeie morgen";

if ($uur>= 6 && $uur< 12) {
    $achtergrond = "img/morning.png";
    $groet = "goeie morgen";
} elseif ($uur >= 12 && $uur< 18) {
    $achtergrond = "img/afternoon.php";
    $groet = "goeie middag";
} elseif ($uur >= 18 && $uur <24) {
    $achtergrond = "img/evening.php";
    $groet = "goeie avnod";
} else{
    $achtergrond = "img/night.php";
    $uur = "goeie nacht";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dynamische Welkomstpagina</title>
    <style>
        body {
            background-image: url('<?php echo $achtergrond; ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 20%;
        }

        h1 {
            font-size: 3em;
            background-color: rgba(0,0,0,0.5);
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1><?php echo $groet; ?>!<br>Het is nu <?php echo $tijd; ?></h1>
</body>
</html>











