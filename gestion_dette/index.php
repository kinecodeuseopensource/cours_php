<?php
function selectClients(): array {
    return [
        [
            "id" => 1, // Clé primaire
            "nom" => "Wane",
            "prenom" => "Baila",
            "telephone" => "777661010",
            "adresse" => "FO"
        ],
        [
            "id" => 2,
            "nom" => "Wane1",
            "prenom" => "Baila1",
            "telephone" => "777661011",
            "adresse" => "FO1"
        ]
    ];
}
function selectDettes(): array {
    return [
        [
            "id" => 1, // Clé primaire
            "client_id" => 2, // Référence à un client
            "montdette" => 5000,
            "datepret" => "12-10-2012",
            "echeance" => "12-10-2023",
            "ref" => "1234",
            "montverse" => 2500
        ],
        [
            "id" => 2,
            "client_id" => 2, // Référence à un client
            "montdette" => 5000,
            "datepret" => "12-10-2012",
            "echeance" => "12-10-2023",
            "ref" => "1235",
            "montverse" => 0
        ]
    ];
}
function selectPaiements(): array {
    return [
        [
            "id" => 1, // Clé primaire
            "dette_id" => 1, // Référence à une dette
            "ref" => "1236",
            "date" => "12-12-2012",
            "montantpaie" => 2500
        ],
        [
            "id" => 2,
            "dette_id" => 1,
            "ref" => "1237",
            "date" => "12-11-2015",
            "montantpaie" => 2500
        ]
    ];
}
function enregistrePaiement(int $client_id,int $dette_id,array $dettes, array $paiement):bool{
    foreach ($dettes as $dette) {
        if ($dette["client_id"] === $client_id) {
            if (($dette["montdette"]===$dette["montverse"])){
            echo "ce client a payé toutes ses dettes";
            return false;
            }
            else{
                if ($paiement["dette_id"] === $dette["id"]) {
                    if ($paiement["montantpaie"] === ($dette["montdette"]-$dette["montverse"])) {
                        $dette["montverse"] += $paiement["montantpaie"];
                        echo "ce client a payé toutes ses dettes";
                }
                elseif ($paiement["montantpaie"]< ($dette["montdette"]-$dette["montverse"])) {
                    $dette["montverse"] += $paiement["montantpaie"];
                    echo "ce client a payé partie de ses dettes";
                }
            insertPaiement(selectClients(),saisiepaiement());
            return true;
        }
    }
}
else {
    echo "ce client n'existe pas";
    return false;
}

}
}
//pour enregistrer une dette on verifie si le client n'a pas de dette non payé
//si le client n'a pas de dette on effectue  l'enregistrement 
//sinon on ne l'effectue pas
function enregistrerDette(int $client_id, array $dettes, array $dette):void{
    insertDettes($dettes,$dette);
}

   function selectClientByTel(array $clients,string $tel):array|null {
        foreach ($clients as  $client) {
            if ($client["telephone"] == $tel) {
               return $client;
            }
        }
        return null;
   }

   function insertClient(array &$tabClients,$client):void {
           $tabClients[]=$client;
      }
    function insertDettes(array &$dettes,array $dette):void{
        $dettes[]=$dette;
    }

    function insertPaiement(array $paiements,array $paiement):void{
        $paiements[]=$paiement;
    }



//Fonctions Services ou Use Case  ou Metier
function  enregistrerClient(array &$tabClients,array $client):bool{
    $result=  selectClientByTel($tabClients,$client["telephone"]);
    if (  $result==null ) {
       insertClient($tabClients,$client);
       return true;
    }
    return false;
 }
 function listerClient():array{
     return selectClients();
 }
