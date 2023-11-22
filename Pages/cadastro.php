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

if (!isset($_SESSION['login'])) {
    header("Location: inicio.php");
    exit();
}

$login = $_SESSION['login'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $atividade_descricao = $_POST['descricao'];
    $atividade_data = $_POST['data'];
    $atividade_status = $_POST['status'];

    $sql = "INSERT INTO atividades (descricao, data, status)
    VALUES ('$atividade_descricao', '$atividade_data', '$atividade_status')";

    if (mysqli_query($conn, $sql)) {
        header("Location: menu.php");
    } else {
        echo "Erro ao cadastrar atividade" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Atividade</title>
</head>

<body>
    <form actio="inicio.php" method="post">
        Atividade: <input type="text" name="descricao"> <br>
        Data: <input type="date" name="data"> <br>
        Status: <input type="text" name="status"> <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>