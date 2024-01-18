<?php
include("./oeuvres.php");

if(!isset($_GET["id"])){
    echo "<h2>no id sent ...</h2> "; 
    return;
}

$id = $_GET["id"];
$index = $id -1;

if(count($oeuvres) < $id){
    echo "<h2>id trop grand ...</h2> "; 
    echo "<a href='./'>Home</a>"; 
    return;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

<header>

    <?php require_once(__DIR__ . '/header.php'); ?>

</header>

<main>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$index]['img_url'];?>" alt="<?php echo $oeuvres[$index]['description']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres [$index]['titre']; ?></h1>
            <p><?php echo $oeuvres [$index]['description'];?></p>
            <p><?php echo $oeuvres [$index]['description-complete'];?>
            </p>
        </div>
    </article>

</main>

<footer>
    
    <?php require_once(__DIR__ . '/footer.php'); ?>

</footer>

</body>
</html>