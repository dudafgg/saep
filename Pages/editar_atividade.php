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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $descricao = $_POST['descricao'];
        $data = $_POST['data'];
        $status = $_POST['status'];

        $sql = "UPDATE atividades SET descricao = '$descricao', data = '$data', status = '$status' WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: menu.php");
            exit();
        } else {
            echo "Erro ao editar a atividade: " . mysqli_error($conn);
        }
    }

    $sql = "SELECT * FROM atividades WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $atividade = mysqli_fetch_assoc($result);
?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title>Editar Atividade</title>
        </head>

        <body>
            <h1>Editar Atividade</h1>
            <form method="POST">
                <label for="descricao">Descrição:</label><br>
                <input type="text" id="descricao" name="descricao" value="<?php echo $atividade['descricao']; ?>"><br>

                <label for="data">Data:</label><br>
                <input type="date" id="data" name="data" value="<?php echo $atividade['data']; ?>"><br>

                <label for="status">Status:</label><br>
                <input type="text" id="status" name="status" value="<?php echo $atividade['status']; ?>"><br>

                <input type="submit" value="Salvar">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Atividade não encontrada.";
    }
} else {
    echo "ID da atividade não especificado.";
}
?>