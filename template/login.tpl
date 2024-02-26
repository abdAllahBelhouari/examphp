<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <form action="?route=login" method="POST">
            <h2>Se connecter</h2>
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <button class="btn-action" type="submit" name="subFormLogin" onsubmit="this.style.visibility='hidden'">Se
                connecter</button>
            <a href="?route=register" class="button">S'inscrire</a>
        </form>
    </div>
</body>

</html>