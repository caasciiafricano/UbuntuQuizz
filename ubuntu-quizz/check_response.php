<?php
require_once "lib/KaasConnectionDB/config/config.php";
require_once "lib/KaasConnectionDB/lib/kaasConnectionDB.php";

echo "<pre>";
print_r($_GET);

$bd = new KaasConnectionDB();

// Fecthing all a questions and your respectives responses.
/*
$resultado = $bd->select("SELECT R.estado FROM tb_perguntas AS P 
                              INNER JOIN tb_respostas AS R ON R.pergunta_id = '".$aleatorio."'  
                              INNER JOIN tb_niveis AS N ON P.nivel_id = N.id
                              WHERE P.id = '".$aleatorio."' ORDER BY RAND()");

*/

// Fetch datas from the $_GET
$dados = [
    "p" => $_GET['pergunta_gerada'],
    "r" => $_GET['resposta_escolhida'],
];

// Search for answer and answer states chosen by the player
$resultado = $bd->select("SELECT resposta, estado FROM tb_respostas WHERE pergunta_id = '" . $dados['p'] . "' AND id = '" . $dados['r'] . "' ");

$resposta = $resultado[0]['resposta'];
$estado = $resultado[0]['estado'];

#echo $resposta;
#echo $estado;
#die();

// If response is not right send code error and finnish the game
if ($estado != "correcto") {
    header("Location: scene.php?resposta='" . $resposta . "'&estado= '" . $estado . "' ");
    return;
}

// if response is right
header("Location: scene.php");

