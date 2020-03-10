






$('[data-toggle="collapse"]').click(function() { $('.collapse.in').collapse('hide') });

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var field = document.getElementById('configHtmlForm');
    var fieldHTML = field.innerHTML;
    var removeBtn = '<a href="javascript:void(0);" class="remove_button btn btn-danger ml-auto">Supprimer</a>';
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter

            $(field).append('<div>'+ fieldHTML + removeBtn +'</div>'); //Add field html
        }
    });

    //Once remove button is clicked
    $(field).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});





   function hublotAffiche(){

    if( $("input[name='hublot']").is(':checked') ){

        document.getElementById("hQte").style.display= "inline-block";

    }
}



    function afficheAcce(){


      var motor= $("input[name='motorisation']:checked").val();


    if( motor=='Moteur 1000Nm') {

        document.getElementById("accessId").style.display="block";

    }else {

        document.getElementById("accessId").style.display="none";
    }
}

     function afficheSecur() {


    var portillon = $("input[name='portillon']:checked").val();


    var motorisation = $("input[name='motorisation']:checked").val();



    if (motorisation == 'Moteur 1000Nm' && portillon == 'Portillon Porte Sectionnelle Verticale') {



        document.getElementById("securiteId").style.display = "block";


    }

     if (portillon == 'Portillon Porte Sectionnelle Verticale'  &&  motorisation == 'Moteur 1000Nm' ) {


            document.getElementById("securiteId").style.display = "block";

    }
           if (motorisation == 'Non' && portillon == 'Portillon Porte Sectionnelle Verticale') {

        document.getElementById("securiteId").style.display = "none";


    }    if (portillon == 'Portillon Porte Sectionnelle Verticale' &&  motorisation == 'Non' ) {


        document.getElementById("securiteId").style.display = "none";


    }

    if (motorisation == 'Moteur 1000Nm' && portillon == 'Non') {

        document.getElementById("securiteId").style.display = "none";


    } if ( portillon == 'Non'  && motorisation == 'Moteur 1000Nm') {

            document.getElementById("securiteId").style.display = "none";

    } if (motorisation == 'Non' && portillon == 'Non') {

        document.getElementById("securiteId").style.display = "none";
    }

}



        function portillonInsert() {

            var port = $("input[name='portillon']:checked").val();

            if (port = 'Portillon Porte Sectionnelle Verticale') {
                document.getElementById("divClr").style.display = "none";
                document.getElementById("divClr1").style.display = "block";
                document.getElementById("divClr1").style.backgroundColor = document.getElementById("divClr").style.backgroundColor;

            }else if (port = 'Non') {
                document.getElementById("divClr1").style.display = "none";
            }





                /*for (i = 0; i < document.formulaire.modele.length; i++) {
                    if (document.formulaire.modele[i].checked) {
                        valeur = document.formulaire.modele[i].value;
*/

                           var valeur = '';

                        if (valeur == 'Rainures horizontales') {

                            document.getElementById("couleur1").style.display = "block";
                            document.getElementById("couleur2").style.display = "block";
                            document.getElementById("couleur3").style.display = "block";
                            document.getElementById("couleur4").style.display = "block";
                            document.getElementById("couleur5").style.display = "block";
                            document.getElementById("couleur6").style.display = "block";
                            document.getElementById("couleur7").style.display = "block";
                            document.getElementById("couleur8").style.display = "block";
                            document.getElementById("divClr1").style.display = "block";
                            document.getElementById("divClr1").style.display = "block";
                            document.getElementById("divClr1").style.backgroundColor = "#ffffFF";
                            $("#imgModele1").attr('src', 'img/DOUBLE.png');
                        }


                        if (valeur == 'Lisse') {
                            document.getElementById("couleur4").style.display = "none";
                            document.getElementById("couleur5").style.display = "none";
                            document.getElementById("couleur6").style.display = "none";
                            document.getElementById("couleur7").style.display = "none";
                            document.getElementById("couleur8").style.display = "none";
                            document.getElementById("couleur1").style.display = "block";
                            document.getElementById("couleur2").style.display = "block";
                            document.getElementById("couleur3").style.display = "block";
                            document.getElementById("divClr").style.display = "none";
                            document.getElementById("divClr1").style.display = "block";
                            document.getElementById("divClr1").style.backgroundColor = "#ffffFF";
                            $("#imgModele1").attr('src', 'img/lissePort.jpg');

                        }
                        if (valeur == 'Cassette') {

                            document.getElementById("couleur2").style.display = "none";
                            document.getElementById("couleur3").style.display = "none";
                            document.getElementById("couleur4").style.display = "none";
                            document.getElementById("couleur5").style.display = "none";
                            document.getElementById("couleur6").style.display = "none";
                            document.getElementById("couleur7").style.display = "none";
                            document.getElementById("couleur8").style.display = "none";
                            document.getElementById("couleur1").style.display = "block";
                            document.getElementById("divClr").style.display = "none";
                            document.getElementById("divClr1").style.display = "block";
                            document.getElementById("divClr1").style.backgroundColor = "#ffffFF";
                            $("#imgModele1").attr('src', 'img/casettePort.jpg');


                        }
                        if (valeur == 'Monorainure') {
                            document.getElementById("couleur2").style.display = "none";
                            document.getElementById("couleur3").style.display = "none";
                            document.getElementById("couleur4").style.display = "none";
                            document.getElementById("couleur5").style.display = "none";
                            document.getElementById("couleur6").style.display = "none";
                            document.getElementById("couleur7").style.display = "none";
                            document.getElementById("couleur8").style.display = "none";
                            document.getElementById("couleur1").style.display = "block";
                            document.getElementById("divClr").style.display = "none";
                            document.getElementById("divClr1").style.display = "block";
                            document.getElementById("divClr1").style.backgroundColor = "#ffffFF";
                            $("#imgModele1").attr('src', 'img/rainurePort.JPG');
                        }



        }


      function changeCouleur() {

    var couleur = $("input[name='couleur']:checked").val();

      if(couleur== ''){

          document.getElementById("Divclr").style.backgroundColor = "#ffffFF";

      }

    if (couleur == 'blanc') {
      //  document.getElementById("divClr").style.display = "block";
       // document.getElementById("divClr").style.backgroundColor = "#ffffFF";
      //  document.body.style.backgroundImage = "url('')";
        document.getElementById("Divclr").style.backgroundColor = "#ffffFF";
         //document.getElementById("divClr1").style.backgroundColor = "#ffffFF";
    } else if (couleur == 'gris') {
       // document.getElementById("divClr").style.display = "block";
        //document.getElementById("divClr").style.backgroundColor = "#3d3e43";
        //document.getElementById("divClr1").style.backgroundColor = "#3d3e43";
        //document.body.style.backgroundImage = "url('')";
        document.getElementById("Divclr").style.backgroundColor =  "#121213";
        //$("body").css({"backgroundImage": "url('')"});

    } else if (couleur == 'grisAlu') {
      //  document.getElementById("divClr").style.display = "block";
       // document.getElementById("divClr").style.backgroundColor = "#b3b5b4";
       // document.getElementById("divClr1").style.backgroundColor = "#b3b5b4";
       // document.body.style.backgroundImage = "url('')";
      //  $("body").css({"backgroundImage": "url('')"});
        //document.body.style.backgroundColor ="#b3b5b4";

    } else if (couleur == 'vert') {
       // document.getElementById("divClr").style.display = "block";
      //  document.getElementById("divClr").style.backgroundColor = "#2d4537";
      //  document.getElementById("divClr1").style.backgroundColor = "#2d4537";
       // document.body.style.backgroundImage = "url('')";
        // $("body").css({"backgroundImage": "url('')"});
      //  document.body.style.backgroundColor ="#2d4537";

    } else if (couleur == 'brun') {
       // document.getElementById("divClr").style.display = "block";
        //document.getElementById("divClr").style.backgroundColor = "#471b12";
       // document.getElementById("divClr1").style.backgroundColor = "#471b12";
       // document.body.style.backgroundImage = "url('')";
       // $("body").css({"backgroundImage": "url('')"});
      //  document.body.style.backgroundColor ="#471b12";

    } else if (couleur == 'bleu') {
       // document.getElementById("divClr").style.display = "block";
        //document.getElementById("divClr").style.backgroundColor = "#0f294e";
      //  document.getElementById("divClr1").style.backgroundColor = "#0f294e";
       // document.body.style.backgroundImage = "url('')";
      //  $("body").css({"backgroundImage": "url('')"});
       // document.body.style.backgroundColor ="#0f294e";

    } else if (couleur == 'rouge') {
       // document.getElementById("divClr").style.display = "block";
        //document.getElementById("divClr").style.backgroundColor = "#af2d1d";
       // document.getElementById("divClr1").style.backgroundColor = "#af2d1d";
       // document.body.style.backgroundImage = "url('')";
      //  $("body").css({"backgroundImage": "url('')"});
      //  document.body.style.backgroundColor ="#af2d1d";

    } else if (couleur == 'ivoire') {
       // document.getElementById("divClr").style.display = "block";
       // document.getElementById("divClr").style.backgroundColor = "#e5d691";
       // document.getElementById("divClr1").style.backgroundColor = "#e5d691";
       // document.body.style.backgroundImage = "url('')";
       // $("body").css({"backgroundImage": "url('')"});
       // document.body.style.backgroundColor ="#e5d691";

    }

}







   function hide() {
       var x = document.getElementById("configHtml");
       if  ($("#qteId").val()!="" && $("#largeurId").val()!=""  && !$("#hauteurId").val()!="") {
           x.style.display = "block";
       } else {
           x.style.display = "none";
       }

   }
