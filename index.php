<?php
require_once 'GestionContacts.php';

$gestion = new GestionContacts();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $gestion->ajoutContact($nom, $prenom);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Le Titre</title>
    <meta charset="utf-8">
</head>
<body>

<header>
    <div>
        <h2>TD1_PHP_POO</h2>
    </div>
</header>

<section>&
    <h3>Liste de contacts</h3>
    <?php $gestion->afficheContacts(); ?>

    <h3>Ajouter un nouveau contact à la liste</h3>
    <form action="index.php" method="POST">
        <label for="nom">Nom: </label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prenom: </label>
        <input type="text" id="prenom" name="prenom"><br>
        <input type="submit" value="Ajouter">
    </form>
</section>

<footer>
    BTS CIEL LPO ASTIER 2024
</footer>

</body>
</html>
