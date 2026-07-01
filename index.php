 <?php 
//1-Initialisation des catégories
$categories=[
                0=>[
                    "code" => "code0",
                    "nom" => "alimentaire",
                    "produits"=> 
                        [  
                            0=>[
                                    "nom" => "yaourt",
                                    "reference" => "ref1",
                                    "prix" => 1200, 
                                    "quantite" => 30
                            ], 
                            1=>[
                                    "nom"=>"cafe",
                                    "reference"=>"ref2",
                                    "prix"=>600,
                                    "quantite"=>100
                                ],
                        ],
                    ],
                1=>[
                    "code" => "code1",
                    "nom" => "cosmetique",
                    "produits" => []
                    ]

               
];

//2-Afficher les catégories qui n'ont pas de produits

foreach($categories as $categorie){
    if (empty($categorie["produits"])) {

    echo $categorie["nom"];

    }

 }


//a-saisir code et nom 

$codeValide = true;
do{
    $code=readline("veuillez saisir le code :");
    if(empty($code)){
        echo "Le code est obligatoire \n";
        $codeValide = false;

    }else{
            foreach($categories as $categorie){
                    if(($categories["code"])===$code){
                            $codeValide = false;
                            echo "Le nom ixiste dèja \n";


                }
        }
    }

}while(!$codeValide);




$nomValide = true;
do{
    $nom=readline("veuillez saisir le nom :");
    if(empty($nom)){
        echo "Le nom est obligatoire \n";
        $nomValide = false;

    }else{
            foreach($categories as $categorie){
                    if(($categories["nom"])===$nom){
                            $nomValide = false;
                            echo "Le $nom existe dèja \n";


                }
        }
    }

}while(!$nomValide);


$categorie=[
        "code"=> $code,
        "nom"=> $nom,
        "produits"=>[]
];

$categories[]=$categorie;

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
?>
