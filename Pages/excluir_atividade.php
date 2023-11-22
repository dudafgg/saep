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
    $sql = "DELETE FROM atividades WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: menu.php");
        exit();
    } else {
        echo "Erro ao excluir a atividade: " . mysqli_error($conn);
    }
} else {
    echo "ID da atividade não especificado.";
}
