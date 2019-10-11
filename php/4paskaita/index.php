<?php
    echo '<h3>2019/10/11 PHP4</h3>';



    class Car {
        public $bakas;

        public function degaluKiekis($litrai){
            $this -> bakas += $litrai;
            return $this;
        }

        public function atstumas($distancija){
            $km = $distancija;
            $litrai = $km * 0.05;
            $this -> bakas -= $litrai;
            return $this;
        }
    }

    $suzuki = new Car();

    $bakas = $suzuki -> degaluKiekis(10) -> atstumas(40) -> bakas;
    echo 'Bake bus likę: '. $bakas. 'L.';
    echo '<br><br>';

    echo 'Today is: '. date('l, F j, Y');
    echo '<br>';

    $kalėdos2018 = strtotime(' Dec 25, 2019');
    echo 'This year Christmas will be: '. date('l, F j, Y', $kalėdos2018). '<br>';


    $data1 = new DateTime();
    $data2 = new DateTime();

    $losangeles = new DateTimeZone('America/Los_Angeles');
    $vilnius = new DateTimeZone('Europe/Vilnius');

    $data1 -> setTimezone($losangeles);
    $data2 -> setTimezone($vilnius);

    echo 'Time in Los Angels: '. $data1 -> format('g:ia, l, F j, Y'). '<br>';
    echo 'Time in Vilnius: '. $data1 -> format('g:ia, l, F j, Y'). '<br>';
?>

<style>
    h3 {
        text-align: center;
    }
</style>
