<?php
    $cities = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija']
    ];
    $cities['Londonas'] = [8.6, 43, 'Anglija'];
    $years = 1773;
    if ($years >= $cities['Vasingtonas'][1]){
        echo 'Vašingtonas yra JAV sostinė';
    } elseif($years == 1774){
        echo 'JAV sostinė vis dar Filadefijoje';
    } else {
        echo 'Liko '. ($cities['Vasingtonas'][1] - $years). ' iki Vašingtono įkūrimo';
    }
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php05</title>
</head>

<body>
    <ul>
        <?php
            echo '<li> '. 'Gyventojų skaičius: '. $cities['Londonas'][0]. '</li>'.
                '<li>'. 'Įkurtas: '. $cities['Londonas'][1]. '</li>'.
                '<li>'. 'Šalis: '. $cities['Londonas'][2]. '</li>';
        ?>
    </ul>
</body>
</html>
