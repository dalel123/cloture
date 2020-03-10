<?php
// Connexion à la base de données devis
try {
	//$bdd_devis = new PDO('mysql:host=localhost;dbname=devis;charset=utf8', 'root', '');
	//$bdd_prospect = new PDO('mysql:host=localhost;dbname=isi2;charset=utf8', 'root', '');
	$bdd_produit = new PDO('mysql:host=localhost;dbname=db811123037;charset=utf8', 'dbo811123037', 'p%[&|Qh7V7b#U8k9YMwe44');
	//$bdd_compta = new PDO('mysql:host=localhost;dbname=comptabilite;charset=utf8', 'root', '');
}
catch(Exception $e) {
       die('Erreur : '.$e->getMessage());
}	
?>