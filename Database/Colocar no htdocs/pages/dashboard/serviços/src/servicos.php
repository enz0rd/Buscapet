<?php
include_once('../../../../conecta.php');
$servico = $_POST['ds_servico'];
$empresa = $_POST['empresa'];
$tipo_servico = $_POST['tipo'];
$valor = $_POST['valor_servico'];
$desc = $_POST['desc'];
$img = $_FILES['img_servico']['name'];
echo "NomeServiço: $servico <br>";
echo "TipoServiço: $tipo_servico <br>";
echo "Valor: $valor <br>";
echo "Descrição: $desc <br>";

$result_servico = "INSERT INTO servicos (img_servico, ds_servico, valor_servico, desc_servico, idcategoria, idempresa) VALUES ('$img','$servico', '$valor', '$desc', '$tipo_servico', '$empresa')";

$cadastro = mysqli_query($conexao, $result_servico);
$ultimo_id = mysqli_insert_id($conexao);
echo "Último id inserido: " . $ultimo_id . "<br>";

$_UP['pasta'] = '../imagens/serviços/' . $empresa . "/" . $servico . "/";

mkdir($_UP['pasta'], 0777);

if (move_uploaded_file($_FILES['img_servico']['tmp_name'], $_UP['pasta'] . $img)) {
    echo "Imagem salva com sucesso <br>";
}


echo "<meta http-equiv='refresh' content='1; url=../dashboard/serviços/menu.php'>";
