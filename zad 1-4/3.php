<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #a5d8ff;
        }

        td{
            height: 5px;
            width: 5px;
            padding: 0px;
        }
        .bialy { background-color: white; }
        .czerwony { background-color: red; }
        .zielony { background-color: green; }
    </style>
</head>
<body>
<?php
echo '<table>';

$wysokosc = 40;
$szerokosc = 60;

for($i = 0; $i < $wysokosc; $i++){
    echo '<tr>';

    $klasa = ($i < $wysokosc / 2) ? 'bialy' : 'czerwony';

    for($j = 0; $j < $szerokosc; $j++){
        echo '<td class="'.$klasa.'"></td>';
    }

    echo '</tr>';
}

echo '</table>';

echo '<table>';

$wysokosc = 40;
$szerokosc = 60;

for($i = 0; $i < $wysokosc; $i++){
    echo '<tr>';

    for($j = 0; $j < $szerokosc; $j++){

        if($j < $szerokosc / 3){
            $klasa = 'zielony';
        } elseif($j < 2 * $szerokosc / 3){
            $klasa = 'bialy';
        } else {
            $klasa = 'czerwony';
        }

        echo '<td class="'.$klasa.'"></td>';
    }

    echo '</tr>';
}

echo '</table>';
?>
<a href="1h.html">home</a>
</body>
</html>
