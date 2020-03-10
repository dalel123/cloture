<?php
// Déclaration des variables


include("connectiondb.php");

$varTypeCALU = $_POST['typeId'];
$varLongueurCALU= $_POST['longueurId'];
$varFixationCALU = $_POST['fixationId'];
$varCouleurCALU = $_POST['couleurId'];
$varOtherCouleurCALU = $_POST['autreRalId'];
$varBoiteAuxLettre = $_POST['boiteId'];
$varDMuraux= $_POST['departId'];
$varQteCALU = 1;
$varHauteurCALU = $_POST['hauteurId'];
$varTVACALU= 1.2;

$varpoidLames = 0;

// on récupère le total des lames








$varEntretoiseFinitionCALU = 0;
$varEntretoiseInterCALU= 0;
$varEntretoiseAjoureCALU = 0;
$varEntretoiseClaustraCALU = 0;

$varNbrPoteauTotCALU = 0;

// Variables pour le calcul des panneaux
$varNbrPanneauCALU= 0;

// Variables achats
$prixtotal= 0;
$varAchatBouchon = 0;
$varAchatPlatine = 0;

// Variables ventes
$varPrixM2 = 0;
$varPrixVentettc = 0;
$varPrixVenteTotalttc = 0;
$varPrixVenteht = 0;
$varPrixVenteTotalht = 0;


// On selectionne la ligne qui correspond � nos choix du type et de la fixation
$req_calu = $bdd_produit->prepare("SELECT * FROM `calu` WHERE Type = '$varTypeCALU' AND Fixation = '$varFixationCALU'");
$req_calu->execute();
$donnees_CALU = $req_calu->fetch();



// Calcul du nombre de panneaux et du nombre des poteaux
$varNbrPanneauCALU = ceil (($varLongueurCALU/1000)/ (1.83));
$varNbrPoteauTotCALU= $varNbrPanneauCALU + 1;

// Nombre de poteau pour le calcul si on a des d�parts muraux
$varNbrPoteauCALU= $varNbrPoteauTotCALU - $varDMuraux;

// Selon le type de fixation, on calcule le prix des platines et bouchons
if($varFixationCALU == "Poteau a visser" || $varFixationCALU == "Poteau a sceller") {
    $varNbrPlatine= $varNbrPoteauCALU;
    $varNbreBouchon = $varNbrPoteauTotCALU;
    $varAchatPlatine = $varNbrPlatine * $donnees_CALU['PrixPlatine'];
    $varAchatBouchon = $varNbreBouchon * $donnees_CALU['PrixBouchon'];

    if($varFixationCALU == "Poteau a sceller")
        $varNbrPlatine = 0;
}
// TEST NE PAS EFFACER
/*else if($varFixationCALU[$i] == "Poteau a sceller")
{
	$varNbreBouchon[$i] = $varNbrPoteauTotCALU[$i];
	$varNbrPlatine[$i] = 0;
	$varAchatBouchon[$i] = $varNbreBouchon[$i] * $donnees_CALU['PrixBouchon'];
	$varAchatPlatine[$i] = 0;
}*/

else if($varFixationCALU == "Pose a langlaise") {
    $varNbreBouchon = $varNbrPoteauTotCALU;
    $varNbrPlatine = $varNbrPoteauCALU;
    $varAchatPlatine = $varNbrPlatine * $donnees_CALU['PrixPlatine'];
    $varAchatBouchon = $varNbreBouchon * $donnees_CALU['PrixBouchon'];
}

