

    <?php
    function rectSpace($rectLength, $rectWidth) {
            $multi = $rectLength * $rectWidth;
            return $multi;
            }
    if(!isset($_POST['submit']) || empty($_POST['length']) || empty($_POST['width'])) {
            ?><form action="<?php $_PHP_SELF; ?>" method="POST">
            Plotis: <input type="text" name="width">
            <br>
            lgis: <input type="text" name="length">
            <br>
            <input type="submit">
            </form> <?php
    } else {
            $rectLength = $_POST["length"];
            $rectWidth = $_POST["width"];
            echo 'Stačiakampio plotas: '. rectSpace($rectLength, $rectWidth). '<br>';
    }
?>
