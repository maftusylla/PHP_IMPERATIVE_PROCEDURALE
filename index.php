 // ajouter un produit  a une categorie
 $categorieExiste =  false;
          $code = readline("veuillez saisir le code :");
             foreach ($categories as $index => $categorie ) {
               if (($categorie["code"]) === $code) {
                    $categorieExiste = true;
                    break;
         }
       } 

       if ($categorieExiste) {
        $produit =   [
                    "nom" => readline("veuillez saisir le nom : "),
                    "reference" => readline("veuillez saisir la reference : "),
                    "prix" => (int)readline("veuillez saisir le prix : "),
                    "quantite" => (int)readline("veuillez saisir la quantité : ")
                  ] ;
          $categories[$index]["produits"][] = $produit;
       }else {
          echo "Cet categorie n'existe pas ";
       }
