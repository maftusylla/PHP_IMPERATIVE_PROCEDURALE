<?php

//2-Afficher les catégories qui n'ont pas de produits

foreach($categories as $categorie){
    if (empty($categorie["produits"])) {

    echo $categorie["nom"];

    }

 }



?>