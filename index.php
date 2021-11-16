<?php
include_once './config/includes.php';

$read = new Read('*', 'filter', 'word');
$filterSet = $read->executeRead();

$text = "Fuck, Shit! Test B!tch";
$text = str_replace(",", " ,", $text);

$explodeValue = explode(" ", $text);

foreach ($explodeValue as $curse => $word) {
    if (in_array(strtolower($word), $filterSet)) {
        $explodeValue[$curse] = '***';
    }
}
$implodeValue = implode(" ", $explodeValue);
echo $implodeValue;