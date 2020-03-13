var CALUPattern = /^CALU(\d+)$/
var deleteCALUPattern = /^deleteCALU(\d+)$/

function ajouterCALU()
{
	var Conteneur = document.getElementById('conteneur');
	if(Conteneur)
	{
		Conteneur.appendChild(creerCALU(dernierCALU() + 1))
	}
}

function dernierCALU()

{

	var Conteneur = document.getElementById('conteneur'), n = 0;
	if(Conteneur)
	{
		var CALUID, CALUNo;
		if(Conteneur.childNodes.length > 0)
		{
			for(var i = 0; i < Conteneur.childNodes.length; i++)
			{
				// Ici, on verifie qu'on peut recuperer les attributs, si ce n'est pas possible, on renvoit false, sinon l'attribut
				CALUID = (Conteneur.childNodes[i].getAttribute) ? Conteneur.childNodes[i].getAttribute('id') : false;
				if(CALUID)
				{
					CALUNo = parseInt(CALUID.replace(CALUPattern, '$1'));
					if(!isNaN(CALUNo) && CALUNo > n)
					{
						n = CALUNo;
					}
				}
			}
		}
	}
	return n;
}


function creerCALU(ID)
{

	var Conteneur = document.createElement('table');
	Conteneur.setAttribute('id', 'CALU' + ID);
	Conteneur.setAttribute('class', 'table table-striped');
	var Row = document.createElement("tr");
	var Head = document.createElement("thead");

	// cr�ation de "titre" qui vont apparaitre dans le formulaire
	var Label = document.createElement("th");
	Label.innerHTML = "Code";

	var Label2 = document.createElement("th");
	Label2.innerHTML = "Article";

	var Label3 = document.createElement("th");
	Label3.innerHTML = "Modele";

	var Label4 = document.createElement("th");
	Label4.innerHTML = "Type de fixation";

	var Label5 = document.createElement("th");
	Label5.innerHTML = "Longueur";

	var Label6 = document.createElement("th");
	Label6.innerHTML = "Hauteur";

	var Label7 = document.createElement("th");
	Label7.innerHTML = "Couleur";

	var Label8 = document.createElement("th");
	Label8.innerHTML = "Autre Couleur";

	var Label88 = document.createElement("th");
	Label88.innerHTML = "Boite aux lettres";

	var Label8DD = document.createElement("th");
	Label8DD.innerHTML = "Nb de depart muraux";

	var Label9 = document.createElement("th");
	Label9.innerHTML = "Qt\351";

	var Label10 = document.createElement("th");
	Label10.innerHTML = "T.V.A.";

	var LabelBis = document.createElement("th");
	LabelBis.innerHTML = "DetailDescription";

	var Body = document.createElement("tbody");
	var Row2 = document.createElement("tr");

	// Cr�ation des �l�ments qui correspond au titre cr��
	var Td1 = document.createElement("td");
	Td1.innerHTML = "CALU";

	var Td2 = document.createElement("td");
	Td2.innerHTML = "Cl\u00f4ture aluminium";

	var Td3Select = document.createElement('select');
	Td3Select.setAttribute('name', 'typeCALU' + ID);
	Td3Select.setAttribute('id', 'typeCALU' + ID);
	Td3Select.setAttribute('onChange', 'javascript: document.getElementById("typeIndexCALU' + ID + '").value = this.selectedIndex; if(this.selectedIndex==0){ document.getElementById("hauteurBVVCALU' + ID + '").value="block"; document.getElementById("hauteurBVPVCALU' + ID + '").value="none"; document.getElementById("hauteurACAVLU' + ID + '").value="none"; document.getElementById("hauteurA100CAVLU' + ID + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + ID + '").value="none"; document.getElementById("hauteurBVCALU' + ID + '").style.display="block"; document.getElementById("hauteurBVPCALU' + ID + '").style.display="none"; document.getElementById("hauteurACALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CALU' + ID + '").style.display="none"; document.getElementById("hauteurClaustraCALU' + ID + '").style.display="none";}                         else if(this.selectedIndex==1){document.getElementById("hauteurBVVCALU' + ID + '").value="none";document.getElementById("hauteurBVPVCALU' + ID + '").value="block";document.getElementById("hauteurACAVLU' + ID + '").value="none"; document.getElementById("hauteurA100CAVLU' + ID + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + ID + '").value="none"; document.getElementById("hauteurBVCALU' + ID + '").style.display="none"; document.getElementById("hauteurBVPCALU' + ID + '").style.display="block"; document.getElementById("hauteurACALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CALU' + ID + '").style.display="none"; document.getElementById("hauteurClaustraCALU' + ID + '").style.display="none";}                        else if(this.selectedIndex==2){document.getElementById("hauteurBVVCALU' + ID + '").value="none";document.getElementById("hauteurBVPVCALU' + ID + '").value="none";document.getElementById("hauteurACAVLU' + ID + '").value="block";document.getElementById("hauteurACALU' + ID + '").style.display="block"; document.getElementById("hauteurA100CAVLU' + ID + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + ID + '").value="none"; document.getElementById("hauteurBVCALU' + ID + '").style.display="none"; document.getElementById("hauteurBVPCALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CALU' + ID + '").style.display="none";}          else if(this.selectedIndex==3){document.getElementById("hauteurBVVCALU' + ID + '").value="none";document.getElementById("hauteurBVPVCALU' + ID + '").value="none";document.getElementById("hauteurACAVLU' + ID + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + ID + '").value="none"; document.getElementById("hauteurACALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CAVLU' + ID + '").value="block"; document.getElementById("hauteurBVCALU' + ID + '").style.display="none"; document.getElementById("hauteurBVPCALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CALU' + ID + '").style.display="block"; document.getElementById("hauteurClaustraCALU' + ID + '").style.display="none";}      else if(this.selectedIndex==4){document.getElementById("hauteurBVVCALU' + ID + '").value="none";document.getElementById("hauteurBVPVCALU' + ID + '").value="none";document.getElementById("hauteurACAVLU' + ID + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + ID + '").value="block"; document.getElementById("hauteurACALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CAVLU' + ID + '").value="none"; document.getElementById("hauteurBVCALU' + ID + '").style.display="none"; document.getElementById("hauteurBVPCALU' + ID + '").style.display="none"; document.getElementById("hauteurA100CALU' + ID + '").style.display="none"; document.getElementById("hauteurClaustraCALU' + ID + '").style.display="block";}');
	var Td3Option1 = document.createElement('option');
	Td3Option1.innerHTML = "Brise vue";
	var Td3Option2 = document.createElement('option');
	Td3Option2.innerHTML = "Brise vue plein";
	var Td3Option3 = document.createElement('option');
	Td3Option3.innerHTML = "Ajoure Lame 150";
	var Td3Option4 = document.createElement('option');
	Td3Option4.innerHTML = "Ajoure Lame 100";
	var Td3Option5 = document.createElement('option');
	Td3Option5.innerHTML = "Claustra aluminium";
	Td3Select.appendChild(Td3Option1);
	Td3Select.appendChild(Td3Option2);
	Td3Select.appendChild(Td3Option3);
	Td3Select.appendChild(Td3Option4);
	Td3Select.appendChild(Td3Option5);
	var Td3 = document.createElement("td");
	Td3.appendChild(Td3Select);

	var Td35Input = document.createElement('input');
	Td35Input.setAttribute('type', 'text');
	Td35Input.setAttribute('name', 'typeIndexCALU' + ID);
	Td35Input.setAttribute('id', 'typeIndexCALU' + ID);
	Td35Input.setAttribute('value', '0');
	Td35Input.setAttribute('style', 'display:none');
	var Td35 = document.createElement("td");
	Td35.appendChild(Td35Input);

	var Td4Select = document.createElement('select');
	Td4Select.setAttribute('name', 'fixationCALU' + ID);
	Td4Select.setAttribute('id', 'fixationCALU' + ID);
	Td4Select.setAttribute('onChange', 'javascript:  document.getElementById("fixationIndexCALU' + ID + '").value = this.selectedIndex;');
	var Td4Option1 = document.createElement('option');
	Td4Option1.innerHTML = "Poteau a visser";
	var Td4Option2 = document.createElement('option');
	Td4Option2.innerHTML = "Poteau a sceller";
	var Td4Option3 = document.createElement('option');
	Td4Option3.innerHTML = "Pose a langlaise (NON)";
	Td4Select.appendChild(Td4Option1);
	Td4Select.appendChild(Td4Option2);
	Td4Select.appendChild(Td4Option3);
	var Td4 = document.createElement("td");
	Td4.appendChild(Td4Select);

	var Td45Input = document.createElement('input');
	Td45Input.setAttribute('type', 'text');
	Td45Input.setAttribute('name', 'fixationIndexCALU' + ID);
	Td45Input.setAttribute('id', 'fixationIndexCALU' + ID);
	Td45Input.setAttribute('value', '0');
	Td45Input.setAttribute('style', 'display:none');
	var Td45 = document.createElement("td");
	Td45.appendChild(Td45Input);

	var Td5Input = document.createElement('input');
	Td5Input.setAttribute('type', 'text');
	Td5Input.setAttribute('size', '2');
	Td5Input.setAttribute('name', 'lCALU' + ID);
	Td5Input.setAttribute('id', 'lCALU' + ID);
	Td5Input.setAttribute('value', '1000');
	var Td5 = document.createElement("td");
	Td5.appendChild(Td5Input);

	var Td6Select = document.createElement('select');
	Td6Select.setAttribute('name', 'hauteurBVCALU' + ID);
	Td6Select.setAttribute('id', 'hauteurBVCALU' + ID);
	Td6Select.style.display = "block";
	Td6Select.setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexBVCALU' + ID + '").value = this.selectedIndex;');
	var Td6Option1 = document.createElement('option');
	Td6Option1.innerHTML = "200";
	var Td6Option2 = document.createElement('option');
	Td6Option2.innerHTML = "335";
	var Td6Option3 = document.createElement('option');
	Td6Option3.innerHTML = "470";
	var Td6Option4 = document.createElement('option');
	Td6Option4.innerHTML = "605";
	var Td6Option5 = document.createElement('option');
	Td6Option5.innerHTML = "740";
	var Td6Option6 = document.createElement('option');
	Td6Option6.innerHTML = "875";
	var Td6Option7 = document.createElement('option');
	Td6Option7.innerHTML = "1010";
	var Td6Option8 = document.createElement('option');
	Td6Option8.innerHTML = "1145";
	var Td6Option9 = document.createElement('option');
	Td6Option9.innerHTML = "1280";
	var Td6Option10 = document.createElement('option');
	Td6Option10.innerHTML = "1415";
	var Td6Option11 = document.createElement('option');
	Td6Option11.innerHTML = "1550";
	var Td6Option12 = document.createElement('option');
	Td6Option12.innerHTML = "1685";
	var Td6Option13 = document.createElement('option');
	Td6Option13.innerHTML = "1820";
	var Td6Option14 = document.createElement('option');
	Td6Option14.innerHTML = "1955";
	var Td6Option15 = document.createElement('option');
	Td6Option15.innerHTML = "2090";
	Td6Select.appendChild(Td6Option1);
	Td6Select.appendChild(Td6Option2);
	Td6Select.appendChild(Td6Option3);
	Td6Select.appendChild(Td6Option4);
	Td6Select.appendChild(Td6Option5);
	Td6Select.appendChild(Td6Option6);
	Td6Select.appendChild(Td6Option7);
	Td6Select.appendChild(Td6Option8);
	Td6Select.appendChild(Td6Option9);
	Td6Select.appendChild(Td6Option10);
	Td6Select.appendChild(Td6Option11);
	Td6Select.appendChild(Td6Option12);
	Td6Select.appendChild(Td6Option13);
	Td6Select.appendChild(Td6Option14);
	Td6Select.appendChild(Td6Option15);

	var Td65Input = document.createElement('input');
	Td65Input.setAttribute('type', 'text');
	Td65Input.setAttribute('name', 'hauteurIndexBVCALU' + ID);
	Td65Input.setAttribute('id', 'hauteurIndexBVCALU' + ID);
	Td65Input.setAttribute('value', '0');
	Td65Input.setAttribute('style', 'display:none');
	var Td65 = document.createElement("td");
	Td65.appendChild(Td65Input);

	var Td66Select = document.createElement('select');
	Td66Select.setAttribute('name', 'hauteurBVPCALU' + ID);
	Td66Select.setAttribute('id', 'hauteurBVPCALU' + ID);
	Td66Select.style.display = "none";
	Td66Select.setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexBVPCALU' + ID + '").value = this.selectedIndex;');
	var Td66ption1 = document.createElement('option');
	Td66ption1.innerHTML = "200";
	var Td66ption2 = document.createElement('option');
	Td66ption2.innerHTML = "305";
	var Td66ption3 = document.createElement('option');
	Td66ption3.innerHTML = "410";
	var Td66ption4 = document.createElement('option');
	Td66ption4.innerHTML = "515";
	var Td66ption5 = document.createElement('option');
	Td66ption5.innerHTML = "620";
	var Td66ption6 = document.createElement('option');
	Td66ption6.innerHTML = "725";
	var Td66ption7 = document.createElement('option');
	Td66ption7.innerHTML = "830";
	var Td66ption8 = document.createElement('option');
	Td66ption8.innerHTML = "935";
	var Td66ption9 = document.createElement('option');
	Td66ption9.innerHTML = "1040";
	var Td66ption10 = document.createElement('option');
	Td66ption10.innerHTML = "1145";
	var Td66ption11 = document.createElement('option');
	Td66ption11.innerHTML = "1250";
	var Td66ption12 = document.createElement('option');
	Td66ption12.innerHTML = "1355";
	Td66Select.appendChild(Td66ption1);
	Td66Select.appendChild(Td66ption2);
	Td66Select.appendChild(Td66ption3);
	Td66Select.appendChild(Td66ption4);
	Td66Select.appendChild(Td66ption5);
	Td66Select.appendChild(Td66ption6);
	Td66Select.appendChild(Td66ption7);
	Td66Select.appendChild(Td66ption8);
	Td66Select.appendChild(Td66ption9);
	Td66Select.appendChild(Td66ption10);
	Td66Select.appendChild(Td66ption11);
	Td66Select.appendChild(Td66ption12);

	var Td665Input = document.createElement('input');
	Td665Input.setAttribute('type', 'text');
	Td665Input.setAttribute('name', 'hauteurIndexBVPCALU' + ID);
	Td665Input.setAttribute('id', 'hauteurIndexBVPCALU' + ID);
	Td665Input.setAttribute('value', '0');
	Td665Input.setAttribute('style', 'display:none');
	var Td665 = document.createElement("td");
	Td665.appendChild(Td665Input);

	var Td666Select = document.createElement('select');
	Td666Select.setAttribute('name', 'hauteurACALU' + ID);
	Td666Select.setAttribute('id', 'hauteurACALU' + ID);
	Td666Select.style.display = "none";
	Td666Select.setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexACALU' + ID + '").value = this.selectedIndex;');
	var Td666Option1 = document.createElement('option');
	Td666Option1.innerHTML = "208";
	var Td666Option2 = document.createElement('option');
	Td666Option2.innerHTML = "383";
	var Td666Option3 = document.createElement('option');
	Td666Option3.innerHTML = "558";
	var Td666Option4 = document.createElement('option');
	Td666Option4.innerHTML = "733";
	var Td666Option5 = document.createElement('option');
	Td666Option5.innerHTML = "908";
	var Td666Option6 = document.createElement('option');
	Td666Option6.innerHTML = "1083";
	var Td666Option7 = document.createElement('option');
	Td666Option7.innerHTML = "1258";
	var Td666Option8 = document.createElement('option');
	Td666Option8.innerHTML = "1433";
	var Td666Option9 = document.createElement('option');
	Td666Option9.innerHTML = "1608";
	var Td666Option10 = document.createElement('option');
	Td666Option10.innerHTML = "1783";
	Td666Select.appendChild(Td666Option1);
	Td666Select.appendChild(Td666Option2);
	Td666Select.appendChild(Td666Option3);
	Td666Select.appendChild(Td666Option4);
	Td666Select.appendChild(Td666Option5);
	Td666Select.appendChild(Td666Option6);
	Td666Select.appendChild(Td666Option7);
	Td666Select.appendChild(Td666Option8);
	Td666Select.appendChild(Td666Option9);
	Td666Select.appendChild(Td666Option10);

	var Td6665Input = document.createElement('input');
	Td6665Input.setAttribute('type', 'text');
	Td6665Input.setAttribute('name', 'hauteurIndexACALU' + ID);
	Td6665Input.setAttribute('id', 'hauteurIndexACALU' + ID);
	Td6665Input.setAttribute('value', '0');
	Td6665Input.setAttribute('style', 'display:none');
	var Td6665 = document.createElement("td");
	Td6665.appendChild(Td6665Input);

	var Td6BisSelect = document.createElement('select');
	Td6BisSelect.setAttribute('name', 'hauteurA100CALU' + ID);
	Td6BisSelect.setAttribute('id', 'hauteurA100CALU' + ID);
	Td6BisSelect.style.display = "none";
	Td6BisSelect.setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexA100CALU' + ID + '").value = this.selectedIndex;');
	var Td6BisOption1 = document.createElement('option');
	Td6BisOption1.innerHTML = "159";
	var Td6BisOption2 = document.createElement('option');
	Td6BisOption2.innerHTML = "284";
	var Td6BisOption3 = document.createElement('option');
	Td6BisOption3.innerHTML = "409";
	var Td6BisOption4 = document.createElement('option');
	Td6BisOption4.innerHTML = "534";
	var Td6BisOption5 = document.createElement('option');
	Td6BisOption5.innerHTML = "659";
	var Td6BisOption6 = document.createElement('option');
	Td6BisOption6.innerHTML = "785";
	var Td6BisOption7 = document.createElement('option');
	Td6BisOption7.innerHTML = "910";
	var Td6BisOption8 = document.createElement('option');
	Td6BisOption8.innerHTML = "1035";
	var Td6BisOption9 = document.createElement('option');
	Td6BisOption9.innerHTML = "1160";
	var Td6BisOption10 = document.createElement('option');
	Td6BisOption10.innerHTML = "1285";
	var Td6BisOption11 = document.createElement('option');
	Td6BisOption11.innerHTML = "1411";
	var Td6BisOption12 = document.createElement('option');
	Td6BisOption12.innerHTML = "1536";
	var Td6BisOption13 = document.createElement('option');
	Td6BisOption13.innerHTML = "1661";
	var Td6BisOption14 = document.createElement('option');
	Td6BisOption14.innerHTML = "1786";
	Td6BisSelect.appendChild(Td6BisOption1);
	Td6BisSelect.appendChild(Td6BisOption2);
	Td6BisSelect.appendChild(Td6BisOption3);
	Td6BisSelect.appendChild(Td6BisOption4);
	Td6BisSelect.appendChild(Td6BisOption5);
	Td6BisSelect.appendChild(Td6BisOption6);
	Td6BisSelect.appendChild(Td6BisOption7);
	Td6BisSelect.appendChild(Td6BisOption8);
	Td6BisSelect.appendChild(Td6BisOption9);
	Td6BisSelect.appendChild(Td6BisOption10);
	Td6BisSelect.appendChild(Td6BisOption11);
	Td6BisSelect.appendChild(Td6BisOption12);
	Td6BisSelect.appendChild(Td6BisOption13);
	Td6BisSelect.appendChild(Td6BisOption14);

	var Td65BisInput = document.createElement('input');
	Td65BisInput.setAttribute('type', 'text');
	Td65BisInput.setAttribute('name', 'hauteurIndexA100CALU' + ID);
	Td65BisInput.setAttribute('id', 'hauteurIndexA100CALU' + ID);
	Td65BisInput.setAttribute('value', '0');
	Td65BisInput.setAttribute('style', 'display:none');
	var Td65Bis = document.createElement("td");
	Td65Bis.appendChild(Td65BisInput);

	var Td6Bis1Select = document.createElement('select');
	Td6Bis1Select.setAttribute('name', 'hauteurClaustraCALU' + ID);
	Td6Bis1Select.setAttribute('id', 'hauteurClaustraCALU' + ID);
	Td6Bis1Select.style.display = "none";
	Td6Bis1Select.setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexClaustraCALU' + ID + '").value = this.selectedIndex;');
	var Td6Bis1Option1 = document.createElement('option');
	Td6Bis1Option1.innerHTML = "1130";
	var Td6Bis1Option2 = document.createElement('option');
	Td6Bis1Option2.innerHTML = "1265";
	var Td6Bis1Option3 = document.createElement('option');
	Td6Bis1Option3.innerHTML = "1400";
	var Td6Bis1Option4 = document.createElement('option');
	Td6Bis1Option4.innerHTML = "1535";
	var Td6Bis1Option5 = document.createElement('option');
	Td6Bis1Option5.innerHTML = "1670";
	var Td6Bis1Option6 = document.createElement('option');
	Td6Bis1Option6.innerHTML = "1805";
	var Td6Bis1Option7 = document.createElement('option');
	Td6Bis1Option7.innerHTML = "1940";
	var Td6Bis1Option8 = document.createElement('option');
	Td6Bis1Option8.innerHTML = "2075";
	Td6Bis1Select.appendChild(Td6Bis1Option1);
	Td6Bis1Select.appendChild(Td6Bis1Option2);
	Td6Bis1Select.appendChild(Td6Bis1Option3);
	Td6Bis1Select.appendChild(Td6Bis1Option4);
	Td6Bis1Select.appendChild(Td6Bis1Option5);
	Td6Bis1Select.appendChild(Td6Bis1Option6);
	Td6Bis1Select.appendChild(Td6Bis1Option7);
	Td6Bis1Select.appendChild(Td6Bis1Option8);

	var Td65Bis1Input = document.createElement('input');
	Td65Bis1Input.setAttribute('type', 'text');
	Td65Bis1Input.setAttribute('name', 'hauteurIndexClaustraCALU' + ID);
	Td65Bis1Input.setAttribute('id', 'hauteurIndexClaustraCALU' + ID);
	Td65Bis1Input.setAttribute('value', '0');
	Td65Bis1Input.setAttribute('style', 'display:none');
	var Td65Bis1 = document.createElement("td");
	Td65Bis1.appendChild(Td65Bis1Input);

	var Td6 = document.createElement("td");
	Td6.appendChild(Td6Select);
	Td6.appendChild(Td66Select);
	Td6.appendChild(Td666Select);
	Td6.appendChild(Td6BisSelect);
	Td6.appendChild(Td6Bis1Select);

	var Td7Select = document.createElement('select');
	Td7Select.setAttribute('name', 'colorCALU' + ID);
	Td7Select.setAttribute('id', 'colorCALU' + ID);
	Td7Select.setAttribute('onChange', 'javascript:document.getElementById("colorIndexCALU' + ID + '").value = this.selectedIndex;                              if(this.selectedIndex!=2 ){document.getElementById("OtherClrVCALU' + ID + '").value = "none"; document.getElementById("OtherClrCALU' + ID + '").style.display = "none";} else if(this.selectedIndex==2){document.getElementById("OtherClrVCALU' + ID + '").value = "block"; document.getElementById("OtherClrCALU' + ID + '").style.display = "block";}');
	var Td7Option1 = document.createElement('option');
	Td7Option1.innerHTML = "RAL 7016 sable(Gris Anthracite)";
	var Td7Option2 = document.createElement('option');
	Td7Option2.innerHTML = "RAL 9010(Blanc brillant)";
	var Td7Option3 = document.createElement('option');
	Td7Option3.innerHTML = "Autre couleur";
	Td7Select.appendChild(Td7Option1);
	Td7Select.appendChild(Td7Option2);
	Td7Select.appendChild(Td7Option3);
	var Td7 = document.createElement("td");
	Td7.appendChild(Td7Select);

	var Td75Input = document.createElement('input');
	Td75Input.setAttribute('type', 'text');
	Td75Input.setAttribute('name', 'colorIndexCALU' + ID);
	Td75Input.setAttribute('id', 'colorIndexCALU' + ID);
	Td75Input.setAttribute('value', '0');
	Td75Input.setAttribute('style', 'display:none');
	var Td75 = document.createElement("td");
	Td75.appendChild(Td75Input);

	var Td8Input = document.createElement('input');
	Td8Input.setAttribute('type', 'text');
	Td8Input.setAttribute('size', '6');
	Td8Input.setAttribute('name', 'OtherClrCALU' + ID);
	Td8Input.setAttribute('id', 'OtherClrCALU' + ID);
	Td8Input.setAttribute('value', '');
	Td8Input.style.display = "none";
	var Td8 = document.createElement("td");
	Td8.appendChild(Td8Input);

	var Td88Select = document.createElement('select');
	Td88Select.setAttribute('name', 'boitelettre' + ID);
	Td88Select.setAttribute('id', 'boitelettre' + ID);
	Td88Select.setAttribute('onChange', 'javascript:  document.getElementById("boiteIndexlettre' + ID + '").value = this.selectedIndex;');
	var Td88Option1 = document.createElement('option');
	Td88Option1.innerHTML = "Non";
	var Td88Option2 = document.createElement('option');
	Td88Option2.innerHTML = "Oui";
	Td88Select.appendChild(Td88Option1);
	Td88Select.appendChild(Td88Option2);
	var Td88 = document.createElement("td");
	Td88.appendChild(Td88Select);

	var Td885Input = document.createElement('input');
	Td885Input.setAttribute('type', 'text');
	Td885Input.setAttribute('name', 'boiteIndexlettre' + ID);
	Td885Input.setAttribute('id', 'boiteIndexlettre' + ID);
	Td885Input.setAttribute('value', '0');
	Td885Input.setAttribute('style', 'display:none');
	var Td885 = document.createElement("td");
	Td885.appendChild(Td885Input);

	var Td8DDInput = document.createElement('input');
	Td8DDInput.setAttribute('type', 'text');
	Td8DDInput.setAttribute('size', '1');
	Td8DDInput.setAttribute('name', 'DMuraux' + ID);
	Td8DDInput.setAttribute('id', 'DMuraux' + ID);
	Td8DDInput.setAttribute('value', '0');
	var Td8DD = document.createElement("td");
	Td8DD.appendChild(Td8DDInput);

	var Td9Input = document.createElement('input');
	Td9Input.setAttribute('type', 'text');
	Td9Input.setAttribute('size', '1');
	Td9Input.setAttribute('name', 'QteCALU' + ID);
	Td9Input.setAttribute('id', 'QteCALU' + ID);
	Td9Input.setAttribute('value', '1');
	var Td9 = document.createElement("td");
	Td9.appendChild(Td9Input);

	var Td10Select = document.createElement('select');
	Td10Select.setAttribute('name', 'tvaCALU' + ID);
	Td10Select.setAttribute('id', 'tvaCALU' + ID);
	Td10Select.setAttribute('onChange', 'javascript:  document.getElementById("tvaIndexCALU' + ID + '").value = this.selectedIndex;');
	var Td10Option1 = document.createElement('option');
	Td10Option1.setAttribute('value', '20');
	Td10Option1.innerHTML = "20%";
	var Td10Option2 = document.createElement('option');
	Td10Option2.setAttribute('value', '10');
	Td10Option2.innerHTML = "10%";
	var Td10Option3 = document.createElement('option');
	Td10Option3.setAttribute('value', '0');
	Td10Option3.innerHTML = "Exonere";
	Td10Select.appendChild(Td10Option1);
	Td10Select.appendChild(Td10Option2);
	Td10Select.appendChild(Td10Option3);
	var Td10 = document.createElement("td");
	Td10.appendChild(Td10Select);

	var TdBisInput = document.createElement('textarea');
	TdBisInput.setAttribute('name', 'detailDescriptionCALU' + ID);
	TdBisInput.setAttribute('id', 'detailDescriptionCALU' + ID);
	var TdBis = document.createElement("td");
	TdBis.appendChild(TdBisInput);

	var Td105Input = document.createElement('input');
	Td105Input.setAttribute('type', 'text');
	Td105Input.setAttribute('name', 'tvaIndexCALU' + ID);
	Td105Input.setAttribute('id', 'tvaIndexCALU' + ID);
	Td105Input.setAttribute('value', '0');
	Td105Input.setAttribute('style', 'display:none');
	var Td105 = document.createElement("td");
	Td105.appendChild(Td105Input);

	var Hidden1 = document.createElement("input");
	Hidden1.setAttribute('type', 'hidden');
	Hidden1.setAttribute('name', 'inputIncludeCALU' + ID);
	Hidden1.setAttribute('id', 'inputIncludeCALU' + ID);
	Hidden1.setAttribute('value', 'produit/CALU.php');


	var Row3 = document.createElement("tr");

	var Td6V = document.createElement('input');
	Td6V.setAttribute('type', 'text');
	Td6V.setAttribute('size', '2');
	Td6V.setAttribute('name', 'hauteurBVVCALU' +ID);
	Td6V.setAttribute('id', 'hauteurBVVCALU' + ID);
	Td6V.setAttribute('value', 'block');
	Td6V.setAttribute('style', 'display:none');
	var Td6D = document.createElement("td");
	Td6D.appendChild(Td6V);

	var Td66V = document.createElement('input');
	Td66V.setAttribute('type', 'text');
	Td66V.setAttribute('size', '2');
	Td66V.setAttribute('name', 'hauteurBVPVCALU' +ID);
	Td66V.setAttribute('id', 'hauteurBVPVCALU' + ID);
	Td66V.setAttribute('value', 'none');
	Td66V.setAttribute('style', 'display:none');
	var Td66D = document.createElement("td");
	Td66D.appendChild(Td66V);

	var Td666V = document.createElement('input');
	Td666V.setAttribute('type', 'text');
	Td666V.setAttribute('size', '2');
	Td666V.setAttribute('name', 'hauteurACAVLU' +ID);
	Td666V.setAttribute('id', 'hauteurACAVLU' + ID);
	Td666V.setAttribute('value', 'none');
	Td666V.setAttribute('style', 'display:none');
	var Td666D = document.createElement("td");
	Td666D.appendChild(Td666V);

	var Td6BisV = document.createElement('input');
	Td6BisV.setAttribute('type', 'text');
	Td6BisV.setAttribute('size', '2');
	Td6BisV.setAttribute('name', 'hauteurA100CAVLU' +ID);
	Td6BisV.setAttribute('id', 'hauteurA100CAVLU' + ID);
	Td6BisV.setAttribute('value', 'none');
	Td6BisV.setAttribute('style', 'display:none');
	var Td6BisD = document.createElement("td");
	Td6BisD.appendChild(Td6BisV);

	var Td6Bis1V = document.createElement('input');
	Td6Bis1V.setAttribute('type', 'text');
	Td6Bis1V.setAttribute('size', '2');
	Td6Bis1V.setAttribute('name', 'hauteurClaustraCAVLU' +ID);
	Td6Bis1V.setAttribute('id', 'hauteurClaustraCAVLU' + ID);
	Td6Bis1V.setAttribute('value', 'none');
	Td6Bis1V.setAttribute('style', 'display:none');
	var Td6Bis1D = document.createElement("td");
	Td6Bis1D.appendChild(Td6Bis1V);

	var Td8V = document.createElement('input');
	Td8V.setAttribute('type', 'text');
	Td8V.setAttribute('size', '2');
	Td8V.setAttribute('name', 'OtherClrVCALU' +ID);
	Td8V.setAttribute('id', 'OtherClrVCALU' + ID);
	Td8V.setAttribute('value', 'none');
	Td8V.setAttribute('style', 'display:none');
	var Td8D = document.createElement("td");
	Td8D.appendChild(Td8V);

	var Delete = document.createElement('input');
	Delete.setAttribute('type', 'button');
	Delete.setAttribute('value', 'Supprimer');
	Delete.setAttribute('id', 'deleteCALU' + ID);
	Delete.onclick = supprimerCALU;

	Row3.appendChild(Td6D);
	Row3.appendChild(Td66D);
	Row3.appendChild(Td666D);
	Row3.appendChild(Td6BisD);
	Row3.appendChild(Td6Bis1D);
	Row3.appendChild(Td8D);
	Row3.appendChild(Td35);
	Row3.appendChild(Td45);
	Row3.appendChild(Td65);
	Row3.appendChild(Td665);
	Row3.appendChild(Td6665);
	Row3.appendChild(Td65Bis);
	Row3.appendChild(Td65Bis1);
	Row3.appendChild(Td75);
	Row3.appendChild(Td885);
	Row3.appendChild(Td105);

	Row2.appendChild(Td1);
	Row2.appendChild(Td2);
	Row2.appendChild(Td3);
	Row2.appendChild(Td4);
	Row2.appendChild(Td5);
	Row2.appendChild(Td6);
	Row2.appendChild(Td7);
	Row2.appendChild(Td8);
	Row2.appendChild(Td88);
	Row2.appendChild(Td8DD);
	Row2.appendChild(Td9);
	Row2.appendChild(Td10);
	Row2.appendChild(TdBis);

	Row.appendChild(Label);
	Row.appendChild(Label2);
	Row.appendChild(Label3);
	Row.appendChild(Label4);
	Row.appendChild(Label5);
	Row.appendChild(Label6);
	Row.appendChild(Label7);
	Row.appendChild(Label8);
	Row.appendChild(Label88);
	Row.appendChild(Label8DD);
	Row.appendChild(Label9);
	Row.appendChild(Label10);
	Row.appendChild(LabelBis);

	Head.appendChild(Row);
	Body.appendChild(Row2);
	Body.appendChild(Row3);

	Conteneur.appendChild(Hidden1);
	Conteneur.appendChild(Body);
	Conteneur.appendChild(Head);
	Conteneur.appendChild(Delete);

	return Conteneur;
}

