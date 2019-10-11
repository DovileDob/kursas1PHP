<?php

//PHP 13 task
    class Person {
        public $name;
        public $surname;
        public function labas() {
            return 'Hello '. $this -> name. ' '. $this -> surname. '<br>';
        }
    }

    $Donald = new Person();
    $Melania = new Person();

    $Donald -> name = "Donald";
    $Donald -> surname = "Trump";

    $Melania -> name = "Melania";
    $Melania -> surname = "Trump";

    echo $Donald -> labas();
    echo $Melania -> labas();
    echo '<br><br>'
?>
&copy; <?php

//PHP 14 task
    function copyRightDate($year) {
            if ($year >= date('Y')) {
                echo date('Y');
            } else {
                echo $year. ' - '. date('Y');
            }
    }

    echo copyRightDate(1946);
?> All rights are not protected
