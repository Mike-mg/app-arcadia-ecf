<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arcadia Zoo, an animal park to spend well time with family or friends">
    <link rel="icon" type="image/png" href="./assets/navbar/images_&_logos/arcadia_logo_75px.webp">
    <link rel="stylesheet" href="./css/reset_and_fonts.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./assets/navbar//css/navbar.css">
    <link rel="stylesheet" href="./assets/habitats/css/habitats.css">
    <link rel="stylesheet" href="./assets/services/css/services.css">
    <link rel="stylesheet" href="./assets/slider_presentation_arcadia/css/slider_presentaion_arcadia.css">
    <link rel="stylesheet" href="./assets/footer/css/footer.css">
    <script src="/assets/navbar//scripts/navbar.js" defer></script>
    <title>Arcadia - ZooParc</title>
</head>

<body>
    <?php require_once './assets/navbar/html/navbar.php'; ?>
    <header class="presentation">
        <h2>Bienvenue à Arcadia</h2>
        <p>Découvrez l'émerveillement de la nature au Zoo Arcadia, situé au cœur de la majestueuse forêt de Brocéliande en Bretagne.</p>
        <p>Depuis 1960, notre zoo offre une expérience immersive avec une diversité d'animaux fascinants.</p>
        <p>Les animaux sont répartis dans des habitats soigneusement conçus, tels que la savane, la jungle et les marais.</p>
        <p>Notre engagement envers le bien-être animal se reflète dans les contrôles quotidiens assurés par nos vétérinaires dévoués, garantissant une attention minutieuse à la santé de nos pensionnaires.</p>
    </header>
    <?php require_once './assets/slider_presentation_arcadia/html/slider_presentaion_arcadia.php'; ?>
    <?php require_once './assets/habitats/html/habitats_presentation_card.php'; ?>
    <?php require_once './assets/services/html/services_presentation_card.php'; ?>
    <?php require_once './assets/footer/html/footer.php'; ?>
</body>

</html>