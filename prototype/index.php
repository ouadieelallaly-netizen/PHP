<?php
// ✅ Function pour le calcul
function calculer($a, $b, $op) {
    switch ($op) {
        case '+': return $a + $b;
        case '-': return $a - $b;
        case '*': return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;
        default:
            return "Opération invalide";
    }
}
// ✅ Vérification si le formulaire est envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ✅ Validation des données
    if (
        isset($_POST["nombre1"], $_POST["nombre2"], $_POST["operation"]) &&
        is_numeric($_POST["nombre1"]) &&
        is_numeric($_POST["nombre2"])
    ) {
        $n1 = $_POST["nombre1"];
        $n2 = $_POST["nombre2"];
        $op = $_POST["operation"];

        $resultat = calculer($n1, $n2, $op);

        echo "<p>Résultat : <strong>$resultat</strong></p>";
    } else {
        echo "<p style='color:red'>Veuillez entrer des valeurs valides</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Calculatrice PHP</title>
</head>
<body>

<h2 id="set">Calculatrice</h2>

<form method="POST" action="">
    <div class="tableau">
    <input type="number" name="nombre1" step="any" required>
    
    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    
    <input type="number" name="nombre2" step="any" required>
    
    <button type="submit">Calculer</button>
</div>
</form>



</body>
</html>
