<footer>
    <h2>teeTIM</h2>
    <div class="contenu">
        <section class="achats">
            <h3><?= $_pp->titreSectionAchats; ?></h3>
            <nav>
                <a href="faq.php"><?= $_pp->lienFaq; ?></a>
                <a href="livraison.php"><?= $_pp->lienLivraison; ?></a>
                <a href="conditions.php"><?= $_pp->lienConditions; ?></a>
                <a href="confidentialite.php"><?= $_pp->lienConfid; ?></a>
            </nav>
        </section>
        <section class="apropos">
            <h3><?= $_pp->titreSectionCompagnie; ?></h3>
            <nav>
                <a href="compagnie.php"><?= $_pp->lienCompagnie; ?></a>
                <a href="equipe.php"><?= $_pp->lienEquipe; ?></a>
                <a href="emploi.php"><?= $_pp->lienEmplois; ?></a>
            </nav>
        </section>
        <section class="coordonnees">
            <h3><?= $_pp->titreSectionContact; ?></h3>
            <nav>
                <span><?= $_pp->etiquetteTel; ?><b>1 866 888 6666</b></span>
                <span><?= $_pp->etiquetteCourriel; ?>aide@teetim.ca</span>
            </nav>
        </section>
    </div>
    <p class="da">&copy; <?= $_pp->droits; ?> <?= date("Y"); ?></p>
</footer>
</div>

</body>

</html>