<?php
$file = simplexml_load_file("https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange".date("d/m/Y"));

$valutes = array();

foreach ($file AS $el){
    $valutes[strval($el->cc)] = strval($el->rate);
}
print_r($valutes);

?>