<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Quiz PHP</title>
</head>
<body>

<h2>Quiz simple PHP</h2>

<?php
$score = 0;
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;

    if (isset($_POST['q1']) && $_POST['q1'] == 'b') {
        $score++;
    }
    if (isset($_POST['q2']) && $_POST['q2'] == 'b') {
        $score++;
    }
    if (isset($_POST['q3']) && $_POST['q3'] == 'a') {
        $score++;
    }
}
?>

<?php if (!$submitted) { ?>

<form method="post">

    <p>1. PHP est un langage :</p>
    <input type="radio" name="q1" value="a"> Compilé<br>
    <input type="radio" name="q1" value="b"> Interprété<br>
    <input type="radio" name="q1" value="c"> Assembleur<br>

    <p>2. Quelle balise ouvre du PHP ?</p>
    <input type="radio" name="q2" value="a"> &lt;php&gt;<br>
    <input type="radio" name="q2" value="b"> &lt;?php<br>
    <input type="radio" name="q2" value="c"> &lt;script&gt;<br>

    <p>3. PHP signifie :</p>
    <input type="radio" name="q3" value="a"> Personal Home Page<br>
    <input type="radio" name="q3" value="b"> Private Hypertext Processor<br>
    <input type="radio" name="q3" value="c"> Programming HTML Page<br>

    <br>
    <input type="submit" value="Valider">
</form>

<?php } else { ?>

<h3>Résultat</h3>
<p>Votre score : <strong><?php echo $score; ?>/3</strong></p>

<?php
if ($score == 3) {
    echo "<p>Excellent 👏</p>";
} elseif ($score == 2) {
    echo "<p>Bien 👍</p>";
} else {
    echo "<p>À revoir 😅</p>";
}

?>

<a href="index.php">Rejouer</a>

<?php } ?>

</body>
</html>
