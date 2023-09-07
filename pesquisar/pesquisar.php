<?php

$query;
$title;


function pesquisar($action,$table)
{
    global $query, $title;

    $query = "SELECT * FROM ".$table." ORDER BY nome";
    $title = "Lista Geral";

    if(isset($_POST['buscar'])){
        $nome = isset($_POST['nome'])?$_POST['nome']:null;
        $query = 'SELECT * FROM '.$table.' WHERE nome LIKE "'.$nome.'%" ORDER BY nome';
        $title = 'Resultado da Busca "'.$nome.'"';
    }
    echo'
    <form action="'.$action.'" method="post">
        <label for="nome">Pesquisar por nome: </label>
        <input type="text" name="nome" id="nome">
        <button type="submit" name="buscar">Buscar</button>
    </form>';
}
?>

