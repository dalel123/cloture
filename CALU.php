<?php
// D�claration des variables r�cup�rer dans le scriptCALU.js

$varTypeCALU[$i] = $_POST['typeCALU'.$i];
$varLongueurCALU[$i] = $_POST['lCALU'.$i];
$varFixationCALU[$i] = $_POST['fixationCALU'.$i];
$varCouleurCALU[$i] = $_POST['colorCALU'.$i];
$varOtherCouleurCALU[$i] = $_POST['OtherClrCALU'.$i];
$varBoiteAuxLettre[$i] = $_POST['boitelettre'.$i];
$varDMuraux[$i] = $_POST['DMuraux'.$i];
$varQteCALU[$i] = $_POST['QteCALU'.$i];
$varTVACALU[$i] = $_POST['tvaCALU'.$i];
$varDetailDescription[$i] = $_POST['detailDescriptionCALU'.$i];

// D�clarations des variables contenant les index
$varTypeIndexCALU[$i] = $_POST['typeIndexCALU'.$i];
$varFixationIndexCALU[$i] = $_POST['fixationIndexCALU'.$i];
$varCouleurIndexCALU[$i] = $_POST['colorIndexCALU'.$i];
$varIndexBoiteAuxLettre[$i] = $_POST['boiteIndexlettre'.$i];
$varTVAindexCALU[$i] = $_POST['tvaIndexCALU'.$i];

$varhauteurBVVCALU[$i] = $_POST['hauteurBVVCALU'.$i];
$varhauteurBVPVCALU[$i] = $_POST['hauteurBVPVCALU'.$i];
$varhauteurACAVLU[$i] = $_POST['hauteurACAVLU'.$i];
$varhauteurA100CAVLU[$i] = $_POST['hauteurA100CAVLU'.$i];
$varhauteurClaustraCAVLU[$i] = $_POST['hauteurClaustraCAVLU'.$i];
$varOtherClrVCALU[$i] = $_POST['OtherClrVCALU'.$i];


$varEntretoiseFinitionCALU[$i] = 0;
$varEntretoiseInterCALU[$i] = 0;
$varEntretoiseAjoureCALU[$i] = 0;
$varEntretoiseClaustraCALU[$i] = 0;

$varNbrPoteauTotCALU[$i] = 0;

// Variables pour le calcul des panneaux
$varNbrPanneauCALU[$i] = 0;

// Variables achats
$prixtotal[$i] = 0;
$varAchatBouchon[$i] = 0;
$varAchatPlatine[$i] = 0;

// Variables ventes
$varPrixM2[$i] = 0;
$varPrixVentettc[$i] = 0;
$varPrixVenteTotalttc[$i] = 0;
$varPrixVenteht[$i] = 0;  
$varPrixVenteTotalht[$i] = 0;


// On selectionne la ligne qui correspond � nos choix du type et de la fixation
$req_calu = $bdd_produit->prepare("SELECT Com, Prod, Usine, Code, Type, Fixation, PrixPoteau, PrixLame, PrixBouchon, PrixPlatine, PrixEntretoise FROM calu WHERE Type = '$varTypeCALU[$i]' AND Fixation = '$varFixationCALU[$i]'");
$req_calu->execute();
$donnees_CALU = $req_calu->fetch();



// Calcul du nombre de panneaux et du nombre des poteaux
$varNbrPanneauCALU[$i] = ceil (($varLongueurCALU[$i]/1000)/ (1.83));
$varNbrPoteauTotCALU[$i] = $varNbrPanneauCALU[$i] + 1;

// Nombre de poteau pour le calcul si on a des d�parts muraux 
$varNbrPoteauCALU[$i] = $varNbrPoteauTotCALU[$i] - $varDMuraux[$i];
	
// Selon le type de fixation, on calcule le prix des platines et bouchons
if($varFixationCALU[$i] == "Poteau a visser" || $varFixationCALU[$i] == "Poteau a sceller") {
	$varNbrPlatine[$i] = $varNbrPoteauCALU[$i];
	$varNbreBouchon[$i] = $varNbrPoteauTotCALU[$i];
	$varAchatPlatine[$i] = $varNbrPlatine[$i] * $donnees_CALU['PrixPlatine'];
    $varAchatBouchon[$i] = $varNbreBouchon[$i] * $donnees_CALU['PrixBouchon'];
    
    if($varFixationCALU[$i] == "Poteau a sceller")
        $varNbrPlatine[$i] = 0;
}
// TEST NE PAS EFFACER
/*else if($varFixationCALU[$i] == "Poteau a sceller")
{
	$varNbreBouchon[$i] = $varNbrPoteauTotCALU[$i];
	$varNbrPlatine[$i] = 0;
	$varAchatBouchon[$i] = $varNbreBouchon[$i] * $donnees_CALU['PrixBouchon'];
	$varAchatPlatine[$i] = 0;
}*/

