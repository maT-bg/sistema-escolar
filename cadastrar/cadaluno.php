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
$matricula = $nome = $endereco = $cidade = $codCurso = "";
$msg = "";
$erro = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'testInput.php';

    $matricula = test_input($_POST['matricula']);
    $nome = test_input($_POST['nome']);
    $endereco = test_input($_POST['endereco']);
    $cidade = test_input($_POST['cidade']);
    $codCurso = test_input($_POST['codCurso']);

    if ($erro == 0)
    {
        include "..\conection.php";
        
        $query = "INSERT INTO alunos(matricula, nome, endereco, cidade, codcurso) VALUES('$matricula', '$nome', '$endereco', '$cidade', '$codCurso');";
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

    <form action="cadaluno.php" method="post">
        <fieldset>
            <legend>Cadastro de Alunos</legend>
            <div>
                <label>Matrícula</label>
                <input type="text" name="matricula" placeholder="Matricula" value="<?php echo $matricula;?>">
            </div>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome;?>">
            </div>
            <div>
                <label>Endereço</label>
                <input type="text" name="endereco" placeholder="Endereco" value="<?php echo $endereco;?>">
            </div>
             <div>
                <label>Cidade</label>
                <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $cidade;?>">
            </div>
             <div>
                <label>Código do Curso</label>
                <input type="text" name="codCurso" placeholder="Curso" value="<?php echo $codCurso;?>">
            </div>
            <button type="submit">Cadastrar</button>
        </fieldset>
        <?php
            if (!empty($msg))
            {
            echo"<fieldset><p>$msg</p></fieldset>";
            }
        ?>
    </form>
    <a href="..\index.html">Página Inicial</a>
</body>
</html>