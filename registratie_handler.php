<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      foreach ($_REQUEST as $key => $value) {
        echo 'jou '.$key.' is '. $value."<br>";
      }
     ?>
  </body>
</html>
