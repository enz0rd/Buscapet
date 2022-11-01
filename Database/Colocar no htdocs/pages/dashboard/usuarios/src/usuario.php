<?php
include_once('../../../../conecta.php');
$user = $_POST['ds_usuario'];
$ds_email = $_POST['ds_email'];
$ds_senha = $_POST['ds_senha'];
echo "Usuário: $user <br>";
echo "TipoServiço: $ds_email <br>";

$result_user = "INSERT INTO usuarios (ds_usuario, ds_email, ds_senha) VALUES ('$user','$ds_email', '$ds_senha')";

$cadastro = mysqli_query($conexao, $result_user);
$ultimo_id = mysqli_insert_id($conexao);
echo "Último id inserido: " . $ultimo_id . "<br>";


echo "<meta http-equiv='refresh' content='1; url=../dashboard/usuarios/menu.php'>";

?>