function estVide(string $value):bool{
   //$value=="" ou empty($value)
   return empty($value);
}
//Fonctions Presentation
function saisieChampObligatoire(string $sms):string{
    do {
        $value= readline($sms);
    } while (estVide($value));
   return $value;
}
function telephoneIsUnique(array $clients,string $sms):string{
    do {
        $value= readline($sms);
    } while (estVide($value) || selectClientByTel($clients,$value)!=null);
    return $value;
}
function afficheClient(array $clients):void{
    if (count($clients)==0) {
        echo "Pas de client a affiche";
    }else {
        foreach ($clients as  $client) {
            echo"\n-----------------------------------------\n";
            echo "Telephone : ". $client["telephone"]."\t";
            echo "Nom : ". $client["nom"]."\t";
            echo "Prenom : ". $client["prenom"]."\t";
            echo "Adresse : ". $client["adresse"]."\t";
      }
    }
    
}
function saisieClient(array $clients):array{
    return [
        "telephone"=>telephoneIsUnique($clients,"Entrer le Telephone: "),
         "nom"=>saisieChampObligatoire(" Entrer le Nom: "),
         "prenom"=>saisieChampObligatoire(" Entrer le Prenom: "),
         "adresse"=>saisieChampObligatoire(" Entrer l'Adresse: "),
         "dettes"=>[]
    ] ;
}
function verifMontant(string $sms) {
    do {
        $montant = (float)readline($sms);
    } while ($montant<=0);
    return $montant;
}
function saisieDette(array $dettes,int $id,$ref_count,$montverse=0):array{
    return [
        "id" => count($dettes)+1,
        "client_id" => $id,
        "montdette"=>verifMontant("entrer le montant de la dette: "),
         "datepret"=>date("Y-m-d"),
         "echeance"=>saisieChampObligatoire(" Entrer la Date de l'echeance: "),
         "ref"=>$ref_count++,
         "montverse"=>$montverse,
         "paiement"=>[]
    ] ;
}
function saisiePaiement(array $paiements,$id,$ref_count_paie){
    return [
        "id" => count($paiements)+1,
        "dette_id"=>$id,
        "ref"=>$ref_count_paie,
        "date"=>date("d-m-Y"),
        "montantpaie"=>(int)readline("entrer le montant")
    ] ;
}
 function listerDettesByClient(array $dettes,array $client):void{
    foreach ($dettes as $dette) {
        if ($dette["client_id"] == $client["id"]){
            echo"\n-----------------------------------------\n";
            echo "identifiant de la dett: ".$dette["id"]."\t";
            echo "Montant de la dette : ". $dette["montdette"]."\t";
            echo "Date du pret : ". $dette["datepret"]."\t";
            echo "Date de l'echeance : ". $dette["echeance"]."\t";
            echo "Reference : ". $dette["ref"]."\t";
            echo "Montant de la dette : ". $dette["montverse"]."\t";
    }
}
 }
function menu():int{
    echo "
     1.Ajouter client \n
     2.Lister les clients\n
     3.Enregister une dette\n
     4.Quitter\n";
    return (int)readline(" Faites votre choix: ");
}
$ref_count= 0;
function principal($ref_count){
   $clients= selectClients();
   $dettes = selectDettes();
   $paiements =selectPaiements();
   do {

      $choix= menu();
      switch ($choix) {
       case 1:
        $client=saisieClient($clients);
       if (enregistrerClient($clients,$client)) {
           echo"Client Enregistrer avec success \n";
       }else {
            echo"Le numero Telephone  existe deja \n";
       }
       break;
       case 2:
        afficheClient( $clients);
       break;
       case 3:
        $tel= readline("entrer le numero de telephone");
        $client=selectClientByTel($clients,$tel);
        if ($client){
            $id = $client["id"];
            enregistrerDette($id,$dettes,saisieDette($dettes,$id,$ref_count));
            echo "Dette Enregistrer avec success \n";
        }
        else {
            echo "Le numero Telephone  n'existe pas \n";
        }
       break;
       case 4:
           $numero = readline("entrer le numero");
           $client = selectClientByTel($clients,$numero);
           if($client){
             listerDettesByClient($dettes,$client);
           } else {
             echo "Le numero Telephone  n'existe pas \n";
           }
           break;
        case 5:
            $numero = readline("entrer le numero");
            $client = selectClientByTel($clients,$numero);
            if ($client){
                saisiePaiement($paiements,$client["dette"]);
                enregistrePaiement($client["id"],$dettes,$paiement);
            }
            break;
       default:
          echo "Veullez faire un bon choix: ";
           break;
      }

   } while ($choix!=6);
}
principal($ref_count);
?>