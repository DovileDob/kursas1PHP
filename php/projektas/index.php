<?php
    require_once('lib/simple_html_dom.php');

    $htmlPenkiolikaMin = file_get_html('https://www.respublika.lt/lt/paieska/?key=Šimonytė&x=0&y=0');

//** bandžiau naudoti įvairius linkus (ir šiuo metu įkeltą ir paprastą https://www.15min.lt/paieska?q=Šimonytė) tam, kad gaučiau tokį patį rezultatą, jei tą linką reikėtų paleisti internete paprastai. Visais atvejais gaunu tą patį rezultatą: langą be paieškos rezultato.
   $result = $htmlPenkiolikaMin->find('div(class=search_results)');
    print_r($result);
?>
