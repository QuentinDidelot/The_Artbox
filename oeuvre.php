<?php 
include('header.php');
include('oeuvres.php');
$id = $_GET['id'];  # On obtient l'id de l'oeuvre et on la transfère dans la variable $id
$o = null; # On déclare une variable $o qui sera nulle pour le moment

foreach($oeuvres as $oeuvre) {  # Pour chaque oeuvre se trouvant dans le fichier "oeuvreS.php" 
    if($id == $oeuvre['id']){   # Si l'id de l'URL est égale à l'id de l'oeuvre
        $o = $oeuvre;           # alors l'oeuvre à afficher est stockée dans la varible $o
        break;
    }
}
?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $o['image']?>" alt="<?php echo $o['titre'] ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $o['titre']?></h1>
            <p class="description"><?php echo $o['artiste'] ?></p>
            <p class="description-complete">
                <?php echo $o['description'] ?>
            </p>
        </div>
    </article>

<?php 
include('footer.php');
?>