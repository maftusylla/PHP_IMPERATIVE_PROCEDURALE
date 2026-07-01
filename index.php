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

?>
