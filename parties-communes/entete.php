<?php
// Inclure la librairie d'i18n.
include('lib/i18n.lib.php');

$languesDispo = obtenirLanguesDisponibles();
$langue = determinerLangue($languesDispo);
[$_ent,$_pp,$_ ] = obtenirTextesStatiques($langue, $page);
$directionEcriture = determinerDirectionEcriture($langue);


?>

<!DOCTYPE html>
<html lang="<?= $langue; ?>dir=<?"$directionEcriture;"?>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;900&family=Noto+Serif:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="Page d'accueil du concepteur de vêtements 100% fait au Québec, conçus par les étudiants du TIM à l'aide de designs produits par intelligence artificielle, et fabriqués avec des fibres 100% naturelles et biologiques.">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <script src="js/main.js"defer></script>
</head>

<body>
    <div class="conteneur">
        <header>
            <nav class="barre-haut">
                <!-- Générer dyanmiquement les boutons de choix de langue -->
                <!-- Répéter un A pour chaque langue disponible -->
                <?php for ($i = 0; $i < count($languesDispo); $i++) { ?>
                    <a class="<?= ($langue === $languesDispo[$i]) ? 'actif' : ''; ?>" href="?lan=<?= $languesDispo[$i];  ?>&dir=rtl"><?= $languesDispo[$i];  ?>
                    </a>
                <?php } ?> 
            </nav>
            <nav class="barre-logo">
                <label for="cc-btn-responsive" class="material-icons burger">menu</label>>
                <a class="logo" href="index.php"><img src="images/logo.png" alt="Accueil"></a>
                <a class="material-icons panier" href="panier.php">shopping_cart</a>
                <input class="recherche" type="search" name="motscles" placeholder="Recherche">
            </nav>
            <input type="checkbox" id="cc-btn-responsive">
            <nav class="principale">
                <label for="cc-btn-responsive" class="menu-controle material-icons">close</label>
                <a class="<?= ($page == 'teeshirts') ? 'actif' : ''; ?>; ?>" href="teeshirts.php"><?= $_ent->menuTeeshirts; ?></a>
                <a class="<?= ($page == 'casquettes') ? 'actif' : ''; ?>; ?>" href="casquettes.php"><?= $_ent->menuCasquettes; ?></a>
                <a href="hoodies.php"><?= $_ent->menuHoodies; ?></a>
                <span class="separateur"></span>
                <a href="aide.php"><?= $_ent->menuAide; ?></a>
                <a href="apropos.php"><?= $_ent->menuNous; ?></a>
            </nav>
        </header>