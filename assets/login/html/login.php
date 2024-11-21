<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/login/css/login.css">
    <script src="/assets/login/scripts/login.js" defer></script>
    <title>Arcadia - Login</title>
</head>

<body>
    <section class="container_login">
        <header>
            <h1 class="container_login__header__h1">Espace Membres</h1>
            <aside>
                <p>Cette espace est réservé aux membres du zoo Arcadia</p>
                <a href="/index.php">Revenir à l'accueil</a>
                </aside>
        </header>
        <button class="button_login" type="button">Se Connecter</button>
    </section>

    <section class="container_form_login">
        <form class="form_login" action="" method="get">
            <h1 class="form_login_h1">Connexion</h1>
            <input class="form_login_input_email" type="email" placeholder="Votre Email">
            <input class="form_login_input_password" type="password" placeholder="Votre mot de passe">
            <button class="form_login_button" type="submit">Connexion</button>
            <a class="form_login_a" href="/app-arcadia-ecf/index.php">Revenir à l'accueil</a>
        </form>
    </section>
</body>

</html>