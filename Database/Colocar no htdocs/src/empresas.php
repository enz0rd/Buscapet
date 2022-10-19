<?php
include_once('../conexao.php');
$empresa = $_POST['nome_empresa'];
$tipo_empresa = $_POST['tipo'];
$endereco_empresa = $_POST['endereco_empresa'];
$ctt_empresa = $_POST['contato_empresa'];
$desc_empresa = $_POST['desc_empresa'];
$empresa_imagem = $_FILES['logo_empresa']['name'];
echo "Nome da empresa: $empresa <br>";
echo "Tipo: $tipo_empresa <br>";
echo "Endereço: $endereco_empresa <br>";
echo "Contato: $ctt_empresa <br>";
echo "Descrição: $desc_empresa <br>";
echo "Logo da empresa: $empresa_imagem <br>";

//salvar no bd

$result_empresa = "INSERT INTO empresas (logoempresa, ds_empresa, idcategoria, desc_empresa, contato_empresa, endereco_empresa) VALUES ('$empresa_imagem', '$empresa', '$tipo_empresa', '$desc_empresa', '$ctt_empresa', '$endereco_empresa')";

$cadastro = mysqli_query($conn, $result_empresa);
$ultimo_id = mysqli_insert_id($conn);
echo "Último id inserido: $ultimo_id <br>";

//pasta que salva as imagens

$_UP['pasta'] = '../imagens/empresas/' . $empresa . '/';
$_UP['pasta_produtos'] = '../imagens/produtos/' . $ultimo_id . '/';
$_UP['pasta_servicos'] = '../imagens/serviços/' . $ultimo_id . '/';

//criar pasta que salva

mkdir($_UP['pasta'], 0777);
mkdir($_UP['pasta_produtos'], 0777);
mkdir($_UP['pasta_servicos'], 0777);

//verificar se é possível mover o arquivo para a pasta

if (move_uploaded_file($_FILES['logo_empresa']['tmp_name'], $_UP['pasta'] . $empresa_imagem)) {
    echo "Imagem salva com sucesso <br>";
}

echo "Voltar à <a href='../index.php'>Página Inicial</a>";
