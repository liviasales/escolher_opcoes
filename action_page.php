<?php

//var_dump($_POST);

$opcao = $_POST['fav_option'];
$item  = $_POST['fav_item'];

$size = sizeof($_POST['fav_item']);
//print_r(v);
//exit;
if($opcao == '1') {
    echo "Você escolheu a primeira opção!";
} else if($opcao == '2') {
    echo "Você escolheu a segunda opção!";
} else {
    echo "Você escolheu a terceira opção!";
}

    echo "<br> Você selecionou o(s) item(ns): " ;
foreach ($_POST['fav_item'] as $itens){
    echo $itens;

    if($size > 1){
        echo ", ";
    }

}

?>