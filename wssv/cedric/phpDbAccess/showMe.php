<?php
/*
 * ⦁	Sélectionner des enregistrements (avec et sans jointures)

Écrivez un script PHP qui permet d’exécuter une requête de sélection au choix parmi la liste définie ci-dessous. Les requêtes interrogeront les tables CONSULTATION et/ou ANIMAUX de la base de données iiVeterinaire.
La page Web présentera une liste de choix des différentes requêtes ci-dessous, un bouton d’envoi pour exécuter la requête, un tableau dans un calque où seront affichés les enregistrements répondant à la requête choisie.

	showme.php

⦁	AllConsults: Affichez toutes les consultations ;
⦁	10Consults: Affichez les dix premières consultations ;
⦁	AllType: Affichez tous les types d’animaux (seulement le type, ni l’IdAnimal, ni le PEC) ;
⦁	ClientsIvry: les clients (sexe, nom, IdConsult) habitant à Ivry (tri croissant sur le sexe) ;
⦁	ClientsPasFosPaye: Affichez tous les clients n’habitant pas à Fos et qui ont payé ;
⦁	ClientsChienChat: tous les clients (nom, type d’animal) qui ont amené un chien ou un chat.
⦁	ThisYear: toutes les consultations de cette année
 */

$message = "Veuillez cliquer sur un boutton";

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>showMe</title>
    <link href="css/screen.css" rel="stylesheet">
</head>
</html>
<header>

</header>
<body>
<div><?= $message ?></div>
<section>
    <form action="chooseButton.php" method="get">
        <label>Affichez toutes les consultations:</label>
        <button type="submit" value="AllConsults" name="query" >AllConsults</button>
        <label>Affichez les dix premières consultations:</label>
        <button type="submit" value="10Consults" name="query">10Consults</button>
        <label>Affichez tous les types d’animaux (seulement le type, ni l’IdAnimal, ni le PEC):</label>
        <button type="submit" value="AllType" name="query">AllType</button>
        <label>les clients (sexe, nom, IdConsult) habitant à Ivry (tri croissant sur le sexe):</label>
        <button type="submit" value="ClientsIvry" name="query">ClientsIvry</button>
        <label>Affichez tous les clients n’habitant pas à Fos et qui ont payé:</label>
        <button type="submit" value="ClientsPasFosPaye" name="query">ClientsPasFosPaye</button>
        <label>tous les clients (nom, type d’animal) qui ont amené un chien ou un chat.:</label>
        <button type="submit" value="ClientsChienChat" name="query">ClientsChienChat</button>
        <label>toutes les consultations de cette année:</label>
        <button type="submit" value="ThisYear" name="query">ThisYear</button>
    </form>
</section>

</body>