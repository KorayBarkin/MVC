<?php
 
include("model/meyveler.php");

$meyveler = new Meyveler();

function ilkVeSon(){
    global $meyveler;
    $ilkMeyve = $meyveler->ilkMeyveAl();
    $sonMeyve = $meyveler->SonMeyveyiAl();
    return view("meyveler", $ilkMeyve ."-". $sonMeyve);
}

function ikinciVeBesinci(){
    global $meyveler;
    $tumMeyveler = $meyveler->TumMeyveleriAl();
    $ikinciMeyve = $tumMeyveler[1];
    $besinciMeyve = $tumMeyveler[4];
    return view("meyveler", $ikinciMeyve ."-". $besinciMeyve);
}

function view($viewIsmi, $meyve){
    return `php view/$viewIsmi.blade.php $meyve`;
}


echo call_user_func($argv[1]);