<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- ///////////////EXERCICE 1 et 3-->
<h2>Exercice 1 et 3</h2>
<p>Ex 1 : Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **GET**</p>
<p>Ex 3 : Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
<form action="/user.php" method="GET">
    <label for="=">Nom :</label>
    <input name="nom" type="text">
    <label for="=">Prénom :</label>
    <input name="prenom" type="text">
    <input type="reset" name="reset">
    <button type="submit" name="">Submit</button>
</form>

<?php
print_r($_GET['nom']);
echo'<br>';
print_r($_GET['prenom']);
echo '<hr>';
?>

<!-- ///////////////EXERCICE 2 et 4 -->
<h2>Ex 2 : Exercice 2 et 4</h2>
<p>Ex 4 : Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.</p>
<p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmis

<form action="/user.php" method="POST">
    <label for="=">Nom :</label>
    <input name="nom" type="text">
    <label for="=">Prénom :</label>
    <input name="prenom" type="text">
    <input type="reset" name="reset">
    <button type="submit" name="">Submit</button>
</form>
<?php
print_r($_POST['nom']);
echo'<br>';
print_r($_POST['prenom']);
echo '<hr>';
?>

<!-- /////////////////EXERCICE 5-->

<h2>Exercice 5</h2>
<p>Créer un formulaire sur la page **index.php** avec :
- Une liste déroulante pour la civilité (Mr ou Mme)
- Un champ texte pour le nom
- Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page **index.php**.
Vous avez le choix de la méthode.</p>

<form action="/form.php" method="POST">
    <select name="civilite" id="">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>
    <label for="=">Nom :</label>
    <input name="nom2" type="text">
    <label for="=">Prénom :</label>
    <input name="prenom2" type="text">
    <input type="reset" name="reset">
    <button type="submit" name="">Submit</button>
</form>
<?php
print_r($_POST['civilite']);
echo '<br>';
print_r($_POST['nom2']);
echo'<br>';
print_r($_POST['prenom2']);
echo'<hr>';
?>

<!-- ///////////////////// EXERCICE 6-->

<h2>Exercice 6</h2>
<p>Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.</p>

<?php

$DisplayForm = true;
if(isset($_POST['submit'])){
    $DisplayForm = false;
echo $_POST['civilite2'].' '.$_POST['nom3'].' '.$_POST['prenom3'];
}
if ($DisplayForm) {
?>
<form action="/form.php" method="POST">
    <select name="civilite2" id="">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>
    <label for="=">Nom :</label>
    <input name="nom3" type="text">
    <label for="=">Prénom :</label>
    <input name="prenom3" type="text">
    <input type="reset" name="reset">
    <button type="submit" name="submit">Submit</button>
</form>
<?php
}
?>
<br>
<hr>
<!-- ///////////////////// EXERCICE 7 et 8-->

<h2>Exercice 7 et 8</h2>
<p>Ex 7 : Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier</p>
<p>Ex 8 :Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier **pdf**. </p>

<?php



$DisplayForm = true;
if(isset($_POST['submit'])){
    $DisplayForm = false;

    echo $_POST['civilite3'].' '.$_POST['nom4'].' '.$_POST['prenom4'].' '.$_POST['userfile'];
    echo '<br>';

    $uploadedFile = $_POST['userfile'];
    $ext = pathinfo($uploadedFile, PATHINFO_EXTENSION);
    if ($ext == "pdf") {
        echo'<p>Le fichier transmis est bien au format pdf</p>';
    } else {
        echo "<p>Le fichier transmis n'est pas au format pdf. Il est au format $ext</p>";
    }

}
if ($DisplayForm) {
?>
<form action="/form.php" method="POST">
    <select name="civilite3" id="">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>
    <label for="=">Nom :</label>
    <input name="nom4" type="text">
    <label for="=">Prénom :</label>
    <input name="prenom4" type="text">
    <label for="">Uploder a file</label>
    <input name="userfile" type="file" />
    <input type="reset" name="reset">
    <button type="submit" name="submit">Submit</button>
</form>
<?php
}
?>
<br>
<hr>






</body>
</html>