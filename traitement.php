<?php 
    require 'ajouter.php';

    if(empty($_POST['titre']) 
        || empty($_POST['descritpion']) 
        || empty($_POST['artiste']) 
        || empty($_POST['image']) 
        || strlen($_POST['description']) < 3
        || !filter_var($_POST['image'], FILTER_VALIDATE_URL)) 
    {
        header('Location : ajouter.php');
    } else {
        $titre = htmlspecialchars($_POST['titre']);
        $artiste = htmlspecialchars($_POST['artiste']);
        $image = htmlspecialchars($_POST['image']);
        $description = htmlspecialchars($_POST['description']);
    
        // insérer
    }
?>