// Ranch Brise Vue, les lames changent en fonction de la hauteur
if($varTypeCALU == 'Brise vue') {
    $varNomHauteur = 'hauteurBVCALU';
    $varHauteurCALU = $_POST['hauteurId'];

    if($varHauteurCALU == '200'){$varNbrLameParPanneau= 1;}
    else if($varHauteurCALU == '335'){$varNbrLameParPanneau = 2;}
    else if($varHauteurCALU== '470'){$varNbrLameParPanneau = 3;}
    else if($varHauteurCALU == '605'){$varNbrLameParPanneau = 4;}
    else if($varHauteurCALU == '740'){$varNbrLameParPanneau = 5;}
    else if($varHauteurCALU == '875'){$varNbrLameParPanneau = 6;}
    else if($varHauteurCALU == '1010'){$varNbrLameParPanneau = 7;}
    else if($varHauteurCALU == '1145'){$varNbrLameParPanneau = 8;}
    else if($varHauteurCALU == '1280'){$varNbrLameParPanneau = 9;}
    else if($varHauteurCALU == '1415'){$varNbrLameParPanneau = 10;}
    else if($varHauteurCALU == '1550'){$varNbrLameParPanneau = 11;}
    else if($varHauteurCALU == '1685'){$varNbrLameParPanneau = 12;}
    else if($varHauteurCALU == '1820'){$varNbrLameParPanneau = 13;}
    else if($varHauteurCALU == '1955'){$varNbrLameParPanneau = 14;}
    else if($varHauteurCALU == '2090'){$varNbrLameParPanneau = 15;}

    // Hauteur choisie
    $varHauteurFinal = $_POST['hauteurBVCALU'];
}

