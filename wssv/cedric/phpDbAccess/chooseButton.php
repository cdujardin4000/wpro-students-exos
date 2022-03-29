<?php
require 'config.php';

$action = $_GET['query'];
$query = "";

// switch query
switch ($action) {
    case "AllConsults":
        $query = 'SELECT * FROM `consultation`';
        break;
    case "10Consults":
        $query = 'SELECT * FROM `consultation` LIMIT 10';
        break;
    case "AllType":
        $query = 'SELECT `type` FROM `animaux`';
        break;
    case "ClientsIvry":
        $query = "SELECT * FROM consultation WHERE Ville = 'IVRY' ORDER BY sexe";
        break;
    case "ClientsPasFosPaye":
        $query = "SELECT * FROM consultation WHERE Paye = 1 AND Ville NOT LIKE 'FOS' ";
        break;
    case "ClientsChienChat":
        $query = "SELECT * FROM consultation WHERE IdAnimal = 1 OR IdAnimal = 2";
        break;
    case "ThisYear":
        $query = 'SELECT * FROM `consultation`';
        break;
}

// se connecter au serveur Mysql
$mysqli = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD); //@pour ne rien afficher si erreur

// selectionner une base de donnée
if($mysqli){
    if(mysqli_select_db($mysqli, DATABASE)){
        //préparer une requète
        $result = mysqli_query($mysqli, $query);
        if($result){
            //extraire les résultats
            while (($consultation = mysqli_fetch_assoc($result)) != null){
                $consultations[] = $consultation;
            }
            //libérer la mémoire
            mysqli_free_result($result);
        }
    } else {
        $message = "Base de donnée inconnue";
    }
} else {
    $message = "Erreur de connexion";
}

//fermer la connection
mysqli_close($mysqli);


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>showMe</title>
    <link href="css/screen.css" rel="stylesheet">
</head>
</html>
<header>

</header>
<body>


<section id ="liste">
    <table>
        <thead>
            <tr>Résultats</tr>
        </thead>
        <tbody>
        <?php foreach($consultations as $consultation){
        // switch html
            switch ($_GET['query']) {

                case "AllConsults" :
                case "ClientsPasFosPaye":
                case "10Consults": ?>
                    <tr>
                        <td>
                            <p>Nom du client: <?= $consultation['NomClient'] ?></p>
                        </td>
                    </tr>
                <?php break;
                case "AllType": ?>
                    <tr>
                        <td>
                            <p>Type d'animal: <?= $consultation['type'] ?></p>
                        </td>
                    </tr>
                <?php break;
                case "ClientsIvry": ?>
                    <tr>
                        <td>
                            <p>Id consultation: <?= $consultation['IdConsult'] ?></p>
                        </td>
                        <td>
                            <p>Nom du client: <?= $consultation['NomClient'] ?></p>
                        </td>
                        <td>
                            <p>Sexe: <?= $consultation['Sexe'] ?></p>
                        </td>
                    </tr>
                <?php break;
                case "ClientsChienChat": ?>
                    <tr>
                        <td>
                            <p>Nom du client: <?= $consultation['NomClient'] ?></p>
                        </td>
                        <td>
                            <p>
                                Animal: <?php if($consultation['IdAnimal'] == 1) {
                                    echo "chien";
                                } elseif ($consultation['IdAnimal'] == 2 ){
                                    echo "chat";
                                } ?>
                            </p>
                        </td>
                    </tr>
                <?php break;
                    case "ThisYear":
                    $query = 'SELECT * FROM `consultation`';
                    break;
            }
        } ?>
        </tbody>
    </table>

</section>
</body>
