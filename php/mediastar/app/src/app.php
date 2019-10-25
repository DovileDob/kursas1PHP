<?php
    if (isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($email) && !empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $to = "dovilke@gmail.com";
                $subject = "Nauja žinutė";
                $headers = "From: ". $email;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $zinute, $headers);
                echo "<script>alert('Dėkojame, jūsų žinutė gauta. Netrukus susisieksime.');</script>";
            }
        }

            include('db.php');
    }
