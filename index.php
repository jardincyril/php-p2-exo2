<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>exo2</title>
  </head>
  <body>
    <p>
    <?php
    $isEasy = true;
    if ($isEasy == true) {
      echo ('C\'est facile !'.'<br>');
    }
    else {
      echo ('C\'est difficile !'.'<br>');
    }
    switch ($isEasy) {
      case false:
      echo ('C\'est facile !');
      break;
      case true:
      echo ('C\'est difficile !');
      break;
    }
     ?>
   </p>
  </body>
</html>
