<html>
<head>
<title>Memo Auschwitz</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<!-- <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script> -->
<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">
//prelaoder

//$(window).load(function() { // Czekamy na zaĹ‚adowanie caĹ‚ej zawartoĹ›ci strony
//	$("#preloader #image").fadeOut(); // Usuwamy grafikÄ™ Ĺ‚adowania
//	$("#preloader").delay(350).fadeOut("slow"); // Usuwamy diva przysĹ‚aniajÄ…cego stronÄ™
//})


//end preloader
var hours = 0;
var min = 10;
var sec=0;

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

  if(hours ==0 && min==0 && sec==0) {
      alert("End of time....");
  }

    document.getElementById('timer').innerHTML=
    hours+":"+((min < 10) ? "0" + min : min)+":"+((sec < 10) ? "0" + sec : sec);

    setTimeout("time();", 1000);
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

</script>
</head>
<body>
  <div id="preloader">
	<div id="image"></div>
</div>
  <div id="timer">CZAS</div>
  <div id="punkty">PUNKTY</div>
  <div id="ruchy">RUCHY</div>

<div id="oknogry">
<?php
for($i=1;$i<=40;$i++)
{
  echo '<img id="'.$i.'" src="" alt=""/>'; //F. PHP wypisuje na ekranie 40 elementow do zdjec
}
 ?>
</div>
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
create_table(28); //stworzenie tablic [20] ktore beda mialy sciezki do plikow
//Losowanie
var l = new Array(); // stworzenie tablicy pomocniczej do losowania
losuj_bp(28); // losowanie 30 liczb
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
                      }
  	});
  });
  //end jquery
</script>
</body>
</html>
