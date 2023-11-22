<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "nautical_industry_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$login = $_SESSION['login'];

function listaatividades()
{
    global $conn, $login;
    $sql = "SELECT id, descricao, data, status FROM atividades";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Erro de consulta:" . mysqli_error($conn));
    }
    $atividades = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $atividades[] = $row;
    }
    return $atividades;
}

$atividades = listaatividades()


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>

<body>
    <h1>Bem-vindo,
        <?php echo $login ?>
    </h1>

    <button onclick=window.location.href="inicio.php">Sair</button>

    <button onclick=window.location.href="cadastro.php">Cadastrar</button>

    <h2>Lista de atividades</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Atividade</th>
            <th>Data</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($atividades as $atividade) : ?>
        <tr>
            <td>
                <?php echo $atividade['id']; ?>
            </td>
            <td>
                <?php echo $atividade['descricao']; ?>
            </td>
            <td>
                <?php echo $atividade['data']; ?>
            </td>
            <td>
                <?php echo $atividade['status']; ?>
            </td>

            <td><button onclick="excluirAtividade (<?php echo $atividade['id']; ?>)">Excluir</button></td>
            <td><button onclick="vizualizarAtividade (<?php echo $atividade['id']; ?>)">Visualizar</button></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
    function excluirAtividade(id) {
        if (confirm('Tem certeza que deseja excluir esta atividade?')) {
            window.location.href = 'excluir_atividade.php?id=' + id;
        }
    }

    function vizualizarAtividade(id) {
        window.location.href = 'visualizar_atividade.php?id=' + id;
    }
    </script>

</body>

</html>