<?php
    echo '<h3>2019/10/10 PHP3</h3>';

    define('MINSIZE', 'you will never change me');
    echo MINSIZE. '<br><br>';
//second code
    setcookie("name", time()+3600, "/","", 0);
    setcookie("age", "92", time()+3600, "/", "", 0);
?>
<html>
<head>
    <title>Failo skaitymas su php</title>
</head>
<body>
    <?php
//first code
        $filename = "text.txt";
        $file = fopen($filename, "r");

        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);
        fclose($file);
        echo "Failo dydis: $filesize B";
        echo "<pre>$filetext</pre>";

//second code
        if(isset($_COOKIE['name'])) {
            echo 'Welcome, '. $_COOKIE['name']. '<br>';
            echo 'You are '. $_COOKIE['age']. ' years old.';
        } else {
            echo 'Who are you';
        }
    ?>
</body>
</html>
