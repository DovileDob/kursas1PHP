<?php
    require __DIR__. '/../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Star | About</title>
<!--  links for favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../app/photo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../app/photo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../app/photo/favicon-16x16.png">
    <link rel="manifest" href="../app/photo/site.webmanifest">
<!-- font awesome -->
    <script src="https://kit.fontawesome.com/875ba4f7bf.js" crossorigin="anonymous"></script>
<!-- css link -->
    <link href="../app/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
</head>

<body>
        <?php include('../app/views/header.php'); ?>

        <main id="main-section-of-page about-page-main">
            <article>
                <nav>
                <div class="container-about">
                <form id="contact" action="about.php" method="post">
                    <img id="about-logo" src="https://www.mediaskopas.lt/wp-content/uploads/2017/08/Mediaskopas-Ziniasklaidos-tyrimai.png" alt="Mediaskopas">
                    <h3>ŽINIASKLAIDOS IR STEBĖSENOS ĮMONĖ</h3>
                    <p>UAB „Mediaskopas“ - didžiausia Lietuvoje specializuota žiniasklaidos stebėsenos (monitoringo) ir žiniasklaidos analizės sprendimus teikianti bendrovė, dirbanti jau 20metų. Mūsų bendrove pasitiki ir siūlomomis paslaugomis naudojasi daugiau nei 200 Lietuvos ir užsienio verslo bei valstybės institucijų.</p>
                    <h4>Norėtumete gauti analizę ir statistiką susįjusią su jūsų įmone? Parašykite:</h4>
                    <p><input class="input-boxes" type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                    <p><textarea class="input-boxes" placeholder="Jūsų klausimai, pageidavimai..." name="message" required></textarea></p>
                    <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
                </form>
                </div>
                </nav>
                <nav>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d544.2267846990244!2d25.27791280410299!3d54.685821739299655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9411c4458557%3A0x6f3e110c62a54d64!2sJogailos%20g.%209%2C%20Vilnius%2001116!5e0!3m2!1sen!2slt!4v1571927275784!5m2!1sen!2slt" width="480" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </nav>
            </article>
        </main>

        <?php include('../app/views/footer.php'); ?>
</body>

</html>
