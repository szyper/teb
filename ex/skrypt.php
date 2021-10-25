<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwód</title>
  </head>
  <body>
    <?php
      if (!empty($_POST['sideA']) && !empty($_POST['sideB'])) {
        $a=str_replace(",", ".", $_POST['sideA']);
        $b=str_replace(",", ".", $_POST['sideB']);
        $area=number_format($a*$b, 2);
        $rectangle=number_format(2*$a+2*$b, 2);

        echo <<< RESULT
          Długości boków:<br>
          a = $a, b = $b<hr>
          Pole wynosi: $area cm<sup>2</sup><br>
          Obwód wynosi: $rectangle cm<br>
RESULT;
      }else{
        // echo "Wypelnij wszystkie dane prawidłowo!";
        ?>
          <script>
            history.back();
          </script>
        <?php
      }
      // echo str_replace(",", ".", "3,5");
     ?>
     <a href="./4_area.php">Strona główna</a>
  </body>
</html>
