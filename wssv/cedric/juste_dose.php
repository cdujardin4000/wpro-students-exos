<?php
/* --------------------------------La juste dose--------------------------------
//Déclaration des variables


/*
//Récupérer l'action choisi
if (!isset($_GET['operation'])){

    $number = rand($min=0, $max=100);
}

elseif($_GET['operation'] =='greater'){

    $newValue = rand($min=$_GET['lastValue'], $max=100);
    $number = $newValue;
}
elseif($_GET['operation'] =='smaller'){

    $newValue = rand($min=0, $max=$_GET['lastValue']);
    $number = $newValue;
}
elseif($_GET['operation'] =='prevOdd'){

    $number = $_GET['lastValue'];
    if (is_int($number/2)){
        $newValue = $_GET['lastValue'] -1;
    }
    else {
        $newValue = $_GET['lastValue'] -2;
    }

    $number = $newValue;
}
elseif($_GET['operation'] =='nextEven'){

    $number = $_GET['lastValue'];
    if (is_int($number/2)){
        $newValue = $_GET['lastValue'] +2;
    }
    else {
        $newValue = $_GET['lastValue'] +1;
    }

    $number = $newValue;
}
*/
if (!isset($_GET['operation'])){

    $number = rand($min=0, $max=100);
} else {

    switch ($_GET['operation']):
        case 'greater':
            $newValue = rand($min=$_GET['lastValue'], $max=100);
            $number = $newValue;
            break;
        case 'smaller':
            $newValue = rand($min=0, $max=$_GET['lastValue']);
            $number = $newValue;
            break;
        case 'prevOdd':
            $number = $_GET['lastValue'];
            if (is_int($number/2)){
                $newValue = $_GET['lastValue'] -1;
            }
            else {
                $newValue = $_GET['lastValue'] -2;
            }
        
            $number = $newValue;
            break;
        case 'nextEven':
            $number = $_GET['lastValue'];
            if (is_int($number/2)){
                $newValue = $_GET['lastValue'] +2;
            }
            else {
                $newValue = $_GET['lastValue'] +1;
            }
        
            $number = $newValue;
            break;
    endswitch;
}


?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>La juste dose</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<main>
        <h1>La juste dose</h1>
        <p>Au départ, le script PHP doseur.php affiche un nombre au hasard. Lorsque l'internaute clique sur un lien intitulé Plus grand, le script affichera un nombre aléatoire strictement plus grand. Lorsque 
            l'internaute clique sur un lien intitulé Plus petit, le script affichera un nombre aléatoire strictement plus petit.</p>
        <p>Ajoutez deux liens au script doseur.php. Lorsque l'internaute clique sur un lien intitulé Prochain pair, le chiffre affiché doit être incrémenté au premier nombre pair suivant. Lorsque l'internaute 
            clique sur un lien intitulé Précédent impair, le chiffre affiché doit être décrémenté au premier nombre impair précédent.</p>
        <button class="less"><a  href="doseur.php?operation=prevOdd&lastValue=<?= $number ?>" >Précédent impair</a></button>
        <button class="less"><a  href="doseur.php?operation=smaller&lastValue=<?= $number ?>" >-</a></button>
        <span class="number"><?= $number ?></span>
        <button class="more"><a  href="doseur.php?operation=greater&lastValue=<?= $number ?>" >+</a></button>
        <button class="more"><a  href="doseur.php?operation=nextEven&lastValue=<?= $number ?>" >Prochain pair</a></button>
	</main>
	<footer>
		<div>&copy; EPFC &dot; 2022</div>
	</footer>
</body>
</html>