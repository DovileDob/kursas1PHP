<?php
    $temps = [4, 3, 9, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $result = 0;
    foreach ($temps as $temp) {
        $result = $result + $temp;
    };
    $avarage = $result/count($temps);
    echo 'Vidutinė temperatūra: '. round($avarage);
    rsort($temps);
    //$mostWarm = array_slice($temps, 0, 5);
    //$mostCold = array_slice($temps, -5, 5);
    echo (array_slice($temps, 0, 5));
?>
