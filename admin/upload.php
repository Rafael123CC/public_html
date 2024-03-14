<?php require "../ligacao.php";

$targetDir = "../uploads/";

if (isset($_FILES['file']) && $_FILES['file']['error'] == 0){

    $fileName = basename($_FILES["file"]["name"]);
    $targetPath = $targetDir.$fileName;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)){


        $sql = "INSERT INTO Medias (filename, URL) VALUES ('$fileName','$targetPath')";
        if($conn->query($sql) === TRUE){
            echo "Ficheiro carregado e guardado na BD.";
        }
        else{
            echo "Erro: ".$sql.". Detalhes do erro: ".$conn->error;
        }
    }
    else{
        echo "Erro ao mover o ficheiro.";
    }
}
else{
    echo "Ficheiro não carregado.";
}
$conn->close();
?>