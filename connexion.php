
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion à la Base de Données</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 800px;
        }
        .connexion-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        input {
            padding: 15px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
      
    </style>
</head>
<body>
<?php
// Paramètres de connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$database = "gestion_stockage";

// Créer la connexion
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

// Gérer les exceptions PDO en mode d'erreurs
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
   
</body>
</html>
