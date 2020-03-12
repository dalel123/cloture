
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="image/png" href="img/logo1.png" class="img-fluid" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<title>Document</title>
	</head>
	<body>
		<!-- Navigation -->
		
		<div class="container-fluid" style="padding-left: 2%;">
			<div class="row">
				<div class="col-6">
					<div class=""  style="background : rgba(255,255,255,0.70);">
						<a href="http://nao-commande.fr/configurateur/CLOTURE/"> <img src="img/logo1.png" class="img-fluid" style="width: 75px;height: 75px;"></a>
						<div class="coL-5" style="font-weight: bold;font-size: 20px;text-align: center;">
							CONFIGURATEUR BRISE VUE<br>
							<p style="font-size: 20px;font-weight: normal;"> 1. PERSONNALISEZ VOTRE MODÈLE </p>
							<p style="color:green;font-weight: bold;text-transform: uppercase;"> Suivez Nous </p>
							<a href="https://www.facebook.com/naofermetures/" class="fa fa-facebook" style="width:50px;color:green;"></a>
							<a href="https://twitter.com/NAOFermetures" class="fa fa-twitter" style="width:50px;color: green;"></a>
							<a href="https://www.instagram.com/naofermetures/?hl=fr" class="fa fa-instagram" style="width:50px;color: green;"></a>
						</div>
						
						<div class="col-xs-6">
							<form id ="configForm" action="calcul.php" method="POST"  name="formulaire">
								<div id="configHtmlForm">
									- <!-----------------------------------------------------------------------Tronçon type------------------------------------------------------------------------------------------->
									<STRONG><label style="text-transform: uppercase">DISPOSITIONS DE TRONÇON : </label></STRONG>
									<i class="fa fa-angle-down rotate-icon"></i>
									<BR>
									<!---------------------------------------------------------------------------Cloture------------------------------------------------------------------------------------------->
									
									<div class="col-xs-6" >
										<div  id="clotureId" name="cloture" onchange="longueurcloture();">
											<div class="d-flex">
												<label style="text-transform: uppercase; font-weight: bold;width:7em;">CLÔTURE DROITE</label>
												<div class="form-check" >
													
													<input  type="radio"  id="cloture1"  class="form-check-input" name="cloture" value="DROITE" checked>
													<label for="cloture1"><div class="imghover"   data-toggle="modal" data-target="#image1" ><img src="img/angle0.jpg" class="img-fluid" style="width:220px; height:220PX"  /></label>
														<p class="img__description" style="text-align:justify;padding-top:40%;font-size: 12px; text-align: center">CLÔTURE DROITE SANS ANGLE </p>
													</div>
												</div>
												<label style="text-transform: uppercase; font-weight: bold;width:5em;">En L</label>
												<div class="form-check"  >
													<input  type="radio"  id="cloture2"   class="form-check-input" name="cloture" value="EN L">
													<label for="cloture2"> <div class="imghover" data-toggle="modal" data-target="#image2"  > <img src="img/angle1.jpg"   class="img-fluid" style="width:220px; height:220px"/></label>
														<p class="img__description" style="text-align:justify;padding-top:40%;font-size: 12px;text-align: center; ">CLÔTURE EN L AVEC UN ANGLE 90° </p>
													</div>
												</div>
												<label style="text-transform: uppercase; font-weight: bold;width:5em;">En U</label>
												<div class="form-check" >
													<input  type="radio"  id="cloture3"  class="form-check-input" name="cloture" value="EN U">
													<label for="cloture3"> <div class="imghover" data-toggle="modal" data-target="#image3" ><img src="img/angle2.jpg"  class="img-fluid" style="width:220px; height:220px" /> </label>
														<p class="img__description" style="text-align:justify;padding-top:40%;font-size: 12px;text-align: center; ">CLÔTURE EN U AVEC DEUX ANGLES 90° </p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!----------------------------------------------------------------------Longueur------------------------------------------------------------------------------------------->
									
									<div class="col-xs-6" >
										<div id="tronçon22">
											<div class="d-flex">
												
												<div class="form-group">
													<label for="longueur" id="div1">Longeur 1 : </label>
													<input onblur="findTotal()"  class="txt" type="number" name="longueur" class="form-control" id="longueurId" placeholder="1000"  min="1" onchange="longueurcloture();" style="border:1px solid;" />
													<label for="longueurId" id="div2" style="display: none">Longeur 2 : </label>
													<input onblur="findTotal()" type="number" class="txt"  name="longueur" class="form-control" id="longueurId2" placeholder="1000"  min="1"  onchange="longueurcloture();"  style="display: none;border:1px solid;"/>
													<label for="longueurId2" id="div3" style="display: none"> Longeur 3 : </label>
													<input onblur="findTotal()" type="number" class="txt"  name="longueur" class="form-control" id="longueurId3" placeholder="1000"  min="1"  onchange="longueurcloture();" style="display: none;border:1px solid;"/>
													
													<label  id="div3">Totale De Vos Longueurs : </label>
													<input type="number" name="total" id="total" style="border:1px solid;"/>
													
												</div>
											</div>
											
											
											<!----------------------------------------------------------------------Hauteur------------------------------------------------------------------------------------------->
											<div class="form-group">
												<STRONG><label for="hauteur" style="text-transform: uppercase;">Hauteur</label></STRONG>
												<select name="hauteur" id="hauteur_0" class="custom-select" required style="border:1px solid;"">
												<option value="200" name="hauteur">200</option>
												<option value="335" name="hauteur" >335</option>
												<option value="470" name="hauteur">470</option>
												<option value="605" name="hauteur" >605</option>
												<option value="740" name="hauteur">740</option>
												<option value="875" name="hauteur">875</option>
												<option value="1010" name="hauteur">1010</option>
												<option value="1145" name="hauteur">1145</option>
												<option value="1280" name="hauteur">1280</option>
												<option value="1415" name="hauteur">1415</option>
												<option value="1550" name="hauteur">1550</option>
												<option value="1685" name="hauteur">1685</option>
												<option value="1820" name="hauteur">1820</option>
												<option value="1955" name="hauteur">1955</option>
												<option value="2090" name="hauteur">2090</option>
											</select>
										</div>
										<BR>
									</div>
								</div>
								<!----------------------------------------------------------------------------------------------------Nombre tronçon---------------------------------------------------------------------------------------------------------->
								
								<div class="form-group">
									<div class="tronçon">
										<label><strong>Nombre des tronçons :</strong> </label>
										
										<input type="number" id="member" name="member" value="" id="tronçonAjout" onkeyup="addFields();"><br />
									<div type="number"  id="container"/></div>
								</div>
							</div>
							
							
							<div class="col-xs-6" style="margin-left:10%;">
								
								<a href="javascript:void(0);" class="add_button btn btn-outline-success"   style="width: 40EM;"  title="Add field" id="hider">Ajouter Un Tronçon</a>
								
							</div>
							
							
							
							<BR>
							<BR>
							
							
							
							
							
							
							
							<!----------------------------------------------------------------------Fixation------------------------------------------------------------------------------------------->
							<div class="col-xs-6" >
								<STRONG><label style="text-transform: uppercase">choississez Votre type de FIXATION </label></STRONG>
								
								<div  id="fixationId"  name="fixation">
									<div class="d-flex">
										<LABEL style="text-transform: uppercase; font-weight: bold;width:9em;">À Visser</LABEL>
										<BR>
										<div class="form-check" >
											<div class="tooltip1">
                                                <input  type="radio"  id="fixation1"  class="form-check-input" name="fixation" value="Poteau a visser" >
                                                <label for="fixation1"> <img src="img/sur%20platine.jpg" class="img-fluid" style="width:220px; height:220PX"  data-toggle="modal" data-target="#image4" /></label>
												<span style="padding: 10%;text-align: center;">
													Pose sur dessus de muret plat
												</span>
											</div>
										</div>
										<LABEL  style="text-transform: uppercase;font-weight: bold;width:9em;"> À Sceller</LABEL>
										<div class="form-check">
											<div class="tooltip1">
                                                <input  type="radio"  id="fixation2"   class="form-check-input" name="fixation" value="Poteau a sceller">
                                                <label for="fixation2"> <img src="img/à%20sceller.jpg"   class="img-fluid"  data-toggle="modal" data-target="#image5" style="width:220px; height:220px"/></label>
												<span style="padding: 9%;text-align: center;">
													Poteau rallongé pour fixer dans le muret
												</span>
											</div>
										</div>
										<LABEL style="text-transform: uppercase;font-weight: bold;width:9em;"> À l'Anglaise</LABEL>
										<div class="form-check" >
											<div class="tooltip1">
                                                <input  type="radio"  id="fixation3"  class="form-check-input" name="fixation" value="Pose a langlaise">
                                                <label for="fixation3"> <img src="img/à%20l'anglaise.jpg"  class="img-fluid"  data-toggle="modal" data-target="#image6" style="width:220px; height:220px" /> </label>
												<span style="padding: 8%;text-align: center;">
													Pose en applique contre le bord du muret
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<BR> <!-------------------------------------------------------------------------------------Départ Mureau------------------------------------------------------------------------------------------->
							
							<div class="form-group">
								<div class="tooltip1">
									<strong> <label for="nbmuraux" style="text-transform: uppercase;">Nombre de départ muraux :</label></strong>
									<img src="img/départ%20mural.jpg" style="width:200px;height:200px;"/>
                                    <input name="nbmuraux" type="number" class="form-control" id="nbmurauxId" placeholder="0"  min="0" max="2" style="border:1px solid;" >
									<span><img src="img/poteau.png">
										Demi Poteau-Départ Contre Un Mur
									</span>
								</div>
							</div>
							
							
							
							
						</div>
						
						<!------------------------------------------------------------------------------------Ajouter tronçon------------------------------------------------------------------------------------------->
						
						
						<!----------------------------------------------------------------------couleur---------------------------------------------------------------------------------------------------------------->
						
						
						<div style="margin: 4%;">
							<h5 class="card-title" style="font-size: 15px;text-transform: uppercase;font-weight: bold;width:15em;text-align: center;">AJOUTEZ DES OPTIONS : </h5>
							<div class="card" style="width: 38rem;align-content: center">
								
								<div class="card-body">
									<strong><label class="mb-0" STYLE="color:black;" data-toggle="tooltip" data-placement="top" title="CHOISSISEZ VOTRE COULEUR">
										CHOISSISEZ VOTRE COULEUR :
										
									</label></strong>
									
									<div class="mt-2" >
										<div  class="color" id="couleurId" name="couleur">
											<div class="d-flex">
												<div class="form-check" >
													<input  type="radio"  id="couleur1"  class="form-check-input" name="couleur" value="blanc"  onchange="changeCouleur();">
													<label for="couleur1"><img src="img/blanc.png"  class="img-fluid" style="border:1px solid black;border-radius: 20px;" /> </label>
												</div>
												<div class="form-check"  >
													<input  type="radio"  id="couleur2"   class="form-check-input" name="couleur" value="gris" onchange="changeCouleur();">
													<label for="couleur2">  <img src="img/gris.png"  class="img-fluid"/></label>
												</div>
												
											</div>
										</div>
										
										
										<div class="mt-2 mb-5">
											<div class="btn btn-outline-secondary" onclick="ral();">Renseignez Une Ral Spécifique</div>
											<br>
											<div id="divral" style="display: none;padding:0.2%;">
												<div id="autreralId" name="autreralId " onchange="couleurral();"></div>
												
												<select id="coul"  class="colorer" onchange="prixinitiale();couleurral();tabRal();">
													<option value="" >Sélectionnez Votre Couleur</option>
													<option value="Ral 1000 - Beige vert" id="ral_1000" style="background-color:#ccc188;">
													Ral 1000 - Beige vert										</option>
													<option value="Ral 1001 - Beige" id="ral_1001" style="background-color:#ceb487;">
													Ral 1001 - Beige										</option>
													<option value="Ral 1002 - Jaune sable" id="ral_1002" style="background-color:#d0b173;">
													Ral 1002 - Jaune sable										</option>
													<option value="Ral 1003 - Jaune de sécurité" id="ral_1003" style="background-color:#f2ad00;">
													Ral 1003 - Jaune de sécurité										</option>
													<option value="Ral 1004 - Jaune or" id="ral_1004" style="background-color:#e4a700;">
													Ral 1004 - Jaune or										</option>
													<option value="Ral 1005 - Jaune miel" id="ral_1005" style="background-color:#c79600;">
													Ral 1005 - Jaune miel										</option>
													<option value="Ral 1006 - Jaune maïs" id="ral_1006" style="background-color:#d99300;">
													Ral 1006 - Jaune maïs										</option>
													<option value="Ral 1007 - Jaune narcisse" id="ral_1007" style="background-color:#e69400;">
													Ral 1007 - Jaune narcisse										</option>
													<option value="Ral 1011 - Beige brun" id="ral_1011" style="background-color:#af8552;">
													Ral 1011 - Beige brun										</option>
													<option value="Ral 1012 - Jaune citron" id="ral_1012" style="background-color:#d8ba2e;">
													Ral 1012 - Jaune citron										</option>
													<option value="Ral 1013 - Blanc perlé" id="ral_1013" style="background-color:#e5dfcc;">
													Ral 1013 - Blanc perlé										</option>
													<option value="Ral 1014 - Ivoire" id="ral_1014" style="background-color:#dfcea1;">
													Ral 1014 - Ivoire										</option>
													<option value="Ral 1015 - Ivoire clair" id="ral_1015" style="background-color:#e6d9bd;">
													Ral 1015 - Ivoire clair										</option>
													<option value="Ral 1016 - Jaune soufre" id="ral_1016" style="background-color:#ecea41;">
													Ral 1016 - Jaune soufre										</option>
													<option value="Ral 1017 - Jaune safran" id="ral_1017" style="background-color:#f6b256;">
													Ral 1017 - Jaune safran										</option>
													<option value="Ral 1018 - Jaune zinc" id="ral_1018" style="background-color:#fdda38;">
													Ral 1018 - Jaune zinc										</option>
													<option value="Ral 1019 - Beige gris" id="ral_1019" style="background-color:#a6937b;">
													Ral 1019 - Beige gris										</option>
													<option value="Ral 1020 - Jaune olive" id="ral_1020" style="background-color:#a09465;">
													Ral 1020 - Jaune olive										</option>
													<option value="Ral 1021 - Jaune colza" id="ral_1021" style="background-color:#f2c000;">
													Ral 1021 - Jaune colza										</option>
													<option value="Ral 1023 - Jaune trafic" id="ral_1023" style="background-color:#f2bf00;">
													Ral 1023 - Jaune trafic										</option>
													<option value="Ral 1024 - Jaune ocre" id="ral_1024" style="background-color:#b89650;">
													Ral 1024 - Jaune ocre										</option>
													<option value="Ral 1027 - Jaune curry" id="ral_1027" style="background-color:#a4861a;">
													Ral 1027 - Jaune curry										</option>
													<option value="Ral 1028 - Jaune melon" id="ral_1028" style="background-color:#ffa600;">
													Ral 1028 - Jaune melon										</option>
													<option value="Ral 1032 - Jaune genêt" id="ral_1032" style="background-color:#e2ac00;">
													Ral 1032 - Jaune genêt										</option>
													<option value="Ral 1033 - Jaune dahlia" id="ral_1033" style="background-color:#f7a11f;">
													Ral 1033 - Jaune dahlia										</option>
													<option value="Ral 1034 - Jaune pastel" id="ral_1034" style="background-color:#eba557;">
													Ral 1034 - Jaune pastel										</option>
													<option value="Ral 2000 - Orangé jaune" id="ral_2000" style="background-color:#d97604;">
													Ral 2000 - Orangé jaune										</option>
													<option value="Ral 2001 - Orangé rouge" id="ral_2001" style="background-color:#bb4926;">
													Ral 2001 - Orangé rouge										</option>
													<option value="Ral 2002 - Orangé sang" id="ral_2002" style="background-color:#c13524;">
													Ral 2002 - Orangé sang										</option>
													<option value="Ral 2003 - Orangé pastel" id="ral_2003" style="background-color:#f97a31;">
													Ral 2003 - Orangé pastel										</option>
													<option value="Ral 2004 - Orangé pur" id="ral_2004" style="background-color:#e8540d;">
													Ral 2004 - Orangé pur										</option>
													<option value="Ral 2008 - Orangé rouge clair" id="ral_2008" style="background-color:#f46f29;">
													Ral 2008 - Orangé rouge clair										</option>
													<option value="Ral 2009 - Orangé trafic" id="ral_2009" style="background-color:#db5316;">
													Ral 2009 - Orangé trafic										</option>
													<option value="Ral 2010 - Orangé de sécurité" id="ral_2010" style="background-color:#d55d23;">
													Ral 2010 - Orangé de sécurité										</option>
													<option value="Ral 2011 - Orangé foncé" id="ral_2011" style="background-color:#ea7625;">
													Ral 2011 - Orangé foncé										</option>
													<option value="Ral 2012 - Orangé saumon" id="ral_2012" style="background-color:#d6654e;">
													Ral 2012 - Orangé saumon										</option>
													<option value="Ral 2100 - Noir profond" id="ral_2100" style="background-color:#151619;">
													Ral 2100 - Noir profond										</option>
													<option value="Ral 3000 - Rouge feu" id="ral_3000" style="background-color:#a02725;">
													Ral 3000 - Rouge feu										</option>
													<option value="Ral 3001 - Rouge de sécurité" id="ral_3001" style="background-color:#a0001c;">
													Ral 3001 - Rouge de sécurité										</option>
													<option value="Ral 3002 - Rouge carmin" id="ral_3002" style="background-color:#991424;">
													Ral 3002 - Rouge carmin										</option>
													<option value="Ral 3003 - Rouge rubis" id="ral_3003" style="background-color:#870a24;">
													Ral 3003 - Rouge rubis										</option>
													<option value="Ral 3004 - Rouge pourpre" id="ral_3004" style="background-color:#6c1b2a;">
													Ral 3004 - Rouge pourpre										</option>
													<option value="Ral 3005 - Rouge vin" id="ral_3005" style="background-color:#581e29;">
													Ral 3005 - Rouge vin										</option>
													<option value="Ral 3007 - Rouge noir" id="ral_3007" style="background-color:#402226;">
													Ral 3007 - Rouge noir										</option>
													<option value="Ral 3009 - Rouge oxyde" id="ral_3009" style="background-color:#6d312b;">
													Ral 3009 - Rouge oxyde										</option>
													<option value="Ral 3011 - Rouge brun" id="ral_3011" style="background-color:#791f24;">
													Ral 3011 - Rouge brun										</option>
													<option value="Ral 3012 - Rouge beige" id="ral_3012" style="background-color:#c68873;">
													Ral 3012 - Rouge beige										</option>
													<option value="Ral 3013 - Rouge tomate" id="ral_3013" style="background-color:#992a28;">
													Ral 3013 - Rouge tomate										</option>
													<option value="Ral 3014 - Vieux rose" id="ral_3014" style="background-color:#cf7278;">
													Ral 3014 - Vieux rose										</option>
													<option value="Ral 3015 - Rose clair" id="ral_3015" style="background-color:#e3a0ac;">
													Ral 3015 - Rose clair										</option>
													<option value="Ral 3016 - Rouge corail" id="ral_3016" style="background-color:#ab392d;">
													Ral 3016 - Rouge corail										</option>
													<option value="Ral 3017 - Rosé" id="ral_3017" style="background-color:#cc515e;">
													Ral 3017 - Rosé										</option>
													<option value="Ral 3018 - Rouge fraise" id="ral_3018" style="background-color:#ca3f51;">
													Ral 3018 - Rouge fraise										</option>
													<option value="Ral 3020 - Rouge trafic" id="ral_3020" style="background-color:#bf111b;">
													Ral 3020 - Rouge trafic										</option>
													<option value="Ral 3022 - Rouge saumon" id="ral_3022" style="background-color:#d36b56;">
													Ral 3022 - Rouge saumon										</option>
													<option value="Ral 3027 - Rouge framboise" id="ral_3027" style="background-color:#b01d42;">
													Ral 3027 - Rouge framboise										</option>
													<option value="Ral 3031 - Rouge oriental" id="ral_3031" style="background-color:#a7323e;">
													Ral 3031 - Rouge oriental										</option>
													<option value="Ral 4001 - Lilas rouge" id="ral_4001" style="background-color:#865d86;">
													Ral 4001 - Lilas rouge										</option>
													<option value="Ral 4002 - Violet rouge" id="ral_4002" style="background-color:#8f3f51;">
													Ral 4002 - Violet rouge										</option>
													<option value="Ral 4003 - Violet bruyère" id="ral_4003" style="background-color:#ca5b91;">
													Ral 4003 - Violet bruyère										</option>
													<option value="Ral 4004 - Violet bordeaux" id="ral_4004" style="background-color:#69193b;">
													Ral 4004 - Violet bordeaux										</option>
													<option value="Ral 4005 - Lilas bleu" id="ral_4005" style="background-color:#7e63a1;">
													Ral 4005 - Lilas bleu										</option>
													<option value="Ral 4006 - Pourpre trafic" id="ral_4006" style="background-color:#912d76;">
													Ral 4006 - Pourpre trafic										</option>
													<option value="Ral 4007 - Violet pourpre" id="ral_4007" style="background-color:#48233e;">
													Ral 4007 - Violet pourpre										</option>
													<option value="Ral 4008 - Violet de sécurité" id="ral_4008" style="background-color:#853d7d;">
													Ral 4008 - Violet de sécurité										</option>
													<option value="Ral 4009 - Violet pastel" id="ral_4009" style="background-color:#9d8493;">
													Ral 4009 - Violet pastel										</option>
													<option value="Ral 5000 - Bleu violet" id="ral_5000" style="background-color:#2f4a71;">
													Ral 5000 - Bleu violet										</option>
													<option value="Ral 5001 - Bleu vert" id="ral_5001" style="background-color:#0e4666;">
													Ral 5001 - Bleu vert										</option>
													<option value="Ral 5002 - Bleu outremer" id="ral_5002" style="background-color:#162e7b;">
													Ral 5002 - Bleu outremer										</option>
													<option value="Ral 5003 - Bleu saphir" id="ral_5003" style="background-color:#193058;">
													Ral 5003 - Bleu saphir										</option>
													<option value="Ral 5004 - Bleu noir" id="ral_5004" style="background-color:#1a1d2a;">
													Ral 5004 - Bleu noir										</option>
													<option value="Ral 5005 - Bleu de sécurité" id="ral_5005" style="background-color:#004389;">
													Ral 5005 - Bleu de sécurité										</option>
													<option value="Ral 5007 - Bleu brillant" id="ral_5007" style="background-color:#38618c;">
													Ral 5007 - Bleu brillant										</option>
													<option value="Ral 5008 - Bleu gris" id="ral_5008" style="background-color:#2d3944;">
													Ral 5008 - Bleu gris										</option>
													<option value="Ral 5009 - Bleu azur" id="ral_5009" style="background-color:#245878;">
													Ral 5009 - Bleu azur										</option>
													<option value="Ral 5010 - Bleu gentiane" id="ral_5010" style="background-color:#00427f;">
													Ral 5010 - Bleu gentiane										</option>
													<option value="Ral 5011 - Bleu acier" id="ral_5011" style="background-color:#1a2740;">
													Ral 5011 - Bleu acier										</option>
													<option value="Ral 5012 - Bleu clair" id="ral_5012" style="background-color:#2781bb;">
													Ral 5012 - Bleu clair										</option>
													<option value="Ral 5013 - Bleu cobalt" id="ral_5013" style="background-color:#202e53;">
													Ral 5013 - Bleu cobalt										</option>
													<option value="Ral 5014 - Bleu pigeon" id="ral_5014" style="background-color:#667b9a;">
													Ral 5014 - Bleu pigeon										</option>
													<option value="Ral 5015 - Bleu ciel" id="ral_5015" style="background-color:#0071b5;">
													Ral 5015 - Bleu ciel										</option>
													<option value="Ral 5017 - Ral 5017" id="ral_5017" style="background-color:#004c91;">
													Ral 5017 - Ral 5017										</option>
													<option value="Ral 5018 - Bleu turquoise" id="ral_5018" style="background-color:#138992;">
													Ral 5018 - Bleu turquoise										</option>
													<option value="Ral 5019 - Bleu capri" id="ral_5019" style="background-color:#005688;">
													Ral 5019 - Bleu capri										</option>
													<option value="Ral 5020 - Bleu océan" id="ral_5020" style="background-color:#00747d;">
													Ral 5020 - Bleu océan										</option>
													<option value="Ral 5021 - Bleu eau" id="ral_5021" style="background-color:#00747d;">
													Ral 5021 - Bleu d'eau										</option>
													<option value="Ral 5022 - Bleu nocturne" id="ral_5022" style="background-color:#28275a;">
													Ral 5022 - Bleu nocturne										</option>
													<option value="Ral 5023 - Bleu distant" id="ral_5023" style="background-color:#486591;">
													Ral 5023 - Bleu distant										</option>
													<option value="Ral 5024 - Bleu pastel" id="ral_5024" style="background-color:#6391b0;">
													Ral 5024 - Bleu pastel										</option>
													<option value="Ral 6000 - Vert platine" id="ral_6000" style="background-color:#327663;">
													Ral 6000 - Vert platine										</option>
													<option value="Ral 6001 - Vert émeraude" id="ral_6001" style="background-color:#266d3b;">
													Ral 6001 - Vert émeraude										</option>
													<option value="Ral 6002 - Vert feuillage" id="ral_6002" style="background-color:#276230;">
													Ral 6002 - Vert feuillage										</option>
													<option value="Ral 6003 - Vert olive" id="ral_6003" style="background-color:#4e553d;">
													Ral 6003 - Vert olive										</option>
													<option value="Ral 6004 - Vert bleu" id="ral_6004" style="background-color:#004547;">
													Ral 6004 - Vert bleu										</option>
													<option value="Ral 6005 - Vert mousse" id="ral_6005" style="background-color:#0e4438;">
													Ral 6005 - Vert mousse										</option>
													<option value="Ral 6006 - Olive gris" id="ral_6006" style="background-color:#3b3d33;">
													Ral 6006 - Olive gris										</option>
													<option value="Ral 6007 - Vert bouteille" id="ral_6007" style="background-color:#2b3626;">
													Ral 6007 - Vert bouteille										</option>
													<option value="Ral 6008 - Vert brun" id="ral_6008" style="background-color:#302f22;">
													Ral 6008 - Vert brun										</option>
													<option value="Ral 6009 - Vert sapin" id="ral_6009" style="background-color:#213529;">
													Ral 6009 - Vert sapin										</option>
													<option value="Ral 6010 - Vert herbe" id="ral_6010" style="background-color:#426e38;">
													Ral 6010 - Vert herbe										</option>
													<option value="Ral 6011 - Vert réséda" id="ral_6011" style="background-color:#68825f;">
													Ral 6011 - Vert réséda										</option>
													<option value="Ral 6012 - Vert noir" id="ral_6012" style="background-color:#293a37;">
													Ral 6012 - Vert noir										</option>
													<option value="Ral 6013 - Vert jonc" id="ral_6013" style="background-color:#76785b;">
													Ral 6013 - Vert jonc										</option>
													<option value="Ral 6014 - Olive jaune" id="ral_6014" style="background-color:#443f31;">
													Ral 6014 - Olive jaune										</option>
													<option value="Ral 6015 - Olive noir" id="ral_6015" style="background-color:#383b34;">
													Ral 6015 - Olive noir										</option>
													<option value="Ral 6016 - Vert turquoise" id="ral_6016" style="background-color:#00664f;">
													Ral 6016 - Vert turquoise										</option>
													<option value="Ral 6017 - Vert mai" id="ral_6017" style="background-color:#4d8542;">
													Ral 6017 - Vert mai										</option>
													<option value="Ral 6018 - Vert jaune" id="ral_6018" style="background-color:#4b9b3e;">
													Ral 6018 - Vert jaune										</option>
													<option value="Ral 6019 - Vert blanc" id="ral_6019" style="background-color:#b2d8b4;">
													Ral 6019 - Vert blanc										</option>
													<option value="Ral 6020 - Oxyde chromique" id="ral_6020" style="background-color:#394937;">
													Ral 6020 - Oxyde chromique										</option>
													<option value="Ral 6021 - Vert pâle" id="ral_6021" style="background-color:#87a180;">
													Ral 6021 - Vert pâle										</option>
													<option value="Ral 6022 - Olive brun" id="ral_6022" style="background-color:#3c372a;">
													Ral 6022 - Olive brun										</option>
													<option value="Ral 6024 - Vert trafic" id="ral_6024" style="background-color:#008455;">
													Ral 6024 - Vert trafic										</option>
													<option value="Ral 6025 - Vert fougère" id="ral_6025" style="background-color:#56723d;">
													Ral 6025 - Vert fougère										</option>
													<option value="Ral 6026 - Vert opale" id="ral_6026" style="background-color:#005c54;">
													Ral 6026 - Vert opale										</option>
													<option value="Ral 6027 - Vert clair" id="ral_6027" style="background-color:#77bbbd;">
													Ral 6027 - Vert clair										</option>
													<option value="Ral 6028 - Vert pin" id="ral_6028" style="background-color:#2e554b;">
													Ral 6028 - Vert pin										</option>
													<option value="Ral 6029 - Vert menthe" id="ral_6029" style="background-color:#006f43;">
													Ral 6029 - Vert menthe										</option>
													<option value="Ral 6032 - Vert de sécurité" id="ral_6032" style="background-color:#00855a;">
													Ral 6032 - Vert de sécurité										</option>
													<option value="Ral 6033 - Turquoise menthe" id="ral_6033" style="background-color:#3f8884;">
													Ral 6033 - Turquoise menthe										</option>
													<option value="Ral 6034 - Turquoise pastel" id="ral_6034" style="background-color:#75adb1;">
													Ral 6034 - Turquoise pastel										</option>
													<option value="Ral 7000 - Gris petit-gris" id="ral_7000" style="background-color:#798790;">
													Ral 7000 - Gris petit-gris										</option>
													<option value="Ral 7001 - Gris argent" id="ral_7001" style="background-color:#8c969f;">
													Ral 7001 - Gris argent										</option>
													<option value="Ral 7002 - Gris olive" id="ral_7002" style="background-color:#827d67;">
													Ral 7002 - Gris olive										</option>
													<option value="Ral 7003 - Gris mousse" id="ral_7003" style="background-color:#79796c;">
													Ral 7003 - Gris mousse										</option>
													<option value="Ral 7004 - Gris de sécurité" id="ral_7004" style="background-color:#999a9f;">
													Ral 7004 - Gris de sécurité										</option>
													<option value="Ral 7005 - Gris souris" id="ral_7005" style="background-color:#6d7270;">
													Ral 7005 - Gris souris										</option>
													<option value="Ral 7006 - Gris beige" id="ral_7006" style="background-color:#766a5d;">
													Ral 7006 - Gris beige										</option>
													<option value="Ral 7008 - Gris kaki" id="ral_7008" style="background-color:#756444;">
													Ral 7008 - Gris kaki										</option>
													<option value="Ral 7009 - Gris vert" id="ral_7009" style="background-color:#585e55;">
													Ral 7009 - Gris vert										</option>
													<option value="Ral 7010 - Gris tente" id="ral_7010" style="background-color:#565957;">
													Ral 7010 - Gris tente										</option>
													<option value="Ral 7011 - Gris fer" id="ral_7011" style="background-color:#525a60;">
													Ral 7011 - Gris fer										</option>
													<option value="Ral 7012 - Gris basalte" id="ral_7012" style="background-color:#575e62;">
													Ral 7012 - Gris basalte										</option>
													<option value="Ral 7013 - Gris brun" id="ral_7013" style="background-color:#585346;">
													Ral 7013 - Gris brun										</option>
													<option value="Ral 7015 - Gris ardoise" id="ral_7015" style="background-color:#4c5057;">
													Ral 7015 - Gris ardoise										</option>
													<option value="Ral 7021 - Gris noir" id="ral_7021" style="background-color:#2e3236;">
													Ral 7021 - Gris noir										</option>
													<option value="Ral 7022 - Gris terre dombre" id="ral_7022" style="background-color:#464644;">
													Ral 7022 - Gris terre d'ombre										</option>
													<option value="Ral 7023 - Gris béton" id="ral_7023" style="background-color:#7f8279;">
													Ral 7023 - Gris béton										</option>
													<option value="Ral 7024 - Gris graphite" id="ral_7024" style="background-color:#484b52;">
													Ral 7024 - Gris graphite										</option>
													<option value="Ral 7026 - Gris granit" id="ral_7026" style="background-color:#354044;">
													Ral 7026 - Gris granit										</option>
													<option value="Ral 7030 - Gris pierre" id="ral_7030" style="background-color:#919089;">
													Ral 7030 - Gris pierre										</option>
													<option value="Ral 7031 - Gris bleu" id="ral_7031" style="background-color:#5b686f;">
													Ral 7031 - Gris bleu										</option>
													<option value="Ral 7032 - Gris silex" id="ral_7032" style="background-color:#b5b5a7;">
													Ral 7032 - Gris silex										</option>
													<option value="Ral 7033 - Gris ciment" id="ral_7033" style="background-color:#7a8376;">
													Ral 7033 - Gris ciment										</option>
													<option value="Ral 7034 - Gris jaune" id="ral_7034" style="background-color:#928d75;">
													Ral 7034 - Gris jaune										</option>
													<option value="Ral 7035 - Gris clair" id="ral_7035" style="background-color:#c4caca;">
													Ral 7035 - Gris clair										</option>
													<option value="Ral 7036 - Gris platine" id="ral_7036" style="background-color:#949294;">
													Ral 7036 - Gris platine										</option>
													<option value="Ral 7037 - Gris poussière" id="ral_7037" style="background-color:#7e8082;">
													Ral 7037 - Gris poussière										</option>
													<option value="Ral 7038 - Gris agate" id="ral_7038" style="background-color:#b0b3af;">
													Ral 7038 - Gris agate										</option>
													<option value="Ral 7039 - Gris quartz" id="ral_7039" style="background-color:#6d6b64;">
													Ral 7039 - Gris quartz										</option>
													<option value="Ral 7040 - Gris fenêtre" id="ral_7040" style="background-color:#9aa0a7;">
													Ral 7040 - Gris fenêtre										</option>
													<option value="Ral 7042 - Gris trafic A" id="ral_7042" style="background-color:#929899;">
													Ral 7042 - Gris trafic A										</option>
													<option value="Ral 7043 - Gris trafic B" id="ral_7043" style="background-color:#505455;">
													Ral 7043 - Gris trafic B										</option>
													<option value="Ral 7044 - Gris soie" id="ral_7044" style="background-color:#bab9b0;">
													Ral 7044 - Gris soie										</option>
													<option value="Ral 7045 - Télé gris 1" id="ral_7045" style="background-color:#909090;">
													Ral 7045 - Télé gris 1										</option>
													<option value="Ral 7046 - Télé gris 2" id="ral_7046" style="background-color:#82898f;">
													Ral 7046 - Télé gris 2										</option>
													<option value="Ral 7047 - Télé gris 4" id="ral_7047" style="background-color:#d0d0d0;">
													Ral 7047 - Télé gris 4										</option>
													<option value="Ral 7048 - Gris souris nacré" id="ral_7048" style="background-color:#898176;">
													Ral 7048 - Gris souris nacré										</option>
													<option value="Ral 8000 - Brun vert" id="ral_8000" style="background-color:#8b7045;">
													Ral 8000 - Brun vert										</option>
													<option value="Ral 8001 - Terre de Sienne" id="ral_8001" style="background-color:#9c6935;">
													Ral 8001 - Terre de Sienne										</option>
													<option value="Ral 8002 - Brun de sécurité" id="ral_8002" style="background-color:#774c3b;">
													Ral 8002 - Brun de sécurité										</option>
													<option value="Ral 8003 - Brun argile" id="ral_8003" style="background-color:#815333;">
													Ral 8003 - Brun argile										</option>
													<option value="Ral 8004 - Brun cuivré" id="ral_8004" style="background-color:#904e3b;">
													Ral 8004 - Brun cuivré										</option>
													<option value="Ral 8007 - Brun fauve" id="ral_8007" style="background-color:#6b442a;">
													Ral 8007 - Brun fauve										</option>
													<option value="Ral 8008 - Brun olive" id="ral_8008" style="background-color:#735230;">
													Ral 8008 - Brun olive										</option>
													<option value="Ral 8011 - Brun noisette" id="ral_8011" style="background-color:#5b3927;">
													Ral 8011 - Brun noisette										</option>
													<option value="Ral 8012 - Brun rouge" id="ral_8012" style="background-color:#64312a;">
													Ral 8012 - Brun rouge										</option>
													<option value="Ral 8014 - Brun sépia" id="ral_8014" style="background-color:#49372a;">
													Ral 8014 - Brun sépia										</option>
													<option value="Ral 8015 - Marron" id="ral_8015" style="background-color:#5a2e2a;">
													Ral 8015 - Marron										</option>
													<option value="Ral 8016 - Brun acajou" id="ral_8016" style="background-color:#4f3128;">
													Ral 8016 - Brun acajou										</option>
													<option value="Ral 8017 - Brun chocolat" id="ral_8017" style="background-color:#45302b;">
													Ral 8017 - Brun chocolat										</option>
													<option value="Ral 8019 - Brun gris" id="ral_8019" style="background-color:#3b3332;">
													Ral 8019 - Brun gris										</option>
													<option value="Ral 8022 - Brun noir" id="ral_8022" style="background-color:#1e1a1a;">
													Ral 8022 - Brun noir										</option>
													<option value="Ral 8023 - Brun orangé" id="ral_8023" style="background-color:#a45c32;">
													Ral 8023 - Brun orangé										</option>
													<option value="Ral 8024 - Brun beige" id="ral_8024" style="background-color:#7b5741;">
													Ral 8024 - Brun beige										</option>
													<option value="Ral 8025 - Brun pâle" id="ral_8025" style="background-color:#765d4d;">
													Ral 8025 - Brun pâle										</option>
													<option value="Ral 8028 - Brun terre" id="ral_8028" style="background-color:#4f3b2b;">
													Ral 8028 - Brun terre										</option>
													<option value="Ral 9001 - Blanc crème" id="ral_9001" style="background-color:#eee9da;color:#000;">
													Ral 9001 - Blanc crème										</option>
													<option value="Ral 9002 - Blanc gris" id="ral_9002" style="background-color:#dadbd5;color:#000;">
													Ral 9002 - Blanc gris										</option>
													<option value="Ral 9003 - Blanc de sécurité" id="ral_9003" style="background-color:#f8f9fb;color:#000;">
													Ral 9003 - Blanc de sécurité										</option>
													<option value="Ral 9004 - Noir de sécurité" id="ral_9004" style="background-color:#252427;">
													Ral 9004 - Noir de sécurité										</option>
													<option value="Ral 9005 - Noir foncé" id="ral_9005" style="background-color:#151619;">
													Ral 9005 - Noir foncé										</option>
													<option value="Ral 9010 - Blanc pur" id="ral_9010" style="background-color:#f4f4ed;color:#000;">
													Ral 9010 - Blanc pur										</option>
													<option value="Ral 9011 - Noir graphite" id="ral_9011" style="background-color:#1f2126;">
													Ral 9011 - Noir graphite										</option>
													<option value="Ral 9016 - Blanc trafic" id="ral_9016" style="background-color:#f3f6f6;color:#000;">
													Ral 9016 - Blanc trafic										</option>
													<option value="Ral 9017 - Noir trafic" id="ral_9017" style="background-color:#1b191d;">
													Ral 9017 - Noir trafic										</option>
													<option value="Ral 9018 - Blanc papyrus" id="ral_9018" style="background-color:#cbd2d0;color:#000;">
													Ral 9018 - Blanc papyrus										</option>
												</select>
												
											</div>
											<br>
											<br>
										</div>
									</div>
									
									
									<!-----------------------------------------------------------------------boite au lettre ----------------------------------------------------------------------------------------------------------------->
									
									<div class="d-flex">
										<strong> Boite Aux Lettres :</strong>
										<img src="img/boite%20au%20lettres.jpg"/>
                                        <div id="boiteId" name="boite">
											<div class="form-check">
												<input type="radio" class="custom-radio custom-control-inline" id="boite1" value="Oui"  name="boite">
												<label class="form-check-label" for="boite1">OUI</label>
											</div>
										</div>
                                        <!-- Group of material radios - option 2 -->
										<div class="d-flex">
											<div class="form-check" >
												<input type="radio" class="custom-radio custom-control-inline" id="boite2" value="Non"  name="boite">
												<label class="form-check-label" for="boite2">NON</label>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</form>
					<!----------------------------------------------------------------------button calculez------------------------------------------------------------------------------------------->
					
					
					<div class="card-text" style="padding-left:20%;width: 20em;">
						<button class="btn btn-outline-success" id="priceId" style="width: 20em;">Calculez Votre Prix en TTC</button>
						<br>
						<div class="d-flex" style="width:20.8em">
							<div id="divAffichPrix" style="font-weight: bold;color: #ff0504;font-size: 25px;border:2px white solid ;width:20.8em;text-align: center;background-color: #FFFFFF;"></div>
						<SPAN style="font-weight: bold;color:  #FFFFFF;font-size: 25px;">€</SPAN></div>
					</div>
					
					
					
					
					
					
					
					
					
					
					
					
					<!-- Button trigger modal -->
					<br>
				</div>
			</div>
			
		</div>
		
		<div class="col-xs-6">
			<div class="sticky-content text-center info-color text-white"  style="position: fixed;">
				<img src="img/clôture%20transparente.png"  id="Divclr" >
				<P style="color:black;margin-top:-15%;">La  société  NAO  vous  propose  une  clôture  en  kit  100% aluminium. Nous utilisons cette matière noble car elle ne comporte que des avantages tel que la Robustesse et légèreté, Parfaite tenue dans le temps, Résistance  aux  conditions  les  plus  défavorables  (pluie, neige, soleil, ...) et aucun   entretien   (un   simple   coup   de   chiffon   humide). Nos  clôtures  100%  aluminium  sont  plus  stables  dans  le  temps.
					<span class="d-flex" style="padding-left: 35%;">
						<img src="img/garantie%2010ans.png"/>
                        <img src="img/directusine.png"/>
                        <img src="img/sur%20mesure.png"/>
					</P>
				</span>
				<ul>
					
					<a href="https://www.nao-fermetures.fr/PBCPPlayer.asp?ADContext=1&ID=2066935" target="_blank"> <li class="btn btn-outline-success" id="" style="width: 20em;">DEMANDEZ VOTRE DEVIS EN LIGNE</li></a>
					<li class="btn btn-outline-success" id="" style="width: 20em;">PAYER EN LIGNE</li><BR>
					<li type="button" class="btn btn-outline-success"  style="width: 20em;" onclick="resume();" data-toggle="modal" data-target="#centralModalSuccess">VOTRE COMMANDE</li><BR>
					
				</ul>
				
				
			</div>
			
		</div>
	</div>
	
	
	
	</br>
	</br>
	</br>
	</br>
	
	
	
	
	
	<!--------------------------------------------------------------------------------------- Modal ------------------------------------------------------------------------------------------------------>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalScrollableTitle">Continue</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="formGroupExampleInput">Nom</label>
						<input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="Votre Nom ..." >
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Prénom</label>
						<input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="Votre Prénom ..." >
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Email</label>
						<input type="email" class="form-control" name="email" id="formGroupExampleInput3" placeholder="username@website.com" >
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Téléphone</label>
						<input type="number" class="form-control" name="tel" id="formGroupExampleInput4" placeholder="votre numéro" >
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<!---------------------------------------------------------------------------------------CALCULEZ------------------------------------------------------------------------------------------------------>
		
		
	</div>
	
	
	<!-- /.col-lg-3 -->
	
	
	<!-- /.col-lg-9 -->
	
	<!-- Footer -->
    <footer class="container" id="footer" style="background-color: rgb(11,9,22);max-width: 100%;">
		
        <div class="container">
            <a href="" style="color:white;margin-left:35%">Mentions Légales</a> <span style="color: #eeeeee;font-weight: bold">|</span> <a href="" style="color:white;text-align: center;">Contact</a>
            <p class="m-0 text-center text-white">Copyright &copy; Tous droits réservés.  Configurateur <a href="https://www.nao-fermetures.fr/" style="color: #eeeeee">https://www.nao-fermetures.fr/   2019/2020</a></p>
            <a href="" style="color:white;margin-left:35%">Réalisation Nao Fermeture</a>
            <br>
            <p class="stopper-text" style="padding-left: 40%;color:green;font-weight: bold;text-transform: uppercase;"> Suivez Nous </p>
            <a href="https://www.facebook.com/naofermetures/" class="fa fa-facebook" style="width:50px;color:green;margin-left: 35%;"></a>
            <a href="https://twitter.com/NAOFermetures" class="fa fa-twitter" style="width:50px;color: green;"></a>
            <a href="https://www.instagram.com/naofermetures/?hl=fr" class="fa fa-instagram" style="width:50px;color: green;"></a>
		</div>
        <!-- /.container -->
        <button onclick="topFunction()" id="myBtn1" title="Go to top"><img src="img/fleche.png" style="width:40px; height:40px;"></button>
	</footer>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="script.js"></script>
