<?php



if (!isset($_GET['operation'])){
    
    $date = time();
    $dateToShow = date("d-m-Y", $date);

} elseif ($_GET['operation'] == 'previousDay'){

    
    $date = strtotime($_GET['lastDate']) - (60 * 60 * 24) ;
    $dateToShow = date("d-m-Y", $date);

} elseif ($_GET['operation'] == 'previousMonth'){

    
    $date = strtotime($_GET['lastDate']);
    $dateBefore = mktime(
        date('G', $date),
        date('i', $date),
        date('s', $date),
        date('n', $date)-1,
        date('j', $date), 
        date('Y', $date)
    );
    
    $dateToShow = date('d-m-Y', $dateBefore);

} elseif ($_GET['operation'] == 'previousYear'){

    
    $date = strtotime($_GET['lastDate']);
    $dateBefore = mktime(
        date('G', $date),
        date('i', $date),
        date('s', $date),
        date('n', $date),
        date('j', $date),
        date('Y', $date)-1
    );
    
    $dateToShow = date("d-m-Y", $dateBefore);

} elseif ($_GET['operation'] == 'nextDay'){

    
    $date = strtotime($_GET['lastDate']) + (60 * 60 * 24); 
    
    $dateToShow = date("d-m-Y", $date);
    
} elseif ($_GET['operation'] == 'nextMonth'){

    
    $date = strtotime($_GET['lastDate']); 
    $dateBefore = mktime(
        date('G', $date),
        date('i', $date),
        date('s', $date),
        date('n', $date)+1,
        date('j', $date), 
        date('Y', $date)
    );
    
    $dateToShow = date('d-m-Y', $dateBefore);
    
} elseif ($_GET['operation'] == 'nextYear'){

    
    $date = strtotime($_GET['lastDate']); 
    $dateBefore = mktime(
        date('G', $date),
        date('i', $date),
        date('s', $date),
        date('n', $date),
        date('j', $date), 
        date('Y', $date)+1
    );
    
    $dateToShow = date('d-m-Y', $dateBefore);
    
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
        <h1>La juste date</h1>
        <p>Au départ, le script PHP dateur.php affiche la date du jour au format jj/mm/aaaa. Lorsque l'internaute clique sur un lien intitulé Jour suivant ou sur un lien intitulé Jour précédent, 
            la date affichée doit être mise à jour en conséquence. Faites de même pour les liens Mois suivant/précédent et Année suivante/précédente.</p>
        <button class="less"><a  href="dateur.php?operation=previousYear&lastDate=<?= $dateToShow ?>" >Année précédente</a></button>
        <button class="less"><a  href="dateur.php?operation=previousMonth&lastDate=<?= $dateToShow ?>" >Mois précédent</a></button>
        <button class="less"><a  href="dateur.php?operation=previousDay&lastDate=<?= $dateToShow ?>" >Jour précédent</a></button>
        <span class="date"><?= $dateToShow ?></span>
        <button class="more"><a  href="dateur.php?operation=nextDay&lastDate=<?= $dateToShow ?>" >Jour suivant</a></button>
        <button class="more"><a  href="dateur.php?operation=nextMonth&lastDate=<?= $dateToShow ?>" >Mois suivant</a></button>
        <button class="more"><a  href="dateur.php?operation=nextYear&lastDate=<?= $dateToShow ?>" >Année suivante</a></button>

    </main>
    <footer>
        <div>&copy; EPFC &dot; 2022</div>
    </footer>
    </body>
</html>