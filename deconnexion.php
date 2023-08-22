 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Déconnexion</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 700px;
            width: 100%;
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
    <div class="message">
        <h2>Déconnexion</h2>
        <p>Vous avez été déconnecté avec succès.</p>
        <a href="login.php">Se reconnecter</a>
    </div>
    <?php
// Démarrer la session
session_start();

// Détruire la session et rediriger vers la page de login
session_destroy();
header("Location: login.php");
?>
</body>
</html>
