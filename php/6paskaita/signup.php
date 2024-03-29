<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP kursas - Login forma</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            include_once 'header.php';
        ?>
        <section class="main-container">
            <div class="main-wrapper-signup">
                <h2>Sign Up</h2>
                <form class="signup-form" action="includes/signup.inc.php" method="post">
                    <input type="text" name="first" placeholder="First Name" />
                    <input type="text" name="last" placeholder="Last Name" />
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="uid" placeholder="Username" />
                    <input type="text" name="pwd" placeholder="Password" />
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </section>
        <?php
            include_once 'footer.php';
        ?>
