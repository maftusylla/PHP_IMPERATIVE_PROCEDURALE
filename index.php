
//a-saisir code et nom 

$codeValide = true
do{
    $code=readline("veuillez saisir le code :"):
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
}



$nomValide = true
do{
    $nom=readline("veuillez saisir le nom :"):
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
}