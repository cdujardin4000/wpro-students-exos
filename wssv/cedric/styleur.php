<?php

$style = [];

if (count($style) == 0) {

    $message = 'veuillez cliquer sur au moins un bouton';

} 

if (isset($_GET['style'])){

    $message ="";
    if ($_GET['style'] == 'font-weight:bold'){
        
        if (in_array('font-weight:bold', $style)){
            unset($style['font-weight:bold']);
        } else {
            array_push($style,'font-weight:bold');
        }
        var_dump($style);
        $styled = implode('; ', $style);
        var_dump($styled);
        
    } elseif ($_GET['style'] == 'font-style:italic'){
            
        if (in_array('font-style:italic', $style)){
            unset($style['font-style:italic']);
            
        } else {
            array_push($style, 'font-style:italic');
        }
        var_dump($style);
        $styled = implode('; ', $style);
        var_dump($styled);
    
    } elseif ($_GET['style'] == 'text-decoration:underline'){
        
        if (in_array('text-decoration:underline', $style)){
            unset($style['text-decoration:underline']);

        } else {
            array_push($style,'text-decoration:underline');
        }
        var_dump($style);
        $styled = implode('; ', $style);
        var_dump($styled);
    
    } elseif ($_GET['style'] == 'color:red'){
        
        if (in_array('color:red', $style)){
            unset($style['color:red']);
        } else {
            array_push($style,'color:red');
        }
        var_dump($style);
        $styled = implode('; ', $style);
        var_dump($styled);
    
    } elseif ($_GET['style'] == 'color:black'){
        
        if (in_array('color:black', $style)){
            unset($style['color:black']);
        } else {
            array_push($style,'color:black');
        }
        var_dump($style);
        $styled = implode('; ', $style);
        var_dump($styled);
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
                
                <?= $styled = implode('; ', $style)?>
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
        <button class="more bold"><a  href="styleur.php?style=font-weight:bold">Gras</a></button>
        <button class="more italic"><a href="styleur.php?style=font-style:italic">Italique</a></button>
        <button class="more underline"><a  href="styleur.php?style=text-decoration:underline">Souligné</a></button>
        <button class="more red"><a  href="styleur.php?style=color:red">Rouge</a></button>
        <button class="more black"><a  href="styleur.php?style=color:black">Noir</a></button>
    </main>
    <footer>
        <div>&copy; EPFC &dot; 2022</div>
    </footer>
    </body>
</html>