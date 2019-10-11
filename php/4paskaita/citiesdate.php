<?php

    $data1 = new DateTime();
    $data2 = new DateTime();

    $nairobi = new DateTimeZone('Africa/Nairobi');
    $manila = new DateTimeZone('Asia/Manila');

    $data1 -> setTimezone($nairobi);
    $data2 -> setTimezone($manila);

    echo 'Time in Nairobi: '. $data1 -> format('g:ia, l, F j, Y'). '<br>';
    echo 'Time in Manila: '. $data2 -> format('g:ia, l, F j, Y'). '<br>';

?>
