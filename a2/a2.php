<html>

<body>
  <h2>Armstrong
  </h2>

  <form action="" method="post">
    Enter a number : <br>
    <input type="number" name="num"><br>
    <input type="submit" name="sub"><br>

  </form>

  <?php

  function isarm($num)
  {
    $org = $num;
    $sum = 0;
    $len = strlen(($num));

    while ($num > 0) {
      $d = $num % 10;
      $sum += pow($d, $len);
      $num = (int) $num / 10;
    }

    return $org === $sum;
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num = $_POST["num"];


    if ($num > 0) {
      $num = (int) $num;

      if ($num != 0 && isarm($num)) {
        echo "<br>$num is an Armstrong number <br>";
        echo "<br> Armstrong numbers till $num : <br>";

        for ($i = 1; $i <= $num; $i++) {
          if (isarm($i)) {
            echo "$i<br>";
          }
        }
      } else {
        echo "$num is not an armstrong number";
      }

    } else {
      echo "only positive numbers allowed";
    }
  }
  ?>


</body>

</html>