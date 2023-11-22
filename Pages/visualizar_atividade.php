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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obter os detalhes da atividade com o ID recebido
    $sql = "SELECT * FROM atividades WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $atividade = mysqli_fetch_assoc($result);
        // Aqui você pode exibir os detalhes da atividade como desejar
        echo "<h1>Detalhes da Atividade</h1>";
        echo "<p>ID: " . $atividade['id'] . "</p>";
        echo "<p>Descrição: " . $atividade['descricao'] . "</p>";
        echo "<p>Data: " . $atividade['data'] . "</p>";
        echo "<p>Status: " . $atividade['status'] . "</p>";
    } else {
        echo "Atividade não encontrada.";
    }
} else {
    echo "ID da atividade não especificado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Vizualizar Atividade</title>
</head>

<body>
    <button onclick="editarAtividade (<?php echo $atividade['id']; ?>)">Editar</button>
    <button onclick="voltar (<?php echo $atividade['id']; ?>)">Voltar</button>

    <script>
        function editarAtividade(id) {
            window.location.href = 'editar_atividade.php?id=' + id;
        }

        function voltar(id) {
            window.location.href = 'menu.php?id=' + id;
        }
    </script>

</body>

</html>