<?php
$zmienna = $_GET['stan'];

if($zmienna==1){
    echo("Zmienna: ".$zmienna);
}else if($zmienna==2){
    echo("Zmienna inna: ".$zmienna);
}else{
    echo("Brak danych do pobrania"); 
}
?>