<script src="calculprix.js"></script>
<div class="modal fade" id="image1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				
				<div class="card-deck">
					<div class="card">
						<a href="#">
							<img src="img/angle0.jpg" class="card-img-top" alt="" id="image1">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="image2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				
				<div class="card-deck">
					<div class="card" id="image2">
						<a href="#">
							<img src="img/angle1.jpg" class="card-img-top" alt="CLOTURE" >
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="image3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				
				<div class="card-deck">
					<div class="card">
						<a href="#"  id="image3" >
							<img src="img/angle2.jpg"  class="card-img-top" alt="pdgs" >
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="image4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				
				<div class="card-deck">
					<div class="card">
						<a href="#">
							<img src="img/sur%20platine.jpg" class="card-img-top" alt="" id="image1">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="image5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				
				<div class="card-deck">
					<div class="card" id="image2">
						<a href="#">
							<img src="img/à%20sceller.jpg" class="card-img-top" alt="pdgs" >
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="image6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				
				<div class="card-deck">
					<div class="card">
						<a href="#"  id="image3" >
							<img src="img/à%20l'anglaise.jpg"  class="card-img-top" alt="pdgs" >
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	#myBtn1 {
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	font-size: 13px;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 15px;
	border-radius: 4px;
	}
	
	
	
</style>



