<?php
// Connexion à la base avec PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=baneservice;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($mot_de_passe, $user["mot_de_passe"])) {
        $message = "Connexion réussie ! ✅";
        // Redirection possible vers dashboard
    } else {
        $message = "Email ou mot de passe incorrect ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>

    <?php if ($message): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="mot_de_passe" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
