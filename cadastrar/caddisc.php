<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\style.css">
    <title>Sistema Escolar</title>
</head>
<body>

<?php
$cod = $nome = "";
$msg = "";
$erro = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    include "testInput.php";

    $cod = test_input($_POST['cod']);
    $nome = test_input($_POST['nome']);

    if($erro == 0)
    {
        include "..\conection.php";

        $query = "INSERT INTO disciplinas(coddisciplina, nome) VALUES('$cod', '$nome');";
        $result = mysqli_query($conn, $query);

        $msg = $result?"Cadastro realizado!":"Dados duplicados ou inválidos.";
    }
    else
    {
        $msg = "Campos vazios não são permitidos.";
    }
}
?>

<h1>Sistema Escolar</h1>

    <form action="caddisc.php" method="post">
        <fieldset>
            <legend>Cadastro de Disciplinas</legend>
            <div>
                <label>Código da Disciplina</label>
                <input type="text" name="cod" placeholder="Código" value="<?php echo $cod?>">
            </div>
            <div>
                <label>Nome da Disciplina</label>
                <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome?>">
            </div>
            <button type="submit">Cadastrar</button>
        </fieldset>
    </form>
    <?php
        if (!empty($msg))
        {
            echo"<fieldset><p>$msg</p></fieldset>";
        }
    ?>
    <a href="..\index.html">Página Inicial</a>
</body>
</html>