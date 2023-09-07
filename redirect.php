<?php
if(isset($_GET["opcao"]) && isset($_GET["funcao"]))
{
    if($_GET["funcao"] == "cadastrar")
    {
        switch($_GET["opcao"])
        {
            case "aluno":
                header("location: cadastrar\cadaluno.php");       
            break;
            case "curso":
                header("location: cadastrar\cadcurso.php");
            break;
            case "disciplina":
                header("location: cadastrar\caddisc.php");
            break;
        }
    }
    else if($_GET["funcao"] == "pesquisar")
    {
        switch($_GET["opcao"])
        {
            case "aluno":
                header("location: pesquisar\alunos.php");
            break;
            case "curso":
                header("location: pesquisar\cursos.php");
            break;
            case "disciplina":
                header("location: pesquisar\disciplinas.php");
            break;
        }
    }
    else
    {
        die("Erro no redirecionamento.");
    }
}
?>