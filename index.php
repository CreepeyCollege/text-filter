<?php
include_once './config/includes.php';

$read = new Read('*', 'filter', 'word');
$filterSet = $read->executeRead();

$text = "Word, Fuck, Test, Shit, Fuck";
$text = str_replace(",", " ,", $text);

$explodeValue = explode(" ", $text);

foreach ($explodeValue as $getal => $word) {
    if (in_array(strtolower($word), $filterSet)) {
        $explodeValue[$getal] = '***';
    }
}
$implodeValue = implode(" ", $explodeValue);
echo $implodeValue;