else if($varFixationCALU[$i] == "Pose a langlaise") {
	$varNbreBouchon[$i] = $varNbrPoteauTotCALU[$i];
	$varNbrPlatine[$i] = $varNbrPoteauCALU[$i];
	$varAchatPlatine[$i] = $varNbrPlatine[$i] * $donnees_CALU['PrixPlatine'];
	$varAchatBouchon[$i] = $varNbreBouchon[$i] * $donnees_CALU['PrixBouchon'];
}

// Ranch Brise Vue, les lames changent en fonction de la hauteur
if($varTypeCALU[$i] == 'Brise vue') {
	$varNomHauteur[$i] = 'hauteurBVCALU'.$i;
	$varHauteurCALU[$i] = $_POST['hauteurBVCALU'.$i];
	
	if($varHauteurCALU[$i] == '200'){$varNbrLameParPanneau[$i] = 1;}
	else if($varHauteurCALU[$i] == '335'){$varNbrLameParPanneau[$i] = 2;}
	else if($varHauteurCALU[$i] == '470'){$varNbrLameParPanneau[$i] = 3;}
	else if($varHauteurCALU[$i] == '605'){$varNbrLameParPanneau[$i] = 4;}
	else if($varHauteurCALU[$i] == '740'){$varNbrLameParPanneau[$i] = 5;}
	else if($varHauteurCALU[$i] == '875'){$varNbrLameParPanneau[$i] = 6;}
	else if($varHauteurCALU[$i] == '1010'){$varNbrLameParPanneau[$i] = 7;}
	else if($varHauteurCALU[$i] == '1145'){$varNbrLameParPanneau[$i] = 8;}
	else if($varHauteurCALU[$i] == '1280'){$varNbrLameParPanneau[$i] = 9;}
	else if($varHauteurCALU[$i] == '1415'){$varNbrLameParPanneau[$i] = 10;}
	else if($varHauteurCALU[$i] == '1550'){$varNbrLameParPanneau[$i] = 11;}
	else if($varHauteurCALU[$i] == '1685'){$varNbrLameParPanneau[$i] = 12;}
	else if($varHauteurCALU[$i] == '1820'){$varNbrLameParPanneau[$i] = 13;}
	else if($varHauteurCALU[$i] == '1955'){$varNbrLameParPanneau[$i] = 14;}
	else if($varHauteurCALU[$i] == '2090'){$varNbrLameParPanneau[$i] = 15;}
	
	// Hauteur choisie
	$varHauteurFinal[$i] = $_POST['hauteurBVCALU'.$i];
}

