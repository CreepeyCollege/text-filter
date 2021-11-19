<?php
require_once './config/includes.php';

$read = new Read('*', 'filter', 'word');
$filterSet = $read->executeRead();


if (isset($_POST['submit'])) {
    $text = $_POST["text"];

    $text = str_replace(",", " ,", $text);

    $explodeValue = explode(" ", $text);

    foreach ($explodeValue as $curse => $word) {
        if (in_array(strtolower($word), $filterSet)) {
            $explodeValue[$curse] = '***';
        }
    }
    $implodeValue = implode(" ", $explodeValue);
    echo $implodeValue;
}
?>
<form action="" method="post">
    Enter text here: <input type="text" name="text" id="text">
    <input type="submit" name="submit" value="submit">
</form>