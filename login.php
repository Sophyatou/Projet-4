<!DOCTYPE html>
<html>
<head>
    <title>Authentification</title>
</head>
<body>
   <div class= "login-container">
     <h2>Authentification</h2>
    <form method="post" action="login_process.php">
    <input type="text" name="login" placeholder="Login" required><br>
            <input type="password" name="pass" placeholder="Mot de passe" required><br>
        <button type="submit" name="valider">S'authentifier</button>
    </form>
</div>
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
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 50px
        }
        input {
            padding: 15px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</body>
</html>


