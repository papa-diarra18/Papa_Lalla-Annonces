<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
$title = "Accueil - Annonces";
$currentPage = "login";
ob_start();
$errormessage = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Créer un compte</h2>
    <?php if (isset($errormessage)): ?>;
    <div class="alert alert-danger" role="alert">
      <?php echo $errormessage ?>
    </div>
  <?php endif ?>
  <form action="../../src/controllers/Authcontrollers.php" method="POST" class="space-y-4">

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Prenom</label>
      <input name="prenom" type="text" placeholder="Ex: Lalla"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
      <input name="nom" type="text" placeholder="Ex:DIARRA"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
      <input name="email" type="email" placeholder="exemple@email.com"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
      <input name="password" type="password" placeholder="••••••••"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>


    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
      <input name="confirmer_password" type="password" placeholder="••••••••"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
    </div>

    <button name="button" type="submit"
      class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition duration-200">
      S'inscrire
    </button>

  </form>

  <p class="text-center text-sm text-gray-500 mt-4">
    Déjà un compte ?
    <a href="register.php" class="text-blue-600 hover:underline font-medium">Se connecter</a>
  </p>
  </div>

</body>

</html>