
<?php
# post method for sensitive data
$amount = $_GET['amount'];
$euro = $amount * 0.16;
$answer = "<br/>$amount Brazilian Real equals $euro Euro<br/>";
// echo $answer; // makes page download this form instead of showing on browser
echo $answer;

?>