</div>
</div>





</div>

<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
	<div class="modal-dialog modal-notify modal-success" role="document">
		<!--Content-->
		<div class="modal-content">
			<!--Header-->
			<div class="modal-header">
				<p class="heading lead" style="font-family: italic;text-align: center; padding-left: 30%;">VOTRE COMMANDE </p>
				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>
			
			<!--Body-->
			<div class="modal-body" onchange="resume();">
				<div class="text-center">
					<i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
					
					<ul>
						<li id="cloture" style="font-weight: bold ;font-size: 15px;""> </li><br>
						<LI id="largeur"> </LI><br>
						<LI id="hauteur"> </LI><br>
						<LI id="fixation"> </LI><br>
						<li id="depart"> </li><br>
						<LI id="couleur">  </LI><br>
						<LI id="boite"> </LI><br>
					</ul>
				</div>
			</div>
			
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				document.onscroll = function() {scrollFunction()};
				
				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("myBtn1").style.display = "block";
                        } else {
						document.getElementById("myBtn1").style.display = "none";
					}
				}
				
				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<script>
				
				$(function(){
					
					$(".sticky-content").sticky({
						topSpacing: 50,
						zIndex: 2,
						stopper: "#footer",
					});
					
				});
			</script>
			
		</body>
	</html>
	
	
		