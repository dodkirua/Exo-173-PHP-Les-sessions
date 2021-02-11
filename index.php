<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>exo 173</title>

</head>
<?php
    if (isset($_POST['color'])){
        echo "<body style='background-color: ".$_POST['color']."'>";
    }
    else{
        ?>
        <body>
        <?php
        }
?>

<form action="index.php" method="post">
    <label for="select">Choisir une couleur</label>
    <select name="color" size="1" id="select">
        <option value="">--Veuillez choisir une couleur--</option>
        <option value="red">Rouge</option>
        <option value="blue">Bleue</option>
        <option value="green">Vert Mathias</option>
        <option value="black">Noir</option>
        <option value="white">Blanc</option>
    </select>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>