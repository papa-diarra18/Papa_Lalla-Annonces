<?php
$title = $title ?? "Papa & Lalla Annonces";
$currentPage = $currentPage ?? "";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Papa & Lalla Annonces</h1>
            <nav>
                <a href="/home" class="px-3 py-2 <?= $currentPage === 'home' ? 'bg-gray-700' : '' ?>">Accueil</a>
                <a href="/login" class="px-3 py-2 <?= $currentPage === 'login' ? 'bg-gray-700' : '' ?>">Connexion</a>
                <a href="/register" class="px-3 py-2 <?= $currentPage === 'register' ? 'bg-gray-700' : '' ?>">Inscription</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <?= $content; ?>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8 text-center">
        <p> &copy; <?= date('Y') ?> Papa & Lalla Annonces. Tous droits réservés.</p>
    </footer>
</body>
</html>

