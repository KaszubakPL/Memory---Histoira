<?php
$sciezka = '../zdjecia';
$katalog = opendir($sciezka);
$i = -4;
while($plik = readdir($katalog))
{
    if($plik == 'index.php' || $plik == '.' || $plik == '..')
      {
        echo '';
      }else{
        if($i == -1)
          {
            echo 'undefined <br />';
            echo '<img src="'.$plik.'" width=""/><br/>';
          }else{
            echo $i.'<br />';
            echo '<img src="'.$plik.'" width=""/><br/>';
          }
        }
      $i++;
}
 ?>
