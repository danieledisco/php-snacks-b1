<?php

$tappa = [
    [
        'home' => 'Pinerolo',
        'guest' => 'Mondovì',
        'rate_home' => 60,
        'rate_guest' => 55
    ],
    [
        'home' => 'Fossano',
        'guest' => 'Cavalermaggiorte',
        'rate_home' => 40,
        'rate_guest' => 35
    ],
    [
        'home' => 'Chivasso',
        'guest' => 'Sangro',
        'rate_home' => 33,
        'rate_guest' => 88
    ],
    [
        'home' => 'Susa',
        'guest' => 'Giaveno',
        'rate_home' => 30,
        'rate_guest' => 90
    ],
    [
        'home' => 'Ala di stura',
        'guest' => 'Barriera di milano',
        'rate_home' => 12,
        'rate_guest' => 120
    ],
    [
        'home' => 'Cit Turin',
        'guest' => 'Quadrilatero Romano',
        'rate_home' => 160,
        'rate_guest' => 58
    ]

];

// Test puro php
//
// for ($i = 0; $i < count($tappa); $i++) {
//    echo "<pre>", $tappa[$i]['home'] . ' - ' . $tappa[$i]['guest'] . ' | ' . $tappa[$i]['rate_home'] . '-' . $tappa[$i]['rate_guest'], "</pre>";
// }












?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>

<body>
    <h1>Snack 1</h1>
    <?php
    for ($i = 0; $i < count($tappa); $i++) {
    ?>
        <span><?php echo $tappa[$i]['home'] . ' - ' ?></span>
        <span><?php echo $tappa[$i]['guest'] . ' | ' ?></span>
        <span><?php echo $tappa[$i]['rate_home'] . '-' ?></span><span><?php echo $tappa[$i]['rate_guest'] ?></span>
        <p>

        </p>
    <?php } ?>
    <h1>Fine Snack 1</h1>
</body>

</html>