function supprimerCALU()
{
	var Conteneur = document.getElementById('conteneur');
	var n = parseInt(this.id.replace(deleteCALUPattern, '$1'));
	if(Conteneur && !isNaN(n))
	{
		var CALUID, CALUNo;
		if(Conteneur.childNodes.length > 0)
		{
			for(var i = 0; i < Conteneur.childNodes.length; i++)
			{
				CALUID = (Conteneur.childNodes[i].getAttribute) ? Conteneur.childNodes[i].getAttribute('id') : false;
				if(CALUID)
				{
					CALUNo = parseInt(CALUID.replace(CALUPattern, '$1'));
					if(!isNaN(CALUNo) && CALUNo  == n)
					{
						Conteneur.removeChild(Conteneur.childNodes[i]);
						updateCALU(); // A supprimer si tu ne veux pas la m�j
						return;
					}
				}
			}
		}
	}
}

// Permet de mettre � jour les lignes si on en cr�� ou on en supprime
function updateCALU()
{
	var Conteneur = document.getElementById('conteneur'), n = 0;
	if(Conteneur)
	{
		var CALUID, CALUNo;
		if(Conteneur.childNodes.length > 0)
		{
			for(var i = 0; i < Conteneur.childNodes.length; i++)
			{
				CALUID = (Conteneur.childNodes[i].getAttribute) ? Conteneur.childNodes[i].getAttribute('id') : false;
				if(CALUID)
				{
					CALUNo = parseInt(CALUID.replace(CALUPattern, '$1'));
					if(!isNaN(CALUNo))
					{
						n++;
						Conteneur.childNodes[i].setAttribute('id', 'CALU' + n);
						document.getElementById('deleteCALU' + CALUNo).setAttribute('name', 'deleteCALU' + n);
						document.getElementById('typeCALU' + CALUNo).setAttribute('name', 'typeCALU' + n);
						document.getElementById('typeIndexCALU' + CALUNo).setAttribute('name', 'typeIndexCALU' + n);
						document.getElementById('fixationCALU' + CALUNo).setAttribute('name', 'fixationCALU' + n);
						document.getElementById('fixationIndexCALU' + CALUNo).setAttribute('name', 'fixationIndexCALU' + n);
						document.getElementById('lCALU' + CALUNo).setAttribute('name', 'lCALU' + n);
						document.getElementById('hauteurBVCALU' + CALUNo).setAttribute('name', 'hauteurBVCALU' + n);
						document.getElementById('hauteurIndexBVCALU' + CALUNo).setAttribute('name', 'hauteurIndexBVCALU' + n);
						document.getElementById('hauteurBVPCALU' + CALUNo).setAttribute('name', 'hauteurBVPCALU' + n);
						document.getElementById('hauteurIndexBVPCALU' + CALUNo).setAttribute('name', 'hauteurIndexBVPCALU' + n);
						document.getElementById('hauteurACALU' + CALUNo).setAttribute('name', 'hauteurACALU' + n);
						document.getElementById('hauteurIndexACALU' + CALUNo).setAttribute('name', 'hauteurIndexACALU' + n);
						document.getElementById('colorCALU' + CALUNo).setAttribute('name', 'colorCALU' + n);
						document.getElementById('hauteurA100CALU' + CALUNo).setAttribute('name', 'hauteurA100CALU' + n);
						document.getElementById('hauteurIndexA100CALU' + CALUNo).setAttribute('name', 'hauteurIndexA100CALU' + n);
						document.getElementById('hauteurClaustraCALU' + CALUNo).setAttribute('name', 'hauteurClaustraCALU' + n);
						document.getElementById('hauteurIndexClaustraCALU' + CALUNo).setAttribute('name', 'hauteurIndexClaustraCALU' + n);
						document.getElementById('colorIndexCALU' + CALUNo).setAttribute('name', 'colorIndexCALU' + n);
						document.getElementById('OtherClrCALU' + CALUNo).setAttribute('name', 'OtherClrCALU' + n);
						document.getElementById('boitelettre' + CALUNo).setAttribute('name', 'boitelettre' + n);
						document.getElementById('boiteIndexlettre' + CALUNo).setAttribute('name', 'boiteIndexlettre' + n);
						document.getElementById('DMuraux' + CALUNo).setAttribute('name', 'DMuraux' + n);
						document.getElementById('QteCALU' + CALUNo).setAttribute('name', 'QteCALU' + n);
						document.getElementById('tvaCALU' + CALUNo).setAttribute('name', 'tvaCALU' + n);
						document.getElementById('detailDescriptionCALU' + CALUNo).setAttribute('name', 'detailDescriptionCALU' + n);
						document.getElementById('tvaIndexCALU' + CALUNo).setAttribute('name', 'tvaIndexCALU' + n);
						document.getElementById('hauteurBVVCALU' + CALUNo).setAttribute('name', 'hauteurBVVCALU' + n);
						document.getElementById('hauteurBVPVCALU' + CALUNo).setAttribute('name', 'hauteurBVPVCALU' + n);
						document.getElementById('hauteurACAVLU' + CALUNo).setAttribute('name', 'hauteurACAVLU' + n);
						document.getElementById('hauteurA100CAVLU' + CALUNo).setAttribute('name', 'hauteurA100CAVLU' +n);
						document.getElementById('hauteurClaustraCAVLU' + CALUNo).setAttribute('name', 'hauteurClaustraCAVLU' + n);
						document.getElementById('OtherClrVCALU' + CALUNo).setAttribute('name', 'OtherClrVCALU' + n);

						document.getElementById('inputIncludeCALU' + CALUNo).setAttribute('name', 'inputIncludeCALU' + n);
						document.getElementById('deleteCALU' + CALUNo).setAttribute('id', 'deleteCALU' + n);

						document.getElementById('typeCALU' + CALUNo).setAttribute('id', 'typeCALU' + n);
						document.getElementById('typeCALU' + n).setAttribute('onChange', 'javascript: document.getElementById("typeIndexCALU' + n + '").value = this.selectedIndex; if(this.selectedIndex==0){ document.getElementById("hauteurBVVCALU' + n + '").value="block"; document.getElementById("hauteurBVPVCALU' + n + '").value="none"; document.getElementById("hauteurACAVLU' + n + '").value="none"; document.getElementById("hauteurA100CAVLU' + n + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + n + '").value="none"; document.getElementById("hauteurBVCALU' + n + '").style.display="block"; document.getElementById("hauteurBVPCALU' + n + '").style.display="none"; document.getElementById("hauteurACALU' + n + '").style.display="none"; document.getElementById("hauteurA100CALU' + n + '").style.display="none"; document.getElementById("hauteurClaustraCALU' + n + '").style.display="none";}                         else if(this.selectedIndex==1){document.getElementById("hauteurBVVCALU' + n + '").value="none";document.getElementById("hauteurBVPVCALU' + n + '").value="block";document.getElementById("hauteurACAVLU' + n + '").value="none"; document.getElementById("hauteurA100CAVLU' + n + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + n + '").value="none"; document.getElementById("hauteurBVCALU' + n + '").style.display="none"; document.getElementById("hauteurBVPCALU' + n + '").style.display="block"; document.getElementById("hauteurACALU' + n + '").style.display="none"; document.getElementById("hauteurA100CALU' + n + '").style.display="none"; document.getElementById("hauteurClaustraCALU' + n + '").style.display="none";}                        else if(this.selectedIndex==2){document.getElementById("hauteurBVVCALU' + n + '").value="none";document.getElementById("hauteurBVPVCALU' + n + '").value="none";document.getElementById("hauteurACAVLU' + n + '").value="block";document.getElementById("hauteurACALU' + n + '").style.display="block"; document.getElementById("hauteurA100CAVLU' + n + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + n + '").value="none"; document.getElementById("hauteurBVCALU' + n + '").style.display="none"; document.getElementById("hauteurBVPCALU' + n + '").style.display="none"; document.getElementById("hauteurA100CALU' + n + '").style.display="none";}          else if(this.selectedIndex==3){document.getElementById("hauteurBVVCALU' + n + '").value="none";document.getElementById("hauteurBVPVCALU' + n + '").value="none";document.getElementById("hauteurACAVLU' + n + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + n + '").value="none"; document.getElementById("hauteurACALU' + n + '").style.display="none"; document.getElementById("hauteurA100CAVLU' + n + '").value="block"; document.getElementById("hauteurBVCALU' + n + '").style.display="none"; document.getElementById("hauteurBVPCALU' + n + '").style.display="none"; document.getElementById("hauteurA100CALU' + n + '").style.display="block"; document.getElementById("hauteurClaustraCALU' + n + '").style.display="none";}      else if(this.selectedIndex==4){document.getElementById("hauteurBVVCALU' + n + '").value="none";document.getElementById("hauteurBVPVCALU' + n + '").value="none";document.getElementById("hauteurACAVLU' + n + '").value="none"; document.getElementById("hauteurClaustraCAVLU' + n + '").value="none"; document.getElementById("hauteurACALU' + n + '").style.display="none"; document.getElementById("hauteurA100CAVLU' + n + '").value="none"; document.getElementById("hauteurBVCALU' + n + '").style.display="block"; document.getElementById("hauteurBVPCALU' + n + '").style.display="none"; document.getElementById("hauteurA100CALU' + n + '").style.display="block"; document.getElementById("hauteurClaustraCALU' + n + '").style.display="block";}');
						document.getElementById('typeIndexCALU' + CALUNo).setAttribute('id', 'typeIndexCALU' + n);
						document.getElementById('fixationCALU' + CALUNo).setAttribute('id', 'fixationCALU' + n);
						document.getElementById('fixationCALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("fixationIndexCALU' + n + '").value = this.selectedIndex;');
						document.getElementById('fixationIndexCALU' + CALUNo).setAttribute('id', 'fixationIndexCALU' + n);
						document.getElementById('lCALU' + CALUNo).setAttribute('id', 'lCALU' + n);
						document.getElementById('hauteurBVCALU' + CALUNo).setAttribute('id', 'hauteurBVCALU' + n);
						document.getElementById('hauteurBVCALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexBVCALU' + n + '").value = this.selectedIndex;');
						document.getElementById('hauteurIndexBVCALU' + CALUNo).setAttribute('id', 'hauteurIndexBVCALU' + n);
						document.getElementById('hauteurBVPCALU' + CALUNo).setAttribute('id', 'hauteurBVPCALU' + n);
						document.getElementById('hauteurBVPCALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexBVPCALU' + n + '").value = this.selectedIndex;');
						document.getElementById('hauteurIndexBVPCALU' + CALUNo).setAttribute('id', 'hauteurIndexBVPCALU' + n);
						document.getElementById('hauteurACALU' + CALUNo).setAttribute('id', 'hauteurACALU' + n);
						document.getElementById('hauteurACALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexACALU' + n + '").value = this.selectedIndex;');
						document.getElementById('hauteurIndexACALU' + CALUNo).setAttribute('id', 'hauteurIndexACALU' + n);
						document.getElementById('hauteurA100CALU' + CALUNo).setAttribute('id', 'hauteurA100CALU' + n);
						document.getElementById('hauteurA100CALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexA100CALU' + n + '").value = this.selectedIndex;');
						document.getElementById('hauteurIndexA100CALU' + CALUNo).setAttribute('id', 'hauteurIndexA100CALU' + n);
						document.getElementById('hauteurClaustraCALU' + CALUNo).setAttribute('id', 'hauteurClaustraCALU' + n);
						document.getElementById('hauteurClaustraCALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("hauteurIndexClaustraCALU' + n + '").value = this.selectedIndex;');
						document.getElementById('hauteurIndexClaustraCALU' + CALUNo).setAttribute('id', 'hauteurIndexClaustraCALU' + n);
						document.getElementById('colorCALU' + CALUNo).setAttribute('id', 'colorCALU' + n);
						document.getElementById('colorCALU' + n).setAttribute('onChange', 'javascript:document.getElementById("colorIndexCALU' + n + '").value = this.selectedIndex;             if(this.selectedIndex!=2 ){document.getElementById("OtherClrVCALU' + n + '").value = "none"; document.getElementById("OtherClrCALU' + n + '").style.display = "none";} else if(this.selectedIndex==2){document.getElementById("OtherClrVCALU' + n + '").value = "block"; document.getElementById("OtherClrCALU' + n + '").style.display = "block";}');
						document.getElementById('colorIndexCALU' + CALUNo).setAttribute('id', 'colorIndexCALU' + n);
						document.getElementById('OtherClrCALU' + CALUNo).setAttribute('id', 'OtherClrCALU' + n);
						document.getElementById('boitelettre' + CALUNo).setAttribute('id', 'boitelettre' + n);
						document.getElementById('boitelettre' + n).setAttribute('onChange', 'javascript:  document.getElementById("boiteIndexlettre' + n + '").value = this.selectedIndex;');
						document.getElementById('boiteIndexlettre' + CALUNo).setAttribute('id', 'boiteIndexlettre' + n);
						document.getElementById('DMuraux' + CALUNo).setAttribute('id', 'DMuraux' + n);
						document.getElementById('QteCALU' + CALUNo).setAttribute('id', 'QteCALU' + n);
						document.getElementById('tvaCALU' + CALUNo).setAttribute('id', 'tvaCALU' + n);
						document.getElementById('tvaCALU' + n).setAttribute('onChange', 'javascript:  document.getElementById("tvaIndexCALU' + n + '").value = this.selectedIndex;');
						document.getElementById('detailDescriptionCALU' + CALUNo).setAttribute('id', 'detailDescriptionCALU' + n);
						document.getElementById('tvaIndexCALU' + CALUNo).setAttribute('id', 'tvaIndexCALU' + n);
						document.getElementById('inputIncludeCALU' + CALUNo).setAttribute('id', 'inputIncludeCALU' + n);
						document.getElementById('hauteurBVVCALU' + CALUNo).setAttribute('id', 'hauteurBVVCALU' + n);
						document.getElementById('hauteurBVPVCALU' + CALUNo).setAttribute('id', 'hauteurBVPVCALU' + n);
						document.getElementById('hauteurACAVLU' + CALUNo).setAttribute('id', 'hauteurACAVLU' + n);
						document.getElementById('hauteurA100CAVLU' + CALUNo).setAttribute('id', 'hauteurA100CAVLU' + n);
						document.getElementById('hauteurClaustraCAVLU' + CALUNo).setAttribute('id', 'hauteurClaustraCAVLU' + n);
						document.getElementById('OtherClrVCALU' + CALUNo).setAttribute('id', 'OtherClrVCALU' + n);
					}
				}
			}
		}
	}
}