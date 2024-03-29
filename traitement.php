<?php 
    require 'bdd.php';

    if(empty($_POST['titre']) 
        || empty($_POST['artiste']) 
        || empty($_POST['description']) 
        || empty($_POST['image']) 
        || strlen($_POST['description']) < 3
        || !filter_var($_POST['image'], FILTER_VALIDATE_URL)) 
    {
        header('Location : ajouter.php');
    } else {
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $artiste = htmlspecialchars($_POST['artiste']);
        $image = htmlspecialchars($_POST['image']);

        $bdd = connexion();

        $requete_ajout_oeuvre = $bdd->prepare('INSERT INTO oeuvres (titre, description, artiste, image) VALUES (?, ?, ?, ?)');
        $requete_ajout_oeuvre->execute([$titre, $description, $artiste, $image]);

        // $db->lastInsertId() permet de récupérer l'id de la dernière ligne insérée en base de données (en l'occurence, l'oeuvre que nous venons d'ajouter).
        header('Location: oeuvre.php?id=' . $bdd->lastInsertId());
    }

?>