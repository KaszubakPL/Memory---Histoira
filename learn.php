<?php
$id = $_GET['id'];

function opisy($id)
  {
    if($id=="0")
      {
        return "<h2>Krematorium II</h2>
        <p>
        Widok komory gazowej i krematorium II. Fotografia wykonana przez SS w 1943 roku.
        </p>";
        }
      if($id=="1")
        {
          return "<h2>Brama główna KL Auschwitz</h2>
          <p>
          Arbeit macht frei (niem. praca czyni wolnym) – niemiecka formuła wywiedziona z rozpowszechnionego
          w tradycji protestanckiej cytatu z Ewangelii Jana (J 8, 32) Wahrheit macht frei
          (lit. prawda czyni wolnym, czy – wedle Biblii Tysiąclecia – prawda was wyzwoli).
          W 1872 niemiecki prawicowy pisarz Lorenz Diefenbach zatytułował swoją powieść wydaną w Wiedniu
          parafrazą hasła biblijnego: Arbeit macht frei. Hasło to stało się popularne w kręgach nacjonalistycznych.
          W latach trzydziestych XX wieku było używane przez propagandę nazistowską w Niemczech w programach
          zwalczania bezrobocia.
          </p>";
          }
        if($id == "2")
          {
            return "<h2>Puszka z cyklonem B</h2>
            <p>
            Cyklon B (oryginalna nazwa: Zyklon B) – nazwa handlowa insektycydu niemieckiego konsorcjum Degesch,
            w którym udziały miały koncerny Degussa, IG Farben i Th. Goldschmidt AG. Była to granulowana ziemia
            okrzemkowa nasycona cyjanowodorem (HCN), która uwalniała ten silnie trujący związek chemiczny po wyjęciu ze
             szczelnych pojemników.
            </p>";
          }
          if($id == "3")
            {
              return "<h2>Ława oskarżonych</h2>
              <p>
              Ława oskarżonych podczas procesu 40 członków załogi KL Auschwitz.
              Fotografię wykonano w Krakowie w 1947 r. (Archiwum Państwowego Muzeum Auschwitz-Birkenau)
              </p>";
            }
            if($id == "4")
              {
                return "<h2>Fotografie z albumu Karla Hoeckera</h2>
                <p>
                Richard Baer, trzeci i ostatni komendant Auschwitz; Josef Mengele, dr medycyny, jeden z
                obozowych lekarzy; Rudolf Hoess, założyciel obozu Auschwitz i jego pierwszy komendant.
                Międzybrodzie Bialskie, ośrodek wypoczynkowy SS, 1944 r.
                </p>";
              }
              if($id == "5")
                {
                  return "<h2>Wnętrze baraku murowanego</h2>
                  <p>
                  Wnętrze baraku na odcinku BI w KL Auschwitz II-Birkenau.
                  </p>";
                }
                if($id == "6")
                  {
                    return "<h2>Łyżka</h2>
                    <p>
                    Przedmiot znaleziony w obozie.
                    </p>";
                  }
                  if($id == "7")
                    {
                      return "<h2>Buty</h2>
                      <p>
                      Zimowe buty ochronne wartownika SS z drewnianymi podeszwami podbitymi metalowymi stożkowymi kolcami.
                      </p>";
                    }
                    if($id == "8")
                      {
                        return "<h2>Deportacja Żydów</h2>
                        <p>
                        Deportacja Żydów Oświęcimskich w wagonach towarowych.
                        </p>";
                      }
                      if($id == "9")
                        {
                          return "<h2>Różaniec z chleba</h2>
                          <p>
                        Na zdjęciu widoczny jest różaniec wykonany z chleba przez więźniarkę Franciszkę Studzińską (nr obozowy 26293). Studzińska urodziła się 9 marca 1917 r. w Krakowie. Była uczennicą krakowskiej Szkoły Muzycznej im. Władysława Żeleńskiego w klasie fortepianu, a po 1939 r. zaangażowała się w działalność konspiracyjną Związku Odbudowy Rzeczypospolitej, który wszedł następnie w skład Armii Krajowej. Pełniła funkcje łączniczki i zajmowała się m.in. kolportażem prasy podziemnej. Została aresztowana przez gestapo wraz z mężem i wywieziona do obozu koncentracyjnego KL Auschwitz, gdzie zginęła 4 kwietnia 1943 r.
                          </p>";
                        }
                        if($id == "10")
                          {
                            return "<h2>Rozbita lalka</h2>
                            <p>
                            Na zdjęciu widoczna jest rozbita lalka, jedyna zachowana lalka należąca do dziecka przywiezionego do Auschwitz na zagładę.
                                              </p>";
                          }
                          if($id == "11")
                            {
                              return "<h2>Zapiski Żydowkich członków Sonderkommando</h2>
                              <p>
                              Na zdjęciu widoczne są zapiski żydowskich członków Sonderkommando. W latach 1945‑1980 w rejonie krematoriów w Birkenau odnajdywano zakopane w szklanych lub metalowych pojemnikach zapiski członków Sonderkommando, grupy roboczej, złożonej głównie z więźniów żydowskich, których Niemcy zmusili do obsługi komór gazowych, stosów spaleniskowych i krematoriów. Zapiski te mają różnoraki charakter: niektóre posiadają formę listów pożegnalnych, inne zawierają opisy życia w getcie, deportacji do Auschwitz czy pobytu w Sonderkommando, w tym zagłady poszczególnych transportów i palenia zwłok.
Obok ważnej, unikatowej wartości źródłowej (np. w manuskrypcie Lewentala znajduje się szczegółowa relacja z przygotowań i przebiegu buntu w październiku 1944 r.) są świadectwem duchowych rozterek i psychicznych obciążeń, jakim poddawani byli więźniowie zatrudnieni w tym komandzie. </p>";
                            }
                            if($id == "12")
                              {
                                return "<h2>Walizki więźniów</h2>
                                <p>
                                Puste walizki więźniów przywiezionych do obozu.
                                </p>";
                              }
                              if($id == "13")
                                {
                                  return "<h2>Wnętrze krematorium</h2>
                                  <p>
                                  Piece jednego z krematoriów w Auschwitz.
                                  </p>";
                                }
                                if($id == "14")
                                  {
                                    return "<h2>Dzieci urodzone w obozie</h2><p>
                                             Dzieci urodzone w obozie w początkowym okresie istnienia obozu dla kobiet, bez względu na narodowość, były uśmiercane bez odnotowywania tego faktu w dokumentacji obozowej.
Od połowy 1943 r. pozostawiano przy życiu dzieci urodzone przez kobiety nie-żydowskiego pochodzenia. Po kilku dniach od porodu były rejestrowane i wydawano im numery. Dzieci więźniarek Żydówek były z reguły uśmiercane aż do listopada 1944 r., kiedy to została wstrzymana masowa zagłada Żydów. Jedynie w tzw. obozie rodzinnym dla Żydów z Terezina urodzonych tam dzieci nie zabijano. Nie zachowały się jednak dokumenty informujące o ich liczbie. Wiadomo, że wszystkie zginęły podczas likwidacji tego obozu w lipcu 1944 r.
Z dostępnych dokumentów można stwierdzić, że w obozie Auschwitz-Birkenau urodziło się co najmniej 700 dzieci (łącznie z obozem rodzinnym dla Cyganów).

                                             </p>";
                                  }
                                  if($id == "15")
                                    {
                                      return "<h2>Wnętrze 'kanady'</h2>
                                      <p>
                                      Piece jednego z krematoriów w Auschwitz.
                                      </p>";
                                    }
                                    if($id == "16")
                                      {
                                        return "<h2>Przed selekcją na rampie w Birkenau</h2>
                                        <p>
                                        Żydowskie kobiety i dzieci oczekujące na selekcję na rampie w Birkenau. W tle widoczne baraki odcinka BIa. Niemieckie zdjęcie z 1944 r.
                                        </p>";
                                      }
                                      if($id == "17")
                                        {
                                          return "<h2>Rampa 1942r</h2>
                                          <p>
                                        Od wiosny 1942 do połowy 1944 r. w miejscu tym zatrzymały się pociągi z ponad 500 tys. deportowanymi przez Niemców do Auschwitz, głównie Żydami a także Polakami, Romami (Cyganami) i innymi.
                                          </p>";
                                        }
                                        if($id == "18")
                                          {
                                            return "<h2>Zapiski Żydowkich członków Sonderkommando</h2>
                                            <p>
                                            Na zdjęciu widoczne są zapiski żydowskich członków Sonderkommando. W latach 1945‑1980 w rejonie krematoriów w Birkenau odnajdywano zakopane w szklanych lub metalowych pojemnikach zapiski członków Sonderkommando, grupy roboczej, złożonej głównie z więźniów żydowskich, których Niemcy zmusili do obsługi komór gazowych, stosów spaleniskowych i krematoriów. Zapiski te mają różnoraki charakter: niektóre posiadają formę listów pożegnalnych, inne zawierają opisy życia w getcie, deportacji do Auschwitz czy pobytu w Sonderkommando, w tym zagłady poszczególnych transportów i palenia zwłok.
  Obok ważnej, unikatowej wartości źródłowej (np. w manuskrypcie Lewentala znajduje się szczegółowa relacja z przygotowań i przebiegu buntu w październiku 1944 r.) są świadectwem duchowych rozterek i psychicznych obciążeń, jakim poddawani byli więźniowie zatrudnieni w tym komandzie.
                                            </p>";
                                          }
                                          if($id == "19")
                                            {
                                              return "<h2>Maksymilian Maria Kolbe</h2>
                                              <p>
                                            Maksymilian Maria Kolbe (właściwie Rajmund Kolbe urodzony 8 stycznia 1894 w Zduńskiej Woli, zmarł 14 sierpnia 1941 w KL Auschwitz) – polski franciszkanin
                                            konwentualny, prezbiter, męczennik, misjonarz i święty Kościoła katolickiego. Pierwszy polski męczennik okresu II wojny światowej wyniesiony na ołtarze podczas beatyfikacji w 1971.
                                            Więzień KL Auschwitz, oddał życie na selekcji za Franciszka Gajowniczka.
                                              </p>";
                                            }
                                            if($id == "20")
                                              {
                                                return "<h2>Rampa i krematoria w Birkenau</h2>
                                                <p>
                                              Zdjęcie lotnicze z 25 sierpnia 1944 r. Widoczna zachodnia część rampy wyładowczej w obozie Birkenau, krematoria II i III oraz fragment obozu kobiecego BIb i kilka baraków obozu BII.
                                                </p>";
                                              }
                                              if($id == "21")
                                                {
                                                  return "<h2>Ruiny komór gazowych</h2>
                                                  <p>
                                                Ruiny komór gazowych wysadzonych przez Niemców, uciekających przed Armią Czerwoną w styczniu 1945
                                                  </p>";
                                                }
                                                if($id == "22")
                                                  {
                                                    return "<h2>Dzieci po wyzwoleniu</h2>
                                                    <p>
                                                Spośród ponad 230 tys. dzieci deportowanych przez Niemców do Auschwitz wyzwolenia doczekało 700 z nich
                                                    </p>";
                                                  }
                                                  if($id == "23")
                                                    {
                                                      return "<h2>Spalanie zwłok</h2>
                                                      <p>
                                                    Fotografia wykonana nielegalnie przez członków Sonderkommando w 1944 r., przedstawiająca spalanie zwłok ofiar masowej zagłady w KL Auschwitz II-Birkenau.
                                                      </p>";
                                                    }
                                                    if($id == "24")
                                                      {
                                                        return "<h2>Transport Żydów Węgierskich</h2>
                                                        <p>
                                                        a zdjęciu uwidoczniony został transport Żydów węgierskich deportowanych do Auschwitz latem 1944 r., spośród których wielu pochodziło z okupowanej przez Węgry Słowacji i Transylwanii.
   Fotografia wykonana została na zlecenie SS. Pochodzi z tzw. „Albumu Lilli Jacob”. Był to album ze zdjęciami wykonanymi przez esesmanów pod koniec maja 1944 r. Fotografie przedstawiają m.in. przyjazd Żydów do Birkenau, selekcję na rampie, przejście do komór gazowych, pierwsze chwile w obozie osób pozostałych przy życiu, przewóz zrabowanego mienia (grabież) i jego sortowanie. Nazwany tak został od imienia i nazwiska Lili Jacob, ocalałej z Auschwitz słowackiej Żydówki, która odnalazła go po wojnie na terenie obozu koncentracyjnego Mittelbau-Dora.

                                                        </p>";
                                                      }
                                                      if($id == "25")
                                                        {
                                                          return "<h2>Birkenau - widok z lotu ptaka</h2>
                                                          <p>
                                                        KL Auschwitz II-Birkenau. Kadr z „Kroniki wyzwolenia KL Auschwitz” nakręconej w styczniu 1945 roku przez operatorów Armii Czerwonej.
                                                          </p>";
                                                        }
                                                        if($id == "26")
                                                          {
                                                            return "<h2>Krematorium IV</h2>
                                                            <p>
                                                          KL Auschwitz II-Birkenau. Krematorium IV w trakcie budowy. Fotografia wykonana w lutym 1943 roku przez SS.
                                                            </p>";
                                                          }
                                                          if($id == "27")
                                                            {
                                                              return "<h2>Brama w Birkenau</h2>
                                                              <p>
                                                            Tory kolejowe wewnątrz obozu i główna brama zwana „Bramą Śmierci”. Fotografował Stanisław Mucha w lutym/marcu 1945 r.
                                                              </p>";
                                                            }
                                                            if($id == "28")
                                                              {
                                                                return "<h2>Walec Krankemanna</h2>
                                                                <p>
                                                                Walec ciągnięty przez karną kompanię.
                                                                Walec Krankemanna – metalowy walec wykorzystywany do utwardzania nawierzchni placu apelowego i dróg obozowych. Walec jednocześnie
ciągnęli i pchali więźniowie ze Strafkompanie [niem. karna kompania]. Ze względu na ciężką pracę, wiele przypadków śmiertelnych
i sadystyczne zachowanie kapo, walec Krankemanna został przez więźniów zapamiętany przede wszystkim jako środek zadawania cierpień
i śmierci, a nie narzędzie pracy.
                                                                </p>";
                                                              }
                                                              if($id == "29")
                                                                {
                                                                  return "<h2>Klarnet</h2>
                                                                  <p>
                                                                Klarnet, na którym od połowy 1943 r. w orkiestrze obozowej grał więzień Ignacy Stopka, numer obozowy 86261. Wcześniej instrument ten był używany przez więźnia Eugeniusza Dulina z Warszawy, który zmarł w KL Auschwitz.
                                                                  </p>";
                                                                }
                                                                if($id == "30")
                                                                  {
                                                                    return "<h2>Powrót z pracy z cyklu „Dzień więźnia”</h2>
                                                                    <p>
                                                                    Autor: Mieczysław Kościelniak  Piórko, tusz czarny, papier, 66 x 82 cm, Polska 1950. Zbiory Państwowego Muzeum Auschwitz-Birkenau.
                                                                    </p>";
                                                                  }
                                                                  if($id == "31")
                                                                    {
                                                                      return "<h2>Trzewik dziecięcy</h2>
                                                                      <p>
                                                                        Trzewik dziecięcy oraz odnaleziona w nim fotografia podczas konserwacji.
                                                                      </p>";
                                                                    }
                                                                    if($id == "32")
                                                                      {
                                                                        return "<h2>Krystyna Trześniewska</h2>
                                                                        <p>
                                                                      Krystyna Trześniewska (ur. 8 lutego 1929 r. w Majdanie Królewskim, zamordowana 18 maja 1943 r.), przywieziona do KL Auschwitz 13 grudnia 1942 r. z Zamościa; zarejestrowana jako więźniarka polityczna (PPole), numer obozowy 27129. Zdjęcia wykonane przez Wilhelma Brasse'a podczas rejestracji w obozie.
                                                                        </p>";
                                                                      }
                                                                  if($id == "undefined")
                                                                    {
                                                                      return "<h2>Zegarek</h2><p>
                                                                        Motywem przewodnim 72. rocznicy jest czas. Symbolizuje go zegarek odnaleziony podczas prac archeologicznych prowadzonych 50 lat temu w okolicy komory gazowej i krematorium III. Należał do ofiary Holocaustu. – Czas nieuchronnie oddala nas od dziejów Auschwitz. Pamięć jest zawsze walką z czasem. Czas jednocześnie jest tym, czego zdarza się nam brakować w naszej misji uświadamiania kolejnych pokoleń przed niebezpieczeństwem populizmu, ksenofobii, antysemityzmu, rozmaitych egotyzmów narodowych – uważa dyrektor muzeum Piotr Cywiński.
                                                                      </p>";
                                                                    }
  }

 ?>
 <html>
 <head>
 <title>Memory of Auschwitz</title>
 <link href="http://www.auschwitz.org/szablony/auschwitz/favicon.ico" rel="SHORTCUT ICON">
 <link rel="stylesheet" type="text/css" href="style.css"/>
 <meta charset="utf-8" />
 <script type="text/javascript">
 function tab_wyn_ok()
   {
     var tmp1 = document.getElementById('tab_wynikow');
     var tmp2 = document.getElementById('tab_info');

     tmp1.style.display = "none";
     tmp2.style.display = "none";
   }

  function uzupelnianie(min,sec,ruchy)
    {
      min = 4 - min;
      sec = 60 - sec;
      document.getElementById('wpiszWynik').innerHTML = "Twój wynik to: "+ruchy+" ruchów, w czasie: 0:0"+min+":"+sec  ;
    }
 </script>
 </head>
 <body>
 <div id="final">
   <?php
   if($id == "undefined")
    {
      echo '<img id="final_img" src="zdjecia/undefined.jpg" alt=""/>';
    }else{
      echo '<img id="final_img" src="zdjecia/zdjecie ('.$id.').jpg" alt=""/>';
    }
       echo opisy($id);
    ?>
	<a class="ponowna_gra" href="./index.php">ZAGRAJ PONOWNIE</a>
 </div>
	<div id="tab_wynikow"><div id="tab_info">
		<h2>Twój wynik</h2>
		<p id="wpiszWynik">Tutaj div z wynikiem - po kliknieciu ok znika (wyswietla sie po wygranej)
		// pod spodem ew. tablica z wynikami (BD)</p>
<button id="final_ok_btn">OK</button>
	</div></div>

	<div id="footer" style="position:fixed;">Autorzy:<br/> Patryk Kaszuba | Bartosz Chowaniak | Łukasz Frączek</div>
  <script type="text/javascript">
    document.getElementById('final_ok_btn').onclick = tab_wyn_ok;
    <?php
      $min = $_GET['m'];
      $sec = $_GET['s'];
      $ruchy = $_GET['rch'];

      echo 'uzupelnianie('.$min.','.$sec.','.$ruchy.');';
     ?>
  </script>
 </body>
 </html>
