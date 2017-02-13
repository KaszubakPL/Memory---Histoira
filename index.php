<html>
<head>
<title>Memo Auschwitz</title>
<link href="http://www.auschwitz.org/szablony/auschwitz/favicon.ico" rel="SHORTCUT ICON">
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta charset="utf-8" />
<!-- <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script> -->
<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript">
//PRELAODER do calej strony
$(window).load(function() { // Czekamy na załadowanie całej zawartości strony
				$("#preloader #image").delay(10000).fadeOut(); // Usuwamy grafikę ładowania
				$("#preloader").delay(10000).fadeOut("slow"); // Usuwamy diva przysłaniającego stronę
			})
//end


var hours = 0;
var min = 5;
var sec=0;
var wystopienie = false;
var timeout;

function time() {
  if(sec > 0) {
      sec--;
  } else if(min > 0) {
      min--;
      sec = 59;
  } else if(hours > 0) {
      hours--;
      min = 59;
      sec=59;
  }

  if((hours ==0 && min==0 && sec==0)&&(wystopienie != true)) {
      alert("End of time...");
			wystopienie = true;
  }

    document.getElementById('timer').innerHTML=
    hours+":"+((min < 10) ? "0" + min : min)+":"+((sec < 10) ? "0" + sec : sec);

    timeout = setTimeout("time();", 1000);
}
  function losuj_bp(ile)
    {
      for (i=1;i<ile;i++) {
        los = parseInt(Math.round(Math.random()*ile),0);
        jest = false;

        for (j=1;j<=l.length;j++)    if (l[j]==los) jest=true;
          if (jest) i--;    else l[i] = los;
          }// koneic losowania
    } // koniec F. losowania

  function create_table(how)
    {
        for(var i=1;i<=how;i++)
          {
            t_src[i] = "zdjecia/zdjecie ("+i+").jpg";
          }
    }

	function imagesloadinmemory(i)
		{

		}

  function set_img(how)
    {
      for(i=1;i<=how;i++)
      {
        var j = i;
          if(i>20)
            {
              j-=20;
            }
            if(t_src[l[j]] === undefined)
              {
                document.getElementById(i).alt = "zdjecia/undefined.jpg"; // wczesniej .src teraz .alt
              }else{
                document.getElementById(i).alt = t_src[l[j]];
              }
      }

    }//set img
  function view_img(how)
      {
        for(i=1;i<=how;i++)
          {
            document.getElementById(i).src = "test.jpg";

          }
      }//view img
//PRELAODER
$(function () {
$('img').hide();
});
var i = 0;
var int=0;
var imagesload = new Array(40); //nowe
$(window).bind("load", function() {
var int = setInterval("doThis(i)",250);
});
function doThis() {
var images = $('img').length;
if (i >= images) {
clearInterval(int);
}
imagesload[i] = new Image(); //ladowanie obrazkow do pamieci zeby nie czekac
imagesload[i] = t_src[i];//to i u gory nowe
$('img:hidden').eq(0).fadeIn(250);

i++;
}
//END PRELAODER
</script>
</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
    <div id="image"></div>
  </div>
  <!-- /Preloader -->
  <div id="wyniki_table">
		<div id="timerDiv" class="wyniki">Czas: <span id="timer">

	  </span></div>
	  <div id="punktyDiv" class="wyniki">Punkty: <span id="punkty">

	  </span></div>
	  <div id="ruchyDiv" class="wyniki">Ruchy: <span id="ruchy">

	  </span></div>
	</div>

<div id="oknogry" class="image-holder">
<?php // wyswietlanie obrazkow
/*for($i=1;$i<=40;$i++)
{
  echo '<img id="'.$i.'" src="" alt=""/>'; //F. PHP wypisuje na ekranie 40 elementow do zdjec
}*/

function generuj_zbior($ilosc){
	$ile=0;
	$zbior_liczb=array();
	while($ile<$ilosc){
			$ile++;
			$zbior_liczb[]=$ile;
	}
	return $zbior_liczb;
}

function losuj_unikalne($zbior,$ile_wylosowac){

	$wylosowane_liczby=array();
	for($i=0;$i<$ile_wylosowac;$i++){
		$wylosowany_index = array_rand($zbior,1);
		$wylosowane_liczby[]=$zbior[$wylosowany_index];
		unset($zbior[$wylosowany_index]);
	}
	return $wylosowane_liczby;
}

$zbior = generuj_zbior(40);
$losowanie = losuj_unikalne($zbior,40);

