<?php



if (!isset($_GET['operation'])){
    
    $date = time();
    $dateToShow = date("d-m-Y", $date);
} 

elseif ($_GET['operation'] == 'previousDay'){

    
    $date = strtotime($_GET['lastDate']) - (60 * 60 * 24) ;
    $dateToShow = date("d-m-Y", $date);
}
elseif ($_GET['operation'] == 'nextDay'){

    
    $date = strtotime($_GET['lastDate']) + (60 * 60 * 24); 
    
    $dateToShow = date("d-m-Y", $date);
    
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Dateur</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
    <main>
        <button class="less"><a  href="dateur.php?operation=previousDay&lastDate=<?= $dateToShow ?>" >Jour précédent</a></button>
        <span class="date"><?= $dateToShow ?></span>
        <button class="more"><a  href="dateur.php?operation=nextDay&lastDate=<?= $dateToShow ?>" >Jour suivant</a></button>

    </main>
    <footer>
        <div>&copy; EPFC &dot; 2022</div>
    </footer>
    </body>
</html>
