<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php");

// Récupérer les données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$login = $_POST["login"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Insérer les données dans la table 'utilisateurs'
$stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, login, password) VALUES (?, ?, ?, ?)");
$stmt->execute([$nom, $prenom, $login, $password]);

// Rediriger vers la page de login
header("Location: login.php");
?>