$los_tmp = 40;
while($los_tmp>0)
	{
		echo '<img id="'.$losowanie[$los_tmp-1].'" src="" alt=""/>'; // 40 losowych zdjec
		$los_tmp--;
	}
 ?>
</div>

<div id="footer">Autorzy:<br/> Patryk Kaszuba | Bartosz Chowaniak | Łukasz Frączek</div>

<script type="text/javascript">
//blokada PPM
// Ukrycie przed przeglÄ…darkami nie obsĹ‚ugujÄ…cymi JavaScriptĂłw
var MSIE = navigator.appName == "Microsoft Internet Explorer"?true:false;
var NN = navigator.appName == "Netscape"?true:false;
function blockMouseClick(evt)
{
  if(MSIE && (event.button == 2)){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
  else if(NN && ((evt.which == 2) || (evt.which == 3))){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
}
document.onmousedown=blockMouseClick;
window.onload=function(){
	var clicked = false;
	document.onclick = function(){
		if(!clicked)
			{
				clicked = true;
				time();
			}
	}

};

var t_src = new Array(); // Tworzenie tablicy niewymiarowej
create_table(38); //stworzenie tablic [20] ktore beda mialy sciezki do plikow
//Losowanie
var l = new Array(); // stworzenie tablicy pomocniczej do losowania
losuj_bp(32); // losowanie 30 liczb
view_img(40);//wyswietanie hoverow
set_img(40); //ustawienie src na alt losowych obrazkow - 40

//klikanie w obrazki
  //jquery - pobieranie ID oraz SRC
  var identyfikator = new Array();
  var source = new Array();
  var alt = new Array();
  var action = 1;
  var kroki = 20;
  var ruch=0;



  $(document).ready(function() {
  	$("img").bind("click", function() {
      if(action==3)
          {
            //zerowanie obrazkow
            document.getElementById(identyfikator[1]).src = "test.jpg";
            document.getElementById(identyfikator[2]).src = "test.jpg";
            document.getElementById(identyfikator[1]).alt = alt[10];
            document.getElementById(identyfikator[2]).alt = alt[11];
            //zerowanie
            action=1;
            source[1]=0;
            //identyfikator[1]=0;
            source[2]=0;
            //identyfikator[2]=0;
            alt[1]=0;
            alt[2]=0;
          }
                if ($(this).attr("id") != null) {
            			identyfikator[action] = $(this).attr("id");
            		}
                if ($(this).attr("src") != null) {
            			source[action] = $(this).attr("src");
            		}
                if ($(this).attr("alt") != null) {
            			alt[action] = $(this).attr("alt");
            		}
                    //Odkrywanie zdjecia
                    //alert(action + " " + source[action]  + " " +  alt[action] + " " + identyfikator[action]); //sprawdzenie
                    //pobieranie wartosci i podmiana zdjecia
                      //zmienne pomocniczej
                      source[action + 9] = ""; // od 10 zaczyna sie zmienna pomocnicza w tej samej tablicy
                      alt[action + 9] = "";
                      //identyfikator[action + 9] = "";

                      source[action+9] = source[action]; //przypisanie do zmiennych pomocniczych wartosci
                      alt[action+9] = alt[action];
                      identyfikator[action+9] = identyfikator[action];

                      //zamiana obrazkow
                      document.getElementById(identyfikator[action]).src = alt[action+9];

                      //sprawdzenie identyfikatorow do liczenia punktow
                      if((identyfikator[1]!=identyfikator[2]) && (alt[1]==alt[2]))
                        {
                          kroki--;
                          document.getElementById('punkty').innerHTML = kroki;
                          document.getElementById(identyfikator[1]).style = "visibility: hidden; transition-duration: 500ms;"; // znikanie jak sie poprawne klikanie
                          document.getElementById(identyfikator[2]).style = "visibility: hidden; transition-duration: 500ms;";
                        }

                      ruch++;
                      document.getElementById('ruchy').innerHTML = ruch;
                      //CODE UP !
                    action++; // inkrementacja akcji
                    //END OF GAME
                    if(kroki == 0)
                      {
                        document.getElementById('oknogry').innerHTML = "wygrana";
                        //wypisac w jakim czasie i ile pkt uzyskano
                        //stop czasu
                        //wyswietlenie losowego obrazka i opisu do niego
                        //alert(l[5]); // tu wylosowany obrazek z sesji sie wyswietla. zrobic php z tymi obrazkami i opisami
												clearTimeout(timeout);
												var loc = "learn.php?id="+l[5]+"&"+"m="+min+"&"+"s="+sec+"&"+"rch="+ruch;
                        location.href = loc;
                      }
  	});
  });
  //end jquery
</script>
</body>
</html>
