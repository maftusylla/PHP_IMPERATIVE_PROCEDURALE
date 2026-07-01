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




function afficheCategorieSansProduit(array $categories): void{
    foreach ($categories as  $categorie ) {
        if (empty($categorie["produits"])) {
            echo $categorie["nom"]."\n";
        }
    }
 }
 afficheCategorieSansProduit($categories);




function saisieChaine(string $message): string {
     return readline($message);  
 }
 function rechercheCategorieParCle(array $categories, string $key, string $value): int|bool {
    foreach ($categories as $index  => $categorie ) {
        if (($categorie[$key]) === $value) {
            return $index ;
        }
    } 
    return false;
 }

  function saisieChampObligatoireEtUnique(array $categories,string $smsSaisie, string $smsError,string $key): string{
        
    $valueIsValid = true;
    do {   
        $value = saisieChaine($smsSaisie);
        $valueIsValid = champObligatoire($value,$smsError);
        if($valueIsValid){     
            $valueIsValid =rechercheCategorieParCle($categories,$key,$value);
        }
    } while (!$valueIsValid);
    return $value;
 }

 function enregistrerCategorie(): void{
    global $categories;
    $code = saisieChampObligatoireEtUnique($categories,"Entrez le code :", "champs obligatoire : ", "code");
    $nom = saisieChampObligatoireEtUnique($categories,"Entrez le nom :", "champs obligatoire : ", "nom");

    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

    $categories[] = $categorie;
 }