// Ranch Brise vue Plein, les lames changent en fonction de la hauteur
/*else if($varTypeCALU[$i] == 'Brise vue plein') {
    $varNomHauteur[$i] = 'hauteurBVPCALU'.$i;
    $varHauteurCALU[$i] = $_POST['hauteurBVPCALU'.$i];

    if($varHauteurCALU[$i] == '200'){$varNbrLameParPanneau[$i] = 1;}
    else if($varHauteurCALU[$i] == '305'){$varNbrLameParPanneau[$i] = 2;}
    else if($varHauteurCALU[$i] == '410'){$varNbrLameParPanneau[$i] = 3;}
    else if($varHauteurCALU[$i] == '515'){$varNbrLameParPanneau[$i] = 4;}
    else if($varHauteurCALU[$i] == '620'){$varNbrLameParPanneau[$i] = 5;}
    else if($varHauteurCALU[$i] == '725'){$varNbrLameParPanneau[$i] = 6;}
    else if($varHauteurCALU[$i] == '830'){$varNbrLameParPanneau[$i] = 7;}
    else if($varHauteurCALU[$i] == '935'){$varNbrLameParPanneau[$i] = 8;}
    else if($varHauteurCALU[$i] == '1040'){$varNbrLameParPanneau[$i] = 9;}
    else if($varHauteurCALU[$i] == '1145'){$varNbrLameParPanneau[$i] = 10;}
    else if($varHauteurCALU[$i] == '1250'){$varNbrLameParPanneau[$i] = 11;}
    else if($varHauteurCALU[$i] == '1355'){$varNbrLameParPanneau[$i] = 12;}

    // Hauteur choisie
    $varHauteurFinal[$i] = $_POST['hauteurBVPCALU'.$i];
}

// Ranch Ajour�, les lames changent en fonction de la hauteur
else if($varTypeCALU[$i] == 'Ajoure Lame 150') {
    $varNomHauteur[$i] = 'hauteurACALU'.$i;
    $varHauteurCALU[$i] = $_POST['hauteurACALU'.$i];

    if($varHauteurCALU[$i] == '208'){$varNbrLameParPanneau[$i] = 1;}
    else if($varHauteurCALU[$i] == '383'){$varNbrLameParPanneau[$i] = 2;}
    else if($varHauteurCALU[$i] == '558'){$varNbrLameParPanneau[$i] = 3;}
    else if($varHauteurCALU[$i] == '733'){$varNbrLameParPanneau[$i] = 4;}
    else if($varHauteurCALU[$i] == '908'){$varNbrLameParPanneau[$i] = 5;}
    else if($varHauteurCALU[$i] == '1083'){$varNbrLameParPanneau[$i] = 6;}
    else if($varHauteurCALU[$i] == '1258'){$varNbrLameParPanneau[$i] = 7;}
    else if($varHauteurCALU[$i] == '1433'){$varNbrLameParPanneau[$i] = 8;}
    else if($varHauteurCALU[$i] == '1608'){$varNbrLameParPanneau[$i] = 9;}
    else if($varHauteurCALU[$i] == '1783'){$varNbrLameParPanneau[$i] = 10;}

    // Hauteur choisie
    $varHauteurFinal[$i] = $_POST['hauteurACALU'.$i];
}

// Ranch Ajour� Lame 100, les lames changent en fonction de la hauteur
else if($varTypeCALU[$i] == 'Ajoure Lame 100') {
    $varNomHauteur[$i] = 'hauteurA100CALU'.$i;
    $varHauteurCALU[$i] = $_POST['hauteurA100CALU'.$i];

    if($varHauteurCALU[$i] == '159'){$varNbrLameParPanneau[$i] = 1;}
    else if($varHauteurCALU[$i] == '284'){$varNbrLameParPanneau[$i] = 2;}
    else if($varHauteurCALU[$i] == '409'){$varNbrLameParPanneau[$i] = 3;}
    else if($varHauteurCALU[$i] == '534'){$varNbrLameParPanneau[$i] = 4;}
    else if($varHauteurCALU[$i] == '659'){$varNbrLameParPanneau[$i] = 5;}
    else if($varHauteurCALU[$i] == '785'){$varNbrLameParPanneau[$i] = 6;}
    else if($varHauteurCALU[$i] == '910'){$varNbrLameParPanneau[$i] = 7;}
    else if($varHauteurCALU[$i] == '1035'){$varNbrLameParPanneau[$i] = 8;}
    else if($varHauteurCALU[$i] == '1160'){$varNbrLameParPanneau[$i] = 9;}
    else if($varHauteurCALU[$i] == '1285'){$varNbrLameParPanneau[$i] = 10;}
    else if($varHauteurCALU[$i] == '1411'){$varNbrLameParPanneau[$i] = 11;}
    else if($varHauteurCALU[$i] == '1536'){$varNbrLameParPanneau[$i] = 12;}
    else if($varHauteurCALU[$i] == '1661'){$varNbrLameParPanneau[$i] = 13;}
    else if($varHauteurCALU[$i] == '1786'){$varNbrLameParPanneau[$i] = 14;}

    // Hauteur choisie
    $varHauteurFinal[$i] = $_POST['hauteurA100CALU'.$i];
}

else if($varTypeCALU[$i] == 'Claustra aluminium') {
    $varNomHauteur[$i] = 'hauteurClaustraCALU'.$i;
    $varHauteurCALU[$i] = $_POST['hauteurClaustraCALU'.$i];

    if($varHauteurCALU[$i] == '1130'){$varNbrLameParPanneau[$i] = 9;}
    else if($varHauteurCALU[$i] == '1265'){$varNbrLameParPanneau[$i] = 10;}
    else if($varHauteurCALU[$i] == '1400'){$varNbrLameParPanneau[$i] = 11;}
    else if($varHauteurCALU[$i] == '1535'){$varNbrLameParPanneau[$i] = 12;}
    else if($varHauteurCALU[$i] == '1670'){$varNbrLameParPanneau[$i] = 13;}
    else if($varHauteurCALU[$i] == '1805'){$varNbrLameParPanneau[$i] = 14;}
    else if($varHauteurCALU[$i] == '1940'){$varNbrLameParPanneau[$i] = 15;}
    else if($varHauteurCALU[$i] == '2075'){$varNbrLameParPanneau[$i] = 16;}

    // Hauteur choisie
    $varHauteurFinal[$i] = $_POST['hauteurClaustraCALU'.$i];
}
*/


// Calcul du nombre de lames
$varNbrLames = $varNbrPanneauCALU * $varNbrLameParPanneau;

// Calcul prix poteau
$prixachatpoteau = $varNbrPoteauCALU * $donnees_CALU['PrixPoteau'] * ($varHauteurCALU / 1000);

