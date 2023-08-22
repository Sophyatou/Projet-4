<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
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
        .signup-container {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 600px;
        }
        input {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 90%;
            font-size:20px;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 35%;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Inscription</h2>
        <form action="inscription_process.php" method="post">
            <input type="text" name="nom" placeholder="Nom" required><br>
            <input type="text" name="prenom" placeholder="Prénom" required><br>
            <input type="text" name="login" placeholder="Login" required><br>
            <input type="password" name="pass" placeholder="Mot de passe" required><br>
            <input type="password" name="confirm_pass" placeholder="Confirmer le mot de passe" required><br>
            <button type="submit" name="valider">S'inscrire</button>
        </form>
    </div>
</body>
</html>
