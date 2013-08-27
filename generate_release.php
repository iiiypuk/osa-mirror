<?php
  # путь к файлам на сервере
  $url = 'https://osa.a2s.su/osa/OpenSource';

  for($numbers = 130; $numbers >= 1; $numbers -= 1) {
    if($numbers < 10) {
      echo('Выпуск №'.$numbers.'|');
      echo($url.'00'.$numbers.'.zip'."\n");
    }

    else if($numbers < 100) {
      echo('Выпуск №'.$numbers.'|');
      echo($url.'0'.$numbers.'.zip'."\n");
    }

    else {
      echo('Выпуск №'.$numbers.'|');
      echo($url.$numbers.'.zip'."\n");
    }
  }
?>