<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\pesquisar.css">
</head>
<body>
    <h1>Sistema Escolar</h1>

    <?php
        include 'pesquisar.php';
        pesquisar("disciplinas.php", "disciplinas");
        echo "<h3>".$title."</h3>";
    ?>
    
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>

        <?php
            include "..\conection.php";
            $list = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($list))
            {
                echo
                "<tr>
                  <td align='center'>".$data["coddisciplina"]."</td>
                  <td align='center'>".$data["nome"]."</td>
                </tr>";
            }
        ?>
    
    </table>
    <div class="links">
        <a href="disciplinas.php">Lista Geral</a>
        <a href="..\index.html">Página Inicial</a>
    </div>
</body>
</html>