$(document).ready(function () {

});


       function returnRadio() {
           var valeur = '';

           for (i = 0; i < document.formulaire.modele.length; i++) {
               if (document.formulaire.modele[i].checked) {
                   valeur = document.formulaire.modele[i].value;


                   if (valeur == 'Rainures horizontales') {

                       document.getElementById("couleur1").style.display = "block";
                       document.getElementById("couleur2").style.display = "block";
                       document.getElementById("couleur3").style.display = "block";
                       document.getElementById("couleur4").style.display = "block";
                       document.getElementById("couleur5").style.display = "block";
                       document.getElementById("couleur6").style.display = "block";
                       document.getElementById("couleur7").style.display = "block";
                       document.getElementById("couleur8").style.display = "block";
                       document.getElementById("divClr").style.display = "block";
                       document.getElementById("divClr").style.backgroundColor = "#ffffFF";
                       $("#imgModele").attr('src', 'img/DR.png');
                   }




                   if (valeur == 'Lisse') {
                       document.getElementById("couleur4").style.display = "none";
                       document.getElementById("couleur5").style.display = "none";
                       document.getElementById("couleur6").style.display = "none";
                       document.getElementById("couleur7").style.display = "none";
                       document.getElementById("couleur8").style.display = "none";
                       document.getElementById("couleur1").style.display = "block";
                       document.getElementById("couleur2").style.display = "block";
                       document.getElementById("couleur3").style.display = "block";
                       document.getElementById("divClr").style.display = "block";
                       document.getElementById("divClr").style.backgroundColor = "#ffffFF";
                       $("#imgModele").attr('src', 'img/PL.png');

                   }
                   if (valeur == 'Cassette') {

                       document.getElementById("couleur2").style.display = "none";
                       document.getElementById("couleur3").style.display = "none";
                       document.getElementById("couleur4").style.display = "none";
                       document.getElementById("couleur5").style.display = "none";
                       document.getElementById("couleur6").style.display = "none";
                       document.getElementById("couleur7").style.display = "none";
                       document.getElementById("couleur8").style.display = "none";
                       document.getElementById("couleur1").style.display = "block";
                       document.getElementById("divClr").style.display = "block";
                       document.getElementById("divClr").style.backgroundColor = "#ffffFF";
                       $("#imgModele").attr('src', 'img/CAS.png');


                   }
                   if (valeur == 'Monorainure') {
                       document.getElementById("couleur2").style.display = "none";
                       document.getElementById("couleur3").style.display = "none";
                       document.getElementById("couleur4").style.display = "none";
                       document.getElementById("couleur5").style.display = "none";
                       document.getElementById("couleur6").style.display = "none";
                       document.getElementById("couleur7").style.display = "none";
                       document.getElementById("couleur8").style.display = "none";
                       document.getElementById("couleur1").style.display = "block";
                       document.getElementById("divClr").style.display = "block";
                       document.getElementById("divClr").style.backgroundColor = "#ffffFF";
                       $("#imgModele").attr('src', 'img/RAIN.png');
                   }


               }
           }
       }






   $(function () {
    $('[data-toggle="tooltip"]').tooltip()
})




   function hide() {
       var x = document.getElementById("configHtml");
       if (x.style.display === "none") {
           x.style.display = "block";
       } else {
           x.style.display = "none";
       }
   }


   function ral() {

       var x = document.getElementById("divral");

       $('input[name="couleur"]').prop('checked', false);

       if (x.style.display === "none" && !$('input[name="couleur"]').is(':checked')){
           x.style.display = "block";
       }
       else if ( x.style.display = "block" && $('input[name="couleur"]').is(':checked')){


           x.style.display ="none";

           ($('#autreralId').val()=='');

       }else {

           x.style.display ="none";
       }



   }

   function insertpoigne() {

       var poignee = $("select[name='poigne'] > option:selected").val();

       console.log(poignee);

       switch (poignee) {
           case '1':
               document.getElementById("p1").style.display = "block";
               document.getElementById("p2").style.display = "none";
               break;
           case '2':
               document.getElementById("p2").style.display = "block";
               document.getElementById("p1").style.display = "none";
               break;
           case '3':
               document.getElementById("p2").style.display = "none";
               document.getElementById("p1").style.display = "none";
               break;
       }

   }




   function findTotal() {
       var arr = document.getElementsByName('longueur');
       var tot = 0;
       for (var i = 0; i < arr.length; i++) {
           if (parseInt(arr[i].value))
               tot += parseInt(arr[i].value);
       }
       document.getElementById('total').value = tot;

   }
   function longueurcloture(){

       cloture= $("input[name='cloture']:checked").val();
      var sum = 0;
      //iterate through each textboxes and add the values
      $(".txt").each(function() {

          //add only if the value is number
          if(!isNaN(this.value) && this.value.length!=0) {
              sum += parseFloat(this.value);
          }

      });
      //.toFixed() method will roundoff the final sum to 2 decimal places
      $("#sum").html(sum.toFixed(2));

           switch (cloture) {

               case 'DROITE':
                   document.getElementById("longueurId").style.display = "block";
                   document.getElementById("longueurId2").style.display = "none";
                   document.getElementById("longueurId3").style.display = "none";
                   document.getElementById('div1').style.display = "block";
                   document.getElementById('div2').style.display = "none";
                   document.getElementById('div3').style.display = "none";
                   break;

               case 'EN L':
                   document.getElementById("longueurId").style.display = "block";
                   document.getElementById("longueurId2").style.display = "block";
                   document.getElementById('div1').style.display = "block";
                   document.getElementById('div2').style.display = "block";

                   break;

               case 'EN U':
                   document.getElementById("longueurId").style.display = "block";
                   document.getElementById("longueurId2").style.display = "block";
                   document.getElementById("longueurId3").style.display = "block";
                   document.getElementById('div1').style.display = "block";
                   document.getElementById('div2').style.display = "block";
                   document.getElementById('div3').style.display = "block";


                   break;
           }

   }




   $(document).on('click', '.panel-heading span.clickable', function(e){
       var $this = $(this);
       if(!$this.hasClass('panel-collapsed')) {
           $this.parents('.panel').find('.panel-body').slideUp();
           $this.addClass('panel-collapsed');
           $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');

       } else {
           $this.parents('.panel').find('.panel-body').slideDown();
           $this.removeClass('panel-collapsed');
           $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');

       }
   })






























/*


$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var field = document.getElementById('configHtmlForm');
    var fieldHTML = field.innerHTML;
    var removeBtn = '<a href="javascript:void(0);" class="remove_button btn btn-danger ml-auto">Supprimer</a>';
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter

            $(field).append('<div>'+ fieldHTML + removeBtn +'</div>'); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(field).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


$('body').scrollspy({ target: '#navbar-example' });
$('[data-spy="scroll"]').each(function () {
    var $spy = $(this).scrollspy('refresh')
});

function get_current_option_text(fixation) {
    var select = document.getElementById(fixation);
    var options = select.getElementsByTagName('option');
    return options[select.selectedIndex].text;
}
function show_current_option_text(fixation, placeholder_id) {
    var text = get_current_option_text(fixation);
    var placeholder = document.getElementById(placeholder_id);
    placeholder.firstChild.nodeValue = text;
}

*/