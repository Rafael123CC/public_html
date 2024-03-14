<?php include("../ligacao.php")?>
<?php
@session_start();

require_once __DIR__ . '/../config.php';
//require_once __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\authentication\Users;

$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
$foto= filter_input(INPUT_POST, 'userImageURL', FILTER_SANITIZE_STRING);
$p['email']=$email;
//echo $email;


 $sql = "SELECT `processo`, `email`, `nome`, `foto`, `tipo` FROM `utilizadores`  WHERE `Email`='" . $email . "'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $_SESSION["processo"]=$row["processo"];
    $_SESSION["nome"]=$row["nome"];
    $_SESSION["email"]=$row["email"];
    $_SESSION["foto"]=$foto;
    $_SESSION["tipo"]=$row["tipo"];
  }
  echo "https://tv.alunos.esmonserrate.org/template/tempAdmin/";
}else {
  echo  "https://tv.alunos.esmonserrate.org/erro.html";
}
?>
