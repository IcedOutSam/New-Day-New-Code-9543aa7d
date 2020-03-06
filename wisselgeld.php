<?php
$Doekoe = array('50', '20', '10', '5', '2', '1');
$aantal = $argv[1];
$restanten = $aantal;
$EurosEnCentjes = explode(".", $aantal);
$aantal = $EurosEnCentjes[0];
$centenInput = $EurosEnCentjes[1];
$restantenCentjes = $centenInput;
foreach ($Doekoe  as $value) {
  if ($aantal > 0) {
    $totaal = floor($restanten / $value);
    if ($totaal > 0) {
        echo "U krijgt $totaal x €$value " . PHP_EOL;
        $aantal = $restanten;
        $restanten = floor($restanten % $value);
    }
  }
}
$centjes = array('50', '20', '10', '5');
foreach ($centjes as $value2) {
  if ($centenInput > 0) {
    $totaalCentjes = floor($restantenCentjes / $value2);
    if ($totaalCentjes > 0) {
      echo "U krijgt $totaalCentjes x $value2 cent" . PHP_EOL;
      $centenInput = $restantenCentjes;
      $restantenCentjes = ($restantenCentjes % $value2);
    }
  }
}


 ?>
