<?php
require_once dirname(__FILE__).'/../config.php';

$credits = $_REQUEST['credits'];
$years = $_REQUEST['years'];
$percentage = $_REQUEST['percent'];

if(!(isset($credits) && isset($years) && isset($percentage))){
    $messages[]='Coś poszło nie tak!';
}
//sprawdzenie czy puste
if($credits == ""){
    $messages[] = "Nie podano wartości kredytu";
}
if($years == ""){
    $messages[] = "Nie podano na ile lat";
}
if($percentage == ""){
    $messages[] = "Nie podano na jakim oprocentowaniu";
}

//walidacja danych
if(empty($messages)){
    if(! is_numeric($credits)){
        $messages[] = "Kredyt musi być liczbą!";
    }
    if(! is_numeric($years)){
        $messages[] = "Lata musza być liczbą!";
    }
    if(! is_numeric($percentage)){
        $messages[] = "Oprocentowanie musi być liczbą!";
    }
}

//kalkulacja kredytu
if(empty($messages)){
    $credits = floatval($credits);
    $yers = intval($years);
    $percentage = floatval($percentage);

    $cost = $credits + ($credits*($percentage/100));
    $rata = $cost/($years*12);
}

include 'calc_view.php';
?>