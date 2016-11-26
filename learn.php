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
 </div>

 </body>
 </html>
