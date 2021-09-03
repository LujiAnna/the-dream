
<?php
# post method for sensitive data
$amount = $_POST['amount'];
# Check if amount field is 0, empty, or not set at all'
# Read more: https://www.php.net/manual/en/function.empty.php
if (empty($amount)) {
  # If the field is empty, display a message to the user
  echo " <br/> Please fill in the amount";
  # Process the form data if the input field is not empty
} else {
  $euro = $amount * 0.16;
  $answer = "<br/>$amount Brazilian Real equals $euro Euro<br/>";
  # makes page download this form instead of showing on browser
  echo $answer;
}
?>