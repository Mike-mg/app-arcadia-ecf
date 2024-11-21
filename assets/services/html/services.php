<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arcadia Zoo, an animal park to spend well time with family or friends">
    <link rel="stylesheet" href="/css/reset_and_fonts.css">
    <link rel="stylesheet" href="/assets/navbar/css/navbar.css">
    <link rel="stylesheet" href="/assets/services/css/services.css">
    <link rel="stylesheet" href="/assets/footer/css/footer.css">
    <script src="/assets/navbar//scripts/navbar.js" defer></script>
    <title>Arcadia - Services</title>
</head>

<body>
    <?php require_once '../../navbar/html/navbar.php'; ?>
    <header class="presentation_services">
        <h2>Bienvenue sur nos services</h2>
        <p>Découvrez tous nos services, des divers styles de visites guidées en famille au divertissement pour enfants,
            nous vous proposeront des moments divertissants pour vous faire passser de merveilleuses journées dans notre
            parc.</p>
        <p>Parcourez notre parc dans nos petits trains qui sillonnent nos habitats toute la journée, observez de votre
            siège la beauté de la biotope où vivent avec plaisir nos.</p>
        <p>Afin de passer un journée toujours en forme nous vous proposant également nos restaurants, vous pourrez
            trouver de la restauration rapide à de la gastronomie de grand restanrant.</p>
    </header>
    <?php require_once '../../services/html/services_presentation_card.php'; ?>
    <section class="container_details_visit" id="details_visits">
        <header>
            <h4 class="container_services__header__h4">Nos différentes de visites guidées</h4>
        </header>
        <section class="container_visit">
            <article class="visit_hour">
                <header>
                    <h4>Profirez de notre visite guidée rapide en groupe de 1h.</h4>
                </header>
                <aside>
                    <p>Découvrez notre visite guidée de zoo en groupe de 1 heure ! Explorez les habitats fascinants de diverses espèces animales avec un guide expert.</p>
                    <p>Vous apprendrez des faits captivants tout en observant les animaux dans un environnement stimulant et sécurisé.</p>
                    <p>Une expérience enrichissante pour tous les âges, idéale pour les sorties familiales, scolaires ou entre amis. Réservez dès maintenant !</p>
                </aside>
                <footer>
                    <p>Prix adulte : 10€</p>
                    <p>Prix enfant : 5€</p>
                </footer>
            </article>
            <article class="visit_day">
                <header>
                    <h4>Vous désirez une visite guidée en famille toute une journée.</h4>
                </header>
                <aside>
                    <p>Découvrez une journée inoubliable en famille avec notre visite guidée au zoo !.</p>
                    <p>Explorez des habitats fascinants, observez des animaux exotiques et participez à des activités ludiques adaptées à tous les âges.</p>
                    <p>Profitez de moments interactifs, d’attractions pour enfants et de pique-niques dans un cadre naturel exceptionnel. Une aventure éducative et divertissante vous attend !</p>
                </aside>
                <footer>
                    <p>Prix adulte : 20€</p>
                    <p>Prix enfant : 10€</p>
                </footer>
            </article>
        </section>
    </section>
    <section class="container_details_child_animation" id="details_animation">
        <header>
            <h4 class="container_child_animation__header__h4">Notre animation pour enfants</h4>
        </header>
        <section class="container_child_animation">
            <article class="child_animation">
                <header>
                    <h4>Découvrez notre service d'animation pour enfants.</h4>
                </header>
                <aside>
                    <p>Découvrez notre service d'animation pour enfants au zoo!</p>
                    <p>Offrez-leur une aventure éducative et ludique avec des activités interactives, des jeux captivants et des rencontres animées avec nos animaux.</p>
                    <p>Nos animateurs qualifiés guideront les petits explorateurs à travers des ateliers créatifs et des chasses au trésor, tout en apprenant sur la faune dans un environnement sécurisé et amusant. Une journée inoubliable les attend !</p>
                </aside>
                <footer>
                    <p>GRATUIT</p>
                </footer>
            </article>
        </section>
    </section>
    <section class="container_details_small_train" id="small_train">
        <header>
            <h4 class="container_small_train__header__h4">Baladez-vous dans nos petits trains</h4>
        </header>
        <section class="container_small_train">

            <article class="small_train">
                <header>
                    <h4>Découvrez notre parc dans un voyage en petit train.</h4>
                </header>
                <aside>
                    <p>Découvrez notre service unique de balade en train au cœur du zoo!</p>
                    <p>Embarquez dans l'un de nos trains pour un voyage pittoresque à travers nos espaces animaliers, tout en profitant d'une vue imprenable sur les habitats de vos animaux préférés.</p>
                    <p>Idéal pour toute la famille, ce circuit confortable vous permettra de vivre une expérience inoubliable tout en apprenant davantage sur la faune. Montez à bord et laissez-vous guider !</p>
                </aside>
                <footer>
                    <p>Prix adulte : 10€</p>
                    <p>Prix enfant : 5€</p>
                </footer>
            </article>
        </section>
    </section>
    <section class="container_details_restaurant" id="restaurant">
        <header>
            <h4 class="container_restaurant__header__h4">Régalez-vous dans l'un de nos restanrants</h4>
        </header>
        <section class="container_restaurant">
            <article class="restaurant_fastfood">
                <header>
                    <h4>Un repas rapide mais goûteux et savoureux sur le pouce.</h4>
                </header>
                <aside>
                    <p>Au cœur du zoo, le "Arcadia Snack" propose une pause gourmande rapide et originale.</p>
                    <p>Entouré de verdure et d'animaux en arrière-plan, ce fast-food convivial sert des burgers juteux, des frites dorées et des milkshakes rafraîchissants.</p>
                    <p>L’ambiance est animée et décontractée, parfaite pour reprendre des forces avant de continuer la visite. Un régal pour petits et grands !</p>
                </aside>
                <footer>
                    <p>Prix moyen : 11€</p>
                </footer>
            </article>
            <article class="restaurant_gourmet">
                <header>
                    <h4>Le temps d'une assiette délicate et gastrononique.</h4>
                </header>
                <aside>
                    <p>Nichée au cœur du zoo, notre brasserie gastronomique offre une expérience culinaire unique.</p>
                    <p>Savourez des plats raffinés préparés avec des ingrédients locaux tout en observant la faune dans son habitat naturel.</p>
                    <p> L’ambiance élégante et la vue imprenable sur les enclos font de chaque repas un moment inoubliable. Un lieu où gastronomie et nature se rencontrent en parfaite harmonie.Un lieu où gastronomie et nature se rencontrent en parfaite harmonie.</p>
                </aside>
                <footer>
                    <p>Prix moyen : 21€</p>
                </footer>
            </article>
        </section>
    </section>
    <?php require_once '../../footer/html/footer.php'; ?>
</body>

</html>