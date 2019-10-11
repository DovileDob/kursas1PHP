<?php
    if(!isset($_POST['submit']) || empty($_POST['name']) || empty($_POST['surname'])){
?>

            <form action="<?php $_PHP_SELF; ?>" method="POST">
            Vardas: <input type="text" name="name">
            Pavardė: <input type="text" name="surname">
            <input type="submit" name="submit">
            </form>

<?php
    } else {
            $firstName = $_POST['name'];
            $lastName = $_POST['surname'];
            echo "Sveiki prisijungę: $firstName $lastName";
    }
?>
