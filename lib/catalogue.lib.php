<?php

/***Librairie de code du catalogue de produits TeeTim */

/**
 * Obtient les thèmes et les produits dans une langue et catégorie 
 * @param string $categorie Categorie de produits (ex: teeshirts)
 * @param string $codeLangue Code en 2 lettres de la langue d'affichage
 * @return array Tableau contenant les 2 tableaux contenant les thèmes 
 */
function obtenirCatalogue($categorie, $codeLangue, $critereTri)
{
    // Intégrer le fichier JSON contenant le catalogue des produits
    $catalogue = json_decode(file_get_contents("data/$categorie.json"));

    // Initialiser deux tableaux 
    $themes = [];
    $produits = [];

    foreach ($catalogue as $codeTheme => $detailTheme) {
        // echo "<p>Le code du thème est $codeTheme</p>\n";
        // print_r($detailTheme);
        // Tableau des thèmes
        $themes[$codeTheme] = $detailTheme->theme->$codeLangue;
        // Tableau des produits
        $produits = array_merge($produits, $detailTheme->produits);
    }
    //Trier les produits avant de retourner le tableau
    //Exemple : Tri par prix descendant 
    usort($produits, $critereTri);
    

    return[$themes, $produits];
}

function prixDesc($prd1, $prd2) 
{
if($prd2->prix - $prd1->prix){;
   return 1;
}
else{
    return 0;
}
}
function prixAsc($prd1, $prd2) 
{
    return $prd2->prix - $prd1->prix;
}
function ventesDecs($prd1, $prd2) 
{
    return $prd2->ventes - $prd1->ventes;
}
function aleatoire($prd1, $prd2) 
{
    $nbalea = mt_rand() / mt_getrandmax() - 0.5;
    if ($nbalea > 0) {
        return 1;
    } else {
        return -1;
    }
}
