

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

$codeValid = true;
    
   do { 
        
        $code = readline("Veuillez saisir le code :");
        if (empty($code)) {
            echo "le code est obligatoire \n";
             $codeIsValid = false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["code"]) === $code) {
                $codeIsValid = false;
                echo "ce  code existe deja \n"; 
         }
       }  
}
        


    } while (!$codeValid);
    
     $nomValid = true;
  do { 
        
        $nom = readline("veuillez saisir le nom : ");
        if (empty($nom)) {
            echo "le nom est obligatoire";
             $nomValid= false;
        }else{
            foreach ($categories as  $categorie ) {
               if (($categorie["nom"]) === $nom) {
                $nomValid = false;
                echo "ce nom existe deja "; 
         }
       }  
}
    } while (!$nomValid);

     $produits = [];
     do {
         $produit =   [
                    "nom" => readline("veuillez saisir le nom : "),
                    "reference" => readline("veuillez saisir la reference : "),
                    "prix" => (int)readline("veuillez saisir le prix : "),
                    "quantite" => (int)readline("veuillez saisir la quantité : ")
                  ];
          $produits[]= $produit;

          $choix = strtolower(readline(" voulez-vous continuez  oui-non ?"));
          
     } while ($choix === "oui");

    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" =>  $produits 
         ];

         $categories[] = $categorie;

