<?php

//READ VALUES
if (isset($_GET['console'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // GET hardcoded
    $reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY nom DESC LIMIT 3');

    while ($donnees = $reponse->fetch()) {
        echo '<p>' . $donnees['console'] . ' - ' . $donnees['nom'] . '</p>';
    }

    // GET params
    $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ? AND nom = ?');
    $requete->execute(array($_GET['console'], $_GET['name']));
    // //when it contains more variables
    // $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
    // $req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

    while ($donnees = $requete->fetch()) {
        echo '<p>' . $donnees['console'] . ' - ' . $donnees['nom'] . '</p>';
    }
}

//INSERT VALUES
// $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $requete = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(?, ?)');
// $requete->execute(array($_GET['name'], $_GET['possesseur']));










//UPDATE VALUES