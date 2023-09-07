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
$codCurso = $nome = $disc1 = $disc2 = $disc3 = "";
$msg = "";
$erro = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include "testInput.php";

    $codCurso = test_input($_POST['cod']);
    $nome = test_input($_POST['nome']);
    $disc1 = test_input($_POST['disc1']);
    $disc2 = test_input($_POST['disc2']);
    $disc3 = test_input($_POST['disc3']);

    if ($erro == 0)
    {
        include "..\conection.php";

        $query = "INSERT INTO cursos(codcurso, nome, coddisc1, coddisc2, coddisc3) VALUES('$codCurso', '$nome', '$disc1', '$disc2', '$disc3');";    
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

    <form action="cadcurso.php" method="post">
        <fieldset>
            <legend>Cadastro de Cursos</legend>
            <div>
                <label>Código do Curso</label>
                <input type="text" name="cod" placeholder="Código" value="<?php echo $codCurso;?>">
            </div>
            <div>
                <label>Nome do curso</label>
                <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome;?>">
            </div>
            <div>
                <label>Código da Disciplina 1</label>
                <input type="text" name="disc1" placeholder="Disciplina 1" value="<?php echo $disc1;?>">
            </div>
            <div>
                <label>Código da Disciplina 2</label>
                <input type="text" name="disc2" placeholder="Disciplina 2" value="<?php echo $disc2;?>">
            </div>
            <div>
                <label>Código da Disciplina 3</label>
                <input type="text" name="disc3" placeholder="Disciplina 3" value="<?php echo $disc3;?>">
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