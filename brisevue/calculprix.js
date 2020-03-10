

$(document).ready(function () {

    $('#priceId').click(function () {

    var type = "Brise vue";
    var fixation= $("input[name='fixation']:checked").val();
    var hauteur =$("#hauteurId option:selected").val();
    var longueur  = document.getElementById("total").value;
    var departMureau  = document.getElementById("nbmurauxId").value;
    var couleur = $("input[name='couleur']:checked").val();
    var autreRal =document.getElementById('autreralId').value;
    var cloture=$("input[name='cloture']:checked").val();
    var boitelettre= $("input[name='boite']:checked").val();


    console.log("Type : " + type);
    console.log("Fixation : " + fixation);
    console.log("Longueur : " + longueur);
    console.log("Hauteur : " + hauteur);
    console.log("DepartMureau : " + departMureau);
    console.log("Couleur : " + couleur);
    console.log("autreRal : " + autreRal);
    console.log("cloture : " + cloture);
    console.log("boite : " + boitelettre);

        requeteAjax(type,fixation,longueur, hauteur,departMureau, couleur,autreRal,boitelettre);
    });

    function requeteAjax(type,fixation,longueur, hauteur,departMureau, couleur,autreRal,boitelettre) {
        $("#divAffichPrix").html('');


        $.ajax({
            type: "POST",
            url: "calcul.php",
            data: "typeId=" + type + "&fixationId=" + fixation + "&longueurId=" + longueur + "&hauteurId=" + hauteur + "&departId=" + departMureau + "&couleurId=" + couleur + "&autreRalId=" + autreRal + "&boiteId=" + boitelettre,
            dataType: "json",
            success: function (data) {
                //data = JSON.parse(data);
                console.log(data.type);
                console.log(data.fixation);
                console.log(data.longueur);
                console.log(data.totalTTC);
                console.log($('#divAffichPrix').append(data.totalTTC));

            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
});