// Calcul prix Lames
$varAchatLames = $varNbrLames * $donnees_CALU['PrixLame'] * 1.8;

if($varTypeCALU == 'Ajoure Lame 150' || $varTypeCALU == 'Ajoure Lame 100') {
    $varEntretoiseAjoureCALU = $varNbrLames * 2;
    $varEntretoiseCALU = $varEntretoiseAjoureCALU;
}

elseif($varTypeCALU == 'Brise vue plein') {
    $varEntretoiseFinitionCALU = $varNbrPanneauCALU * 4;
    $varEntretoiseCALU = $varEntretoiseFinitionCALU;
}

else if($varTypeCALU == "Claustra aluminium") {
    $varEntretoiseClaustraCALU = ($varNbrLameParPanneau - 7) * 2;
    $varEntretoiseFinitionCALU = $varNbrPoteauCALU * 4;
    $varEntretoiseInterCALU = $varEntretoiseClaustraCALU * $varNbrPanneauCALU;
    $varEntretoiseCALU = $varEntretoiseClaustraCALU;
}

else if($varTypeCALU == "Brise vue") {
    $varEntretoiseFinitionCALU = $varNbrPanneauCALU * 4;
    $varEntretoiseInterCALU = ($varNbrLameParPanneau - 1) * $varNbrPanneauCALU * 2;
    $varEntretoiseCALU= $varEntretoiseFinitionCALU + $varEntretoiseInterCALU;
}

$varAchatEntretoise = $varEntretoiseCALU* $donnees_CALU['PrixEntretoise'];

$varAchatDMuraux = $varDMuraux * 5.4;

// Calcul du prix total
$prixtotal = $prixachatpoteau + $varAchatBouchon + $varAchatPlatine + $varAchatLames + $varAchatEntretoise + $varAchatDMuraux;


// on d�finit le prix unitaire � l'achat HT
$varprixachatunitairehtCALU= sprintf("%.2f", $prixtotal);

// on d�finit le prix total � l'achat HT
$varprixachattotalhtCALU = sprintf("%.2f", $prixtotal * $varQteCALU);

$varPrixVenteht = round(($prixtotal / 0.55) / 0.8, 2);


// prix vente total ht en prenant en compte la couleur

if($varCouleurCALU == 'Autre couleur') {
    $varPrixVenteht = ($varPrixVenteht * 1.2);
    $varCouleurCALU = $varOtherCouleurCALU;
}

if($varBoiteAuxLettre == 'Oui')
    $varPrixVenteht = $varPrixVenteht + 20;

// prix vente total HT
$varPrixVenteTotalht = $varPrixVenteht * $varQteCALU;



$varpoidLames = $varNbrLames;


// On définit le transport Transport
if($varpoidLames < 42)
    $varTransportht = 187.5;

else if($varpoidLames < 80)
    $varTransportht = 250;

else if($varpoidLames >= 80)
    $varTransportht = 375;


// Prix de vente total TTC
$varPrixVenteTotalttc = round(($varPrixVenteTotalht + $varTransportht) * 1.2,2);

$array_retour = array(

    "prixPoteau" =>$donnees_CALU["PrixPoteau"],
    "prixEntretoise"=>$donnees_CALU['PrixEntretoise'],
    "prixbouchon"=>$donnees_CALU['PrixBouchon'],
    "prixlame"=> $donnees_CALU['PrixLame'],
   "prixplatine"=> $donnees_CALU['PrixPlatine'],
 "type" =>$_POST['typeId'],
  "fixation"=> $_POST['fixationId'],
"longueur"=> $_POST['longueurId'],
"hauteur"=>$_POST['hauteurId'],
"couleur" => $_POST['couleurId'],
"Lettre" => $_POST['boiteId'],
"Muraux" => $_POST['departId'],
"nbrlame" => $varLames,
"PrixAchatTotal" => $varprixachattotalhtCALU,
"PrixVenteHt" => $varPrixVenteht,
"totalTTC" => $varPrixVenteTotalttc ,
);

echo json_encode($array_retour);



