
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
                <div class="card card-outline-secondary my-2"  style="background : rgba(255,255,255,0.70);">
                    <a href="http://nao-commande.fr/configurateur/CLOTURE/"> <img src="img/logo1.png" class="img-fluid"></a>
                    <div class="card-header" style="font-weight: bold;font-size: 20px;text-align: center;">
                        CONFIGURATEUR BRISE VUE<br>
                        <p style="font-size: 20px;font-weight: normal;"> 1. PERSONNALISEZ VOTRE MODÈLE </p>
                        <p style="color:green;font-weight: bold;text-transform: uppercase;"> Suivez Nous </p>
                        <a href="https://www.facebook.com/naofermetures/" class="fa fa-facebook" style="width:50px;color:green;"></a>
                        <a href="https://twitter.com/NAOFermetures" class="fa fa-twitter" style="width:50px;color: green;"></a>
                        <a href="https://www.instagram.com/naofermetures/?hl=fr" class="fa fa-instagram" style="width:50px;color: green;"></a>
                    </div>

                             <div class="card-body">
                              <form id ="configForm" action="calcul.php" method="POST"  name="formulaire">
                               <div id="configHtmlForm">
- <!-----------------------------------------------------------------------Tronçon type------------------------------------------------------------------------------------------->
                                <STRONG><label style="text-transform: uppercase">DISPOSITIONS DE TRONÇON : </label></STRONG>
                                <i class="fa fa-angle-down rotate-icon"></i>
                                <BR>
 <!---------------------------------------------------------------------------Cloture------------------------------------------------------------------------------------------->

                                <div class="card" >
                                    <div  id="clotureId" name="cloture" onchange="longueurcloture();">
                                        <div class="d-flex">
                                            <label style="text-transform: uppercase; font-weight: bold;width:7em;">CLÔTURE DROITE</label>
                                            <div class="form-check" >

                                                <input  type="radio"  id="cloture1"  class="form-check-input" name="cloture" value="DROITE" checked>
                                                <label for="cloture1"><div class="imghover"><img src="img/cloture1.jpg" class="img-fluid" style="width:220px; height:220PX" /></label>
                                                <p class="img__description" style="text-align:justify;padding-top:40%;font-size: 12px; text-align: center">CLÔTURE DROITE SANS ANGLE </p>
                                            </div>
                                        </div>
                                            <label style="text-transform: uppercase; font-weight: bold;width:5em;">En L</label>
                                            <div class="form-check"  >
                                                <input  type="radio"  id="cloture2"   class="form-check-input" name="cloture" value="EN L">
                                               <label for="cloture2"> <div class="imghover"> <img src="img/cloture2.jpg"   class="img-fluid" style="width:220px; height:220px"/></label>
                                                <p class="img__description" style="text-align:justify;padding-top:40%;font-size: 12px;text-align: center; ">CLÔTURE EN L AVEC UN ANGLE 90° </p>
                                            </div>
                                            </div>
                                            <label style="text-transform: uppercase; font-weight: bold;width:5em;">En U</label>
                                            <div class="form-check" >
                                                <input  type="radio"  id="cloture3"  class="form-check-input" name="cloture" value="EN U">
                                            <label for="cloture3"> <div class="imghover"><img src="img/cloture3.jpg"  class="img-fluid" style="width:220px; height:220px" /> </label>
                                                <p class="img__description" style="text-align:justify;padding-top:40%;font-size: 12px;text-align: center; ">CLÔTURE EN U AVEC DEUX ANGLES 90° </p>
                                            </div>
                                            </div>
                               </div>
                                </div>
                </div>
 <!----------------------------------------------------------------------Longueur------------------------------------------------------------------------------------------->
                                   <div class="card" >

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
                                   </div>

                         <!----------------------------------------------------------------------Hauteur------------------------------------------------------------------------------------------->
                                <div class="form-group">
                                    <STRONG><label for="hauteur" style="text-transform: uppercase;">Hauteur</label></STRONG>
                                    <select name="hauteur" id="hauteurId" class="custom-select" required style="border:1px solid;"">
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
                       <!----------------------------------------------------------------------Fixation------------------------------------------------------------------------------------------->
                                <div class="card" >
                                    <STRONG><label style="text-transform: uppercase">choississez Votre type de FIXATION </label></STRONG>

                                    <div  id="fixationId"  name="fixation">
                                        <div class="d-flex">
                                            <LABEL style="text-transform: uppercase; font-weight: bold;width:9em;">À Visser</LABEL>
                                            <BR>
                                            <div class="form-check" >
                                                <div class="tooltip1">
                                                <input  type="radio"  id="fixation1"  class="form-check-input" name="fixation" value="Poteau a visser" >
                                                <label for="fixation1"> <img src="img/platine.jpg" class="img-fluid" style="width:220px; height:220PX" /></label>
                                                    <span style="padding: 10%;text-align: center;">
                                                          Pose sur dessus de muret plat
                                                      </span>
                                                </div>
                                            </div>
                                              <LABEL  style="text-transform: uppercase;font-weight: bold;width:9em;"> À Sceller</LABEL>
                                            <div class="form-check">
                                                <div class="tooltip1">
                                                <input  type="radio"  id="fixation2"   class="form-check-input" name="fixation" value="Poteau a sceller">
                                                <label for="fixation2"> <img src="img/sceller.jpg"   class="img-fluid" style="width:220px; height:220px"/></label>
                                                    <span style="padding: 9%;text-align: center;">
                                                      Poteau rallongé pour fixer dans le muret
                                                      </span>
                                                </div>
                                            </div>
                                            <LABEL style="text-transform: uppercase;font-weight: bold;width:9em;"> À l'Anglaise</LABEL>
                                            <div class="form-check" >
                                                <div class="tooltip1">
                                                <input  type="radio"  id="fixation3"  class="form-check-input" name="fixation" value="Pose a langlaise">
                                                <label for="fixation3"> <img src="img/anglaise.jpg"  class="img-fluid" style="width:220px; height:220px" /> </label>
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
                                    <input name="nbmuraux" type="number" class="form-control" id="nbmurauxId" placeholder="0"  min="0" max="2" style="border:1px solid;" >
                                        <span><img src="img/poteau.png">
                                            Demi Poteau-Départ Contre Un Mur
                                                      </span>
                                    </div>
                                </div>




            </div>

  <!------------------------------------------------------------------------------------Ajouter tronçon------------------------------------------------------------------------------------------->


                                  <div class="card" style="align-content: center">

                                      <a href="javascript:void(0);" class="add_button btn btn-primary" title="Add field" id="hider">Ajouter Un Tronçon</a>
                                  </div>

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
                                        <input type="text"  id="autreralId" name="autreralId" >
                                    </div>
                                </div>
                                    <br>
                                    <br>
                                    </div>


<!-----------------------------------------------------------------------boite au lettre ----------------------------------------------------------------------------------------------------------------->

                                        <div class="d-flex">
                                            <strong> Boite Aux Lettres :</strong>
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
                                    <br>
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



<div class="col-6">
        <div class="card card-outline-secondary my-4"  >
            <img src="img/fond.png"  id="Divclr" style="width:800px;height:700px;position: fixed;" >
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
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
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



</body>
</html>


