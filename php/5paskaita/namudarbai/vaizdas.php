<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mokomes phpd</title>
</head>

<body>
    <h3>Mano namų darbai</h3>
    <ul>
        <?php foreach ($namuDarbas as $namųDarbai) : ?>
            <li>
                <?php if($namuDarbas->atlikta) : ?><strike><?= $namuDarbas->aprasas;?></strike>
                    <?php else: ?><?= $namuDarbas->aprasas; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
