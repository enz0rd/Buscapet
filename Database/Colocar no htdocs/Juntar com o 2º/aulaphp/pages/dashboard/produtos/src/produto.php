<?php
include_once('../../../../conecta.php');
$produto = $_POST['nome_produto'];
$empresa = $_POST['empresa'];
$tipo_produto = $_POST['tipo'];
$valor = $_POST['valor_produto'];
$qtd = $_POST['qtd_produto'];
$desc = $_POST['desc_produto'];
$img = $_FILES['img_produto']['name'];
echo "NomeProduto: $produto <br>";
echo "TipoProduto: $tipo_produto <br>";
echo "Valor: $valor <br>";
echo "Quantidade: $qtd <br>";
echo "Descrição: $desc <br>";

$result_produto = "INSERT INTO produtos (img_produto, ds_produto, valor_produto, qtd_produto, desc_produto, idcategoria, idempresa) VALUES ('$img','$produto', '$valor', '$qtd', '$desc', '$tipo_produto', '$empresa')";

$cadastro = mysqli_query($conexao, $result_produto);
$ultimo_id = mysqli_insert_id($conexao);
echo "Último id inserido: " . $ultimo_id . "<br>";

$_UP['pasta'] = '../imagens/produtos/' . $empresa . "/" . $produto . "/";

mkdir($_UP['pasta'], 0777);

if (move_uploaded_file($_FILES['img_produto']['tmp_name'], $_UP['pasta'] . $img)) {
    echo "Imagem salva com sucesso <br>";
}
