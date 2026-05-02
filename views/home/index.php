<?php
$title = "Accueil - Annonces";
$currentPage = "home";

ob_start();
?>

<section>
    <div>
        <h1>Bienvenue sur Papa & Lalla Annonces</h1>
        <p>Découvrez les dernières annonces de vente de voitures d'occasion près de chez vous.</p>
    </div>
</section>

<?php
$content = ob_get_clean();
require_once __DIR__.'/../../views/layouts/main.php';
?>