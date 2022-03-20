<?php


$styled = "";
if ($styled == "") {

    $message = 'veuillez cliquer sur au moins un bouton';

}

if (isset($_GET['style'])){
    $message ="";

    if (str_contains($_GET['previous'], $_GET['style'])){
        $styled = str_replace($_GET['style'], "", $_GET['previous']);
        //$styled = $_GET['previous'] -= $_GET['style'];
        var_dump($styled);
    } else{
        if  (str_contains($_GET['previous'], "style=color:black") && $_GET['style'] ==  "style=color:red") {
            $styled = str_replace($_GET['style'], "", $_GET['previous']);
            $styled .= "style=color:red";
        }
        elseif (str_contains($_GET['previous'], "style=color:red") && $_GET['style'] ==  "style=color:black") {
            $styled = str_replace($_GET['style'], "", $_GET['previous']);
            $styled .= "style=color:black";
        }
        else{
            $styled = $_GET['previous'] .= $_GET['style'];
            var_dump($styled);
        }      
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Question de style</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
        p.styled {

        <?= $styled ?>
        }
    </style>
</head>
<body>
<main>
    <h1>Question de style</h1>
    <p>Le script PHP styleur.php présente un texte précédé des liens gras, italique, souligné, rouge et noir. Adaptez le style du texte en fonction du lien cliqué par l'internaute.
        Attention, chaque style doit s'ajouter aux styles précédemment affectés sauf s'il a déjà été attribué, auquel cas il devra être retiré.</p>
    <p class="styled">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nam ullam tempore amet debitis velit praesentium.
        Debitis voluptatibus tenetur esse inventore odit odio sit et consequatur, ea blanditiis eligendi. Vitae!</p>
    <span><?= $message ?></span>
    <button class="more bold"><a  href="styleur.php?style=font-weight:bold;&previous=<?=$styled?>">Gras</a></button>
    <button class="more italic"><a href="styleur.php?style=font-style:italic;&previous=<?=$styled?>">Italique</a></button>
    <button class="more underline"><a  href="styleur.php?style=text-decoration:underline;&previous=<?=$styled?>">Souligné</a></button>
    <button class="more red"><a  href="styleur.php?style=color:red;&previous=<?=$styled?>">Rouge</a></button>
    <button class="more black"><a  href="styleur.php?style=color:black;&previous=<?=$styled?>">Noir</a></button>
</main>
<footer>
    <div>&copy; EPFC &dot; 2022</div>
</footer>
</body>
</html>