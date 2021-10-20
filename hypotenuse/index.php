<?php

$calculationWasRequested = $_GET['calculateRequest'];

$firstSide = 3;
$secondSide = 4;

if (isset($calculationWasRequested)) {
  $result = sqrt(pow($firstSide, 2) + pow($secondSide, 2));
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Hipotenusa</title>
</head>

<body>
  <main>
    <div>
      <h2>
        This webpage calculates the hypotenuse of <strong><?php echo "$firstSide cm and $secondSide cm"; ?></strong>.
      </h2>
      <?php
      if (!isset($result)) {
        echo '<p>Click <em>"calculate"</em> to see the result!</p>';
      } else {
        echo "<p>Resultado: <strong>$result</strong></p>";
      }
      ?>
      <form method='GET' action=<?php echo $_SERVER['PHP_SELF']; ?>>
        <button type='submit' name='calculateRequest'>Calculate</button>
      </form>
      <p>Jesús Nava - 27.266.066 - N1013</p>
    </div>
  </main>
</body>

</html>