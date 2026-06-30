
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


?>