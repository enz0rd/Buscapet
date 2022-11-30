<?php
include_once('./conecta.php');
$produto = $_POST['nome_servico'];
$empresa = $_POST['empresa'];
$tipo_produto = $_POST['tipo'];
$valor = $_POST['valor_servico'];
$desc = $_POST['desc_servico'];
$img = $_FILES['img_servico']['name'];
echo "Nomeserv: $produto <br>";
echo "TipoServ: $tipo_produto <br>";
echo "Valor: $valor <br>";
echo "Descrição: $desc <br>";

$result_servico = "INSERT INTO servicos (img_servico, ds_servico, valor_servico, desc_servico, idcategoria, idempresa) VALUES ('$img','$servico', '$valor', '$desc', '$tipo_servico', '$empresa')";

$cadastro = mysqli_query($conexao, $result_servico);
$ultimo_id = mysqli_insert_id($conexao);
echo "Último id inserido: " . $ultimo_id . "<br>";

$_UP['pasta'] = '../img/servicos/';

mkdir($_UP['pasta'], 0777);

if (move_uploaded_file($_FILES['img_produto']['tmp_name'], $_UP['pasta'] . $img)) {
    echo "Imagem salva com sucesso <br>";
}


echo "<meta http-equiv='refresh' content='1; url=/'>";