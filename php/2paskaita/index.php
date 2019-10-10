<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    print_r($cities);
    $cities2 = [
        'Tokijas' => 13.6,
        'Vasingtonas' => 0.3,
        'Maskva' => 11.5
    ];
    $cities2['Londonas'] = 8.6;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>

<body>
    <ul>
        <li><?php echo $cities[1]; ?></li>
    </ul>
    <ul>
        <?php
            echo 'Gyventojų skaičius: 13.6 mln.'
        ?>
    </ul>
</body>
