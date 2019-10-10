
<?php
    require_once 'lib/simple_html_dom.php';

    $source_url = 'https://www.alfa.lt/straipsnis/50403161/kauno-rajono-savivaldybe-nepritare-v-matijosaicio-pasiulymui-prijungti-dali-rajono-teritorijos';
    $html_source = file_get_html($source_url);
    echo '<br>';
    echo 'title: '. $title = $html_source->find('h1', 0)->plaintext;
    echo '<br>';
    echo 'information: '. $information = $html_source->find('p', 0)->plaintext;
?>
