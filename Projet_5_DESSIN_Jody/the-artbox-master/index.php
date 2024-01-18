<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

    <header>

        <?php require_once(__DIR__ . '/header.php'); ?>

    </header>

    <main>

        <?php require_once(__DIR__. '/oeuvres.php');?>

            <div id="liste-oeuvres">

            <?php foreach ($oeuvres as $oeuvre):?>

            <article class="oeuvre">
                    <a href="./oeuvre.php?id=<?= $oeuvre["id"]?>">  
                    <img src="<?php echo$oeuvre["img_url"]?>"> </a>
                    <h2><?php echo$oeuvre["titre"]?></h2>
                    <p class="description"><?php echo$oeuvre["description"]?></p>
                </a>
            </article>

            <?php endforeach ?> 
            
            </div>

    </main>

    <footer>

        <?php require_once(__DIR__ . '/footer.php'); ?>

    </footer>

</body>
</html>