<?php
$id = $_GET['id'];

function opisy($id)
  {
      if($id=="1")
        {
          return "tu opis 1 ";
        }
        if($id == "2")
          {
            return "tu opis 2 ";
          }
          if($id == "3")
            {
              return "tu opis 3";
            }
            if($id == "4")
              {
                return "tu opis 3";
              }
              if($id == "5")
                {
                  return "tu opis 3";
                }
                if($id == "6")
                  {
                    return "tu opis 3";
                  }
                  if($id == "7")
                    {
                      return "tu opis 3";
                    }
                    if($id == "8")
                      {
                        return "tu opis 3";
                      }
                      if($id == "9")
                        {
                          return "tu opis 3";
                        }
                        if($id == "10")
                          {
                            return "tu opis 3";
                          }
                          if($id == "11")
                            {
                              return "tu opis 3";
                            }
                            if($id == "12")
                              {
                                return "tu opis 3";
                              }
                              if($id == "13")
                                {
                                  return "tu opis 3";
                                }
                                if($id == "14")
                                  {
                                    return "<h2>Dzieci urodzone w obozie</h2><p>
                                             Dzieci urodzone w obozie w początkowym okresie istnienia obozu dla kobiet, bez względu na narodowość, były uśmiercane bez odnotowywania tego faktu w dokumentacji obozowej.
Od połowy 1943 r. pozostawiano przy życiu dzieci urodzone przez kobiety nie-żydowskiego pochodzenia. Po kilku dniach od porodu były rejestrowane i wydawano im numery. Dzieci więźniarek Żydówek były z reguły uśmiercane aż do listopada 1944 r., kiedy to została wstrzymana masowa zagłada Żydów. Jedynie w tzw. obozie rodzinnym dla Żydów z Terezina urodzonych tam dzieci nie zabijano. Nie zachowały się jednak dokumenty informujące o ich liczbie. Wiadomo, że wszystkie zginęły podczas likwidacji tego obozu w lipcu 1944 r.
Z dostępnych dokumentów można stwierdzić, że w obozie Auschwitz-Birkenau urodziło się co najmniej 700 dzieci (łącznie z obozem rodzinnym dla Cyganów).

                                             </p>";
                                  }
                                  if($id == "3")
                                    {
                                      return "tu opis 3";
                                    }
                                    if($id == "3")
                                      {
                                        return "tu opis 3";
                                      }
                                      if($id == "3")
                                        {
                                          return "tu opis 3";
                                        }
                                        if($id == "3")
                                          {
                                            return "tu opis 3";
                                          }
                                          if($id == "3")
                                            {
                                              return "tu opis 3";
                                            }
                                            if($id == "3")
                                              {
                                                return "tu opis 3";
                                              }
                                              if($id == "3")
                                                {
                                                  return "tu opis 3";
                                                }
                                                if($id == "3")
                                                  {
                                                    return "tu opis 3";
                                                  }
                                                  if($id == "3")
                                                    {
                                                      return "tu opis 3";
                                                    }
                                                    if($id == "3")
                                                      {
                                                        return "tu opis 3";
                                                      }
                                                      if($id == "3")
                                                        {
                                                          return "tu opis 3";
                                                        }
                                                        if($id == "3")
                                                          {
                                                            return "tu opis 3";
                                                          }
                                                          if($id == "3")
                                                            {
                                                              return "tu opis 3";
                                                            }
                                                            if($id == "3")
                                                              {
                                                                return "tu opis 3";
                                                              }
                                                              if($id == "3")
                                                                {
                                                                  return "tu opis 3";
                                                                }
                                                                if($id == "3")
                                                                  {
                                                                    return "tu opis 3";
                                                                  }
                                                                  if($id == "undefined")
                                                                    {
                                                                      return "<h2>Młodzież żydowska w Oświęcimiu</h2><p>
                                                                        Młodzież żydowska w Oświęcimiu przed wojną
                                                                      </p>";
                                                                    }
  }

 ?>
 <html>
 <head>
 <title>Memo Auschwitz</title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
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
		<p>Tutaj div z wynikiem - po kliknieciu ok znika (wyswietla sie po wygranej)
		// pod spodem ew. tablica z wynikami (BD)</p>
<button id="final_ok_btn">OK</button>
	</div></div>

	<div id="footer">Autorzy:<br/> Patryk Kaszuba | Bartosz Chowaniak | Łukasz Frączek</div>
 </body>
 </html>
