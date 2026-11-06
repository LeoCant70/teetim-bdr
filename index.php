<?php
    // Créer et affecter à une variable l'indication de la page courante
    $page = "accueil";

    include("commun/entete.inc.php");
?>
        <main class="page-accueil">
            <article class="amorce">
                <h1><?= $_->heroTitre; ?></h1>
                <h2><?= $_->heroSousTitre; ?></h2>
                <h4><?= $_->heroSousTitre2; ?></h4>
            </article>
            <article class="principal">
                <p><?= $_->para1; ?></p>
                <p><?= $_->para2; ?></p>
            </article>
        </main>
<?php
    include("commun/pied2page.inc.php");
?>