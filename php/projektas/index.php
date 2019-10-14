<?php
    require_once 'lib/simple_html_dom.php';
    $partija = "Laisvės partija";
    $i = 0;
    $htmlPenkiolikaMin = file_get_html('https://www.15min.lt/naujienos/aktualu/lietuva');
    foreach ($htmlPenkiolikaMin->find('div[class=item-data]') as $elementPenkiolikaMin) {
            $linksPenkiolikaMin = $elementPenkiolikaMin->find('a');
            foreach ($linksPenkiolikaMin as $linkPenkiolikaMin) {
                $articleLinkPenkiolikaMin = $linkPenkiolikaMin->href;
                $articlePostPenkiolikaMin = file_get_html($articleLinkPenkiolikaMin);
                if (stripos($articlePostPenkiolikaMin, "Laisvės partija")) {
                $result = $i + 1;
                }
            }
        }
            echo $result;

    /**$htmlDelfi = file_get_html('https://www.delfi.lt/archive/');
    foreach ($htmlDelfi->find('h3[class=headline-title]') as $elementDelfi) {
            $linksDelfi = $elementDelfi->find('a');
            foreach ($linksDelfi as $linkDelfi) {
                $articleLinkDelfi = $linkDelfi->href;
                $articlePostDelfi = file_get_html($articleLinkDelfi);
                echo $articlePostDelfi -> plaintext;
            }
        }*/
?>
