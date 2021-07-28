<html>

<body>
  <?php
  # post method for sensitive data
  $amount = $_GET['amount'];
  $euro = $amount * 0.16;
  $answer = "<br/>$amount Brazilian Real equals $euro Euro<br/>";
  echo $answer;

  ?>
</body>

</html>