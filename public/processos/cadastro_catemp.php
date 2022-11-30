<?php
include_once('./conecta.php');
$cat = $_POST['ds_categoria'];
echo "Categoria: $cat <br>";

$result_user = "INSERT INTO categorias_empresas (ds_categoria) VALUES ('$cat')";

$cadastro = mysqli_query($conexao, $result_user);
$ultimo_id = mysqli_insert_id($conexao);
echo "Último id inserido: " . $ultimo_id . "<br>";

echo "<meta http-equiv='refresh' content='1; url=/'>";
?>
