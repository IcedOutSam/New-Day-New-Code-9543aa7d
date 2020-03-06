<?php
$geld = array('50', '20', '10', '5', '2', '1');
$aantal = $argv[1];
$restanten = $aantal;
foreach ($geld as $value) {
  if ($argv[1] == $value) {
    continue;
  }
    $totaal = floor($restanten / $value);
    if ($totaal > 0) {
      echo "U krijgt $totaal x €$value " . PHP_EOL;
      $aantal = $restanten;
      $restanten = floor($restanten % $value);
  }
}

 ?>
