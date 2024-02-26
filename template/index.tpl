<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des fichiers</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="files-container">
    <nav>
      <a href="?route=logout">Se déconnecter</a>
    </nav>
    <h2>Liste des fichiers</h2>
    <ul>
      {foreach $fichiers as $fichier}
        <li class="Link">
          <a href="fichiers/{$fichier.fichier}" target='_blank'>{$fichier.fichier}</a>
        </li>
      {foreachelse}
        Pas de fichier
      {/foreach}

    </ul>
    <a href="?route=upload" class='button'>Ajouter des fichiers</a>
  </div>
</body>

</html>