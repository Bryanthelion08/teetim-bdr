<?php
// Tableau simple : position numérique
$fruits = [
  "pamplemousse",
  "grenade",
  "kiwi"
];
// Parcourir ce tableau avec une boucle expressive (foreach)
foreach ($fruits as $unFruit) {
  echo "<p>$unFruit</p>";
}

// Tableau "associatif" (ressemble à un objet) : position  étiquettée
$listeGroupe1 = [
  "e1052145" => "Marc Antoine",
  "e5896584" => "Héloïse Morin",
  "e2589654" => "Marie Curie"
];

foreach ($listeGroupe1 as $noDossier => $nomPersonne) {
  echo "<p><b>$nomPersonne</b> (<i>$noDossier</i>)</p>";
}
