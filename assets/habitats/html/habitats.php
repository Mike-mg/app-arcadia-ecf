<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arcadia Zoo, an animal park to spend well time with family or friends">    
    <link rel="stylesheet" href="/css/reset_and_fonts.css">
    <link rel="stylesheet" href="/assets/navbar/css/navbar.css">
    <link rel="stylesheet" href="/assets/habitats/css/habitats.css">
    <link rel="stylesheet" href="/assets/footer/css/footer.css">
    <script src="/assets/navbar//scripts/navbar.js" defer></script>
    <title>Arcadia - Habitats</title>
</head>

<body>
    <?php require_once '../../navbar/html/navbar.php'; ?>
    <header class="presentation_habitats">
        <h2>Bienvenue sur nos habitats</h2>
        <p>Notre zoo offre des habitats soigneusement conçus pour les félins, des animaux de la savane et de la jungle.</p>
        <p>Les lions, emblèmes de la savane, évoluent dans de vastes enclos herbeux parsemés d'acacias, recréant leur environnement naturel. Les tigres, rois de la jungle, profitent d'un espace dense en végétation, avec des points d'eau et des arbres pour grimper.</p>
        <p>Chaque enclos est conçu pour favoriser leur comportement naturel, assurant leur bien-être et permettant aux visiteurs d'apprécier leur majesté dans un cadre authentique.</p>
    </header>
    <?php require_once '../../habitats/html/habitats_presentation_card.php'; ?>
    <?php require_once '../../footer/html/footer.php'; ?>

</body>

</html>