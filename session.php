<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application de Gestion de Stock</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .content {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 1000px;
            margin-top: 30px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 30px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 18px auto;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        form {
            margin: 15px auto;
            width: 70%;
            text-align: left;
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            overflow: hidden; /* Ajoutez cette ligne */
            text-overflow: ellipsis; /* Ajoutez cette ligne pour afficher "..." si le texte dépasse */
            white-space: nowrap; /* Empêche le texte de passer à la ligne */
                    }
        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php

// Inclure le fichier de connexion à la base de données
include("connexion.php");

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Gérer l'ajout de produit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $nomProduit = $_POST["nom"];
    $quantiteProduit = $_POST["quantite"];

    // Insérer le produit dans la table 'produits'
    $stmt = $pdo->prepare("INSERT INTO produits (nom, quantite) VALUES (?, ?)");
    $stmt->execute([$nomProduit, $quantiteProduit]);
}

// Gérer l'ajout de fournisseur
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_supplier"])) {
    $nomFournisseur = $_POST["nom_fournisseur"];

    // Insérer le fournisseur dans la table 'fournisseurs'
    $stmt = $pdo->prepare("INSERT INTO fournisseurs (nom) VALUES (?)");
    $stmt->execute([$nomFournisseur]);
}

// Afficher le contenu réservé
echo "Bienvenue, " . $_SESSION["login"];


?>

<div class="content">
    <h1>Gestion de Stock</h1>
    <p>Bienvenue, <?php echo $_SESSION["login"]; ?></p> 
    <!-- Formulaire d'ajout de produit -->
    <h2>Ajouter un Produit</h2>
    <form action="" method="post">
        <label for="nom">Nom du Produit :</label><br>
        <input type="text" id="nom" name="nom" required><br>
        <label for="quantite">Quantité :</label><br>
        <input type="number" id="quantite" name="quantite" required><br>
        <button type="submit" name="add_product">Ajouter</button>
    </form>

    <!-- Formulaire d'ajout de fournisseur -->
    <h2>Ajouter un Fournisseur</h2>
    <form action="" method="post">
        <label for="nom_fournisseur">Nom du Fournisseur :</label><br>
        <input type="text" id="nom_fournisseur" name="nom_fournisseur" required><br>
        <label for="date_entree">Date d'Entrée :</label><br>
        <input type="date" id="date_entree" name="date_entree" required><br>
        <label for="date_sortie">Date de Sortie :</label><br>
        <input type="date" id="date_sortie" name="date_sortie" required><br>
        <button type="submit" name="add_supplier">Ajouter</button>
    </form>

    <!-- Liste des produits -->
    <h2>Liste des Produits</h2>
    <table>
        <tr>
            <th>Nom du Produit</th>
            <th>Quantité</th>
            <th>Action</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM produits");
        while ($row = $stmt->fetch()) {
            echo "<tr><td>{$row['nom']}</td><td>{$row['quantite']}</td><td><a href='supprimer.php?id={$row['id']}'>Supprimer</a></td></tr>";
        }
        ?>
    </table>

    <!-- Liste des fournisseurs -->
    <h2>Liste des Fournisseurs</h2>
    <table>
        <tr>
            <th>Nom du Fournisseur</th>
            <th>Date d'Entrée</th>
            <th>Date de Sortie</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM fournisseurs");
        while ($row = $stmt->fetch()) {
            echo "<tr><td>{$row['nom']}</td><td>{$row['date_entree']}</td><td>{$row['date_sortie']}</td></tr>";
        }
        ?>
    </table>
     <!-- Lien de déconnexion -->
     <a href="deconnexion.php">Se déconnecter</a>
</div>
</body>
</html>
