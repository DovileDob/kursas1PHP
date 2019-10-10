<?php
    echo '<h1>Ate</h1>';
?>

<?= 'Aš vėl čia'; ?>

<?php
    $name = 'Tomas';
    $_amzius = 55;
    echo $name. ' '. $_amzius;
?>

<?php
    $country = 'Lietuva';
    $city = 'Vilnius';
    $population = 574221;
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>amazing</title>
</head>
<body>
    <ul>
        <li><?php echo $country; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $population; ?></li>
    </ul>
</body>
</html>

<?= $city. ' - '. ' Lietuvos sostinė'. '<br>'; ?>
<?= $city. " ir ". $country. " sparčiai auga". "<br>"; ?>

<?php
    $x = 10;
    $y = 7;
    $sumresult = $x + $y;
    //$minusresult = $x - $y;
    //$multiresult = $x * $y;
    //$diviresult = $x/$y;
    //$percent = $x % $y;
    echo $x. ' + '. $y. ' = '. $sumresult. '<br>'/*. $x. ' - '. $y. ' = '. $minusresult. '<br>'. $x. ' * '. $y. ' = '. $multiresult. '<br>'. $x. ' / '. $y. ' = '. $diviresult. '<br>'. $x. ' % '. $y. ' = '. $percent. '<br>'*/;
?>

<?php $temp = 36;
    if ($temp < -35 || $temp > 35) {
        echo 'Turbūt kalbame ne apie Lietuvos orus';
    }  elseif ($temp < 0){
        echo 'Ar vis dar žiema';
    }  elseif ($temp < 10) {
        echo 'Kada gi ateis pavasaris?';
    } elseif ($temp >= 10 && $temp < 20) {
        echo 'Pagaliau pavasaris';
    } elseif ($temp >= 20) {
        echo 'Gal jau vasara?';
    }
?>
