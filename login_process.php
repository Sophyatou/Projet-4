<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php");

// Récupérer les données du formulaire
$login = $_POST["login"];
$password = $_POST["password"];

// Vérifier les informations d'identification dans la table 'utilisateurs'
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE login = ?");
$stmt->execute([$login]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user["password"])) {
    // Démarrer la session et rediriger vers la page session.php
    session_start();
    $_SESSION["login"] = $login;
    header("Location: session.php");
} else {
    echo "Mauvais login ou mot de passe.";
}
?>