// Ranch Brise vue Plein, les lames changent en fonction de la hauteur
else if($varTypeCALU[$i] == 'Brise vue plein') {
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

// Calcul du nombre de lames
$varNbrLames[$i] = $varNbrPanneauCALU[$i] * $varNbrLameParPanneau[$i];

// Calcul prix poteau
$prixachatpoteau[$i] = $varNbrPoteauCALU[$i] * $donnees_CALU['PrixPoteau'] * ($varHauteurCALU[$i] / 1000);

// Calcul prix Lames
$varAchatLames[$i] = $varNbrLames[$i] * $donnees_CALU['PrixLame'] * 1.8;

if($varTypeCALU[$i] == 'Ajoure Lame 150' || $varTypeCALU[$i] == 'Ajoure Lame 100') {
	$varEntretoiseAjoureCALU[$i] = $varNbrLames[$i] * 2;
	$varEntretoiseCALU[$i] = $varEntretoiseAjoureCALU[$i];
}

elseif($varTypeCALU[$i] == 'Brise vue plein') {
	$varEntretoiseFinitionCALU[$i] = $varNbrPanneauCALU[$i] * 4;
	$varEntretoiseCALU[$i] = $varEntretoiseFinitionCALU[$i];
}

else if($varTypeCALU[$i] == "Claustra aluminium") {
    $varEntretoiseClaustraCALU[$i] = ($varNbrLameParPanneau[$i] - 7) * 2;
    $varEntretoiseFinitionCALU[$i] = $varNbrPoteauCALU[$i] * 4;
    $varEntretoiseInterCALU[$i] = $varEntretoiseClaustraCALU[$i] * $varNbrPanneauCALU[$i];
	$varEntretoiseCALU[$i] = $varEntretoiseClaustraCALU[$i];
}

else if($varTypeCALU[$i] == "Brise vue") {
	$varEntretoiseFinitionCALU[$i] = $varNbrPanneauCALU[$i] * 4;
	$varEntretoiseInterCALU[$i] = ($varNbrLameParPanneau[$i] - 1) * $varNbrPanneauCALU[$i] * 2;
	$varEntretoiseCALU[$i] = $varEntretoiseFinitionCALU[$i] + $varEntretoiseInterCALU[$i];
}

$varAchatEntretoise[$i] = $varEntretoiseCALU[$i] * $donnees_CALU['PrixEntretoise'];

$varAchatDMuraux[$i] = $varDMuraux[$i] * 5.4;

// Calcul du prix total
$prixtotal[$i] = $prixachatpoteau[$i] + $varAchatBouchon[$i] + $varAchatPlatine[$i] + $varAchatLames[$i] + $varAchatEntretoise[$i] + $varAchatDMuraux[$i];


// on d�finit le nom du commercial en charge du produit
$varcom[$i] = $donnees_CALU['Com'];

// on d�finit le nom de la personne qui va prendre en cahrge la production
$varprod[$i] = $donnees_CALU['Prod'];

// on d�finit l'usine dans laquelle est fabriqu� le produit
$varusine[$i] = $donnees_CALU['Usine'];

// on d�finit le code du produit
$varcodearticle[$i] = $donnees_CALU['Code'];

// on d�finit le prix unitaire � l'achat HT
$varprixachatunitairehtCALU[$i]= sprintf("%.2f", $prixtotal[$i]);

// on d�finit le prix total � l'achat HT
$varprixachattotalhtCALU[$i] = sprintf("%.2f", $prixtotal[$i] * $varQteCALU[$i]);

$varPrixVenteht[$i] = round(($prixtotal[$i] / 0.55) / 0.8, 2);


// prix vente total ht en prenant en compte la couleur
if($varCouleurCALU[$i] == 'Autre couleur') {
	$varPrixVenteht[$i] = ($varPrixVenteht[$i] * 1.2);
	$varCouleurCALU[$i] = $varOtherCouleurCALU[$i];
}

if($varBoiteAuxLettre[$i] == 'Oui')
	$varPrixVenteht[$i] = $varPrixVenteht[$i] + 20;

// prix vente total HT
$varPrixVenteTotalht[$i] = $varPrixVenteht[$i] * $varQteCALU[$i];

// Prix de vente total TTC
$varPrixVenteTotalttc[$i] = $varPrixVenteTotalht[$i] * (1+($varTVACALU[$i] / 100));

$descriptionDM[$i] = "";

if($varDMuraux[$i] > 0)
	$descriptionDM[$i] = ($varDMuraux[$i] == 1) ? "dont ".$varDMuraux[$i]." d&#233;part mural" : "dont ".$varDMuraux[$i]." d&#233;part muraux";


// On adapte la description suivant si on a des poteaux � visser ou sceller, et ensuite si on a un poteau � 90 ou non
if($varFixationCALU[$i] == "Poteau a visser")
	$varDescription[$i] = array ("Type : ".$varTypeCALU[$i]."<br>", "Tron&#231;ons : <br>L ".$varLongueurCALU[$i]." mm x H ".$varHauteurFinal[$i]." mm <br>", "Quantit&#233; poteaux (incluant bouchon, entretoise et platine) : ".$varNbrPoteauTotCALU[$i]." sur platines ".$descriptionDM[$i]."", "Quantit&#233; lames : ".$varNbrLames[$i], "Couleur : ".$varCouleurCALU[$i], "Option Boite aux lettres : ".$varBoiteAuxLettre[$i]);

else if($varFixationCALU[$i] == "Poteau a sceller")
	$varDescription[$i] = array ("Type : ".$varTypeCALU[$i]."<br>", "Tron&#231;ons : <br>L ".$varLongueurCALU[$i]." mm x H ".$varHauteurFinal[$i]." mm <br>", "Quantit&#233; poteaux (incluant bouchon et entretoise) : ".$varNbrPoteauTotCALU[$i]." &#224; sceller ".$descriptionDM[$i]."", "Quantit&#233; lames : ".$varNbrLames[$i], "Couleur : ".$varCouleurCALU[$i], "Option Boite aux lettres : ".$varBoiteAuxLettre[$i]);


$varDescription[$i] = implode("<br>", $varDescription[$i]);
$varDescription[$i] = $varDescription[$i]."<br>".$varDetailDescription[$i];

$varLames[$i] = $varNbrLames[$i];
$varLames[$i] = $varLames[$i] * $varQteCALU[$i];



//Insertion du message � l'aide d'une requ�te pr�par�e
$reqPCALU[$i] = $bdd_devis->prepare('INSERT INTO devis_details (idclient, iddevis, comm, prod, usine, code, description, qte, uniht, totht, totttc, tauxtva, achattransport, achatemballage, achatproduit, achattotal, coefmarge) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$reqPCALU[$i]->execute(array(
 	$varidclient,
	$variddevis,
 	$varcom[$i],
 	$varprod[$i],
 	$varusine[$i],
 	$varcodearticle[$i],
	$varDescription[$i],
 	$varQteCALU[$i],
 	$varPrixVenteht[$i],
 	$varPrixVenteTotalht[$i],
 	$varPrixVenteTotalttc[$i],
 	$varTVACALU[$i],
	"",
 	"0",
 	$varprixachatunitairehtCALU[$i],
	$varprixachattotalhtCALU[$i],
	"0.55"
));

