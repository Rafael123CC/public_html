<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o ID da TV foi enviado
    if (isset($_POST["tv_id"])) {
        // Conecta ao banco de dados (substitua essas configurações com as suas)
        $servername = "localhost";
        $username = "seu_usuario";
        $password = "sua_senha";
        $dbname = "seu_banco_de_dados";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Verifica se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        
        // Obtém os dados do formulário
        $tv_id = $_POST["tv_id"];
        $localizacao = $_POST["localizacao"];
        $playlist = $_POST["playlist"];
        $layout = $_POST["layout"];
        
        // Prepara e executa a consulta SQL para atualizar os dados
        $sql = "UPDATE listaTVs SET local = '$localizacao', playlist = '$playlist', layout = '$layout' WHERE id = $tv_id";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar registro: " . $conn->error;
        }
        
        // Fecha a conexão com o banco de dados
        $conn->close();
    } else {
        echo "ID da TV não foi enviado.";
    }
} else {
    echo "O formulário não foi submetido.";
}
?>