// On ajoute une entr�e dans la table devis_stock_value
$bdd_devis->exec('INSERT INTO devis_stock_value (idclient, iddevis, input_id, input_type, value) 
VALUES
    ("'.$varidclient.'", "'.$variddevis.'", "ajouterCALU();", "script", "0"),
    ("'.$varidclient.'", "'.$variddevis.'", "typeCALU'.$i.'", "selectedIndex","'.$varTypeIndexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "typeIndexCALU'.$i.'", "value","'.$varTypeIndexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurBVCALU'.$i.'", "style.display","'.$varhauteurBVVCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurBVVCALU'.$i.'", "value","'.$varhauteurBVVCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurBVPCALU'.$i.'", "style.display","'.$varhauteurBVPVCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurBVPVCALU'.$i.'", "value","'.$varhauteurBVPVCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurACALU'.$i.'", "style.display","'.$varhauteurACAVLU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurACAVLU'.$i.'", "value","'.$varhauteurACAVLU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurA100CALU'.$i.'", "style.display","'.$varhauteurA100CAVLU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurA100CAVLU'.$i.'", "value","'.$varhauteurA100CAVLU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurClaustraCALU'.$i.'", "style.display","'.$varhauteurClaustraCAVLU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "hauteurClaustraCAVLU'.$i.'", "value","'.$varhauteurClaustraCAVLU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "fixationCALU'.$i.'", "selectedIndex","'.$varFixationIndexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "fixationIndexCALU'.$i.'", "value","'.$varFixationIndexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "lCALU'.$i.'", "value","'.$varLongueurCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "'.$varNomHauteur[$i].'", "value","'.$varHauteurFinal[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "colorCALU'.$i.'", "selectedIndex","'.$varCouleurIndexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "colorIndexCALU'.$i.'", "value","'.$varCouleurIndexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "OtherClrCALU'.$i.'", "style.display","'.$varOtherClrVCALU[$i].'"),  
    ("'.$varidclient.'", "'.$variddevis.'", "OtherClrVCALU'.$i.'", "value","'.$varOtherClrVCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "OtherClrCALU'.$i.'", "value","'.$varOtherCouleurCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "boitelettre'.$i.'", "selectedIndex","'.$varIndexBoiteAuxLettre[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "boiteIndexlettre'.$i.'", "value","'.$varIndexBoiteAuxLettre[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "DMuraux'.$i.'", "value","'.$varDMuraux[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "QteCALU'.$i.'", "value","'.$varQteCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "tvaCALU'.$i.'", "selectedIndex","'.$varTVAindexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "detailDescriptionCALU'.$i.'", "value","'.$varDetailDescription[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "tvaIndexCALU'.$i.'", "value","'.$varTVAindexCALU[$i].'"),
    ("'.$varidclient.'", "'.$variddevis.'", "STOP", "0", "0")'
);
?>