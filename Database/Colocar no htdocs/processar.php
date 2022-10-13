<?php
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $endereco = $_POST['endereco'];
    $ctt = $_POST['contato'];
    $desc = $_POST['desc'];
    $nome_imagem = $_FILES['logo']['name'];
    echo "Nome da empresa: $nome <br>";
    echo "Tipo: $tipo <br>";
    echo "Endereço: $endereco <br>";
    echo "Contato: $ctt <br>";
    echo "Descrição: $desc <br>";
    echo "Logo da empresa: $nome_imagem <br>";

    //salvar no bd

    $result_empresa = "INSERT INTO empresas (logoempresa, ds_empresa, tipo_Empresa, desc_empresa, contato_empresa, endereco_empresa) VALUES ('$nome_imagem', '$nome', '$tipo', '$desc', '$ctt', '$endereco')";
    
    $empresa = mysqli_query($conn, $result_empresa);
    $ultimo_id = mysqli_insert_id($conn);
    echo "Último id inserido: $ultimo_id <br>";

    //pasta que salva as imagens

    $_UP['pasta'] = 'imagens/empresas/'.$nome.'/';

    //criar pasta que salva

    mkdir($_UP['pasta'], 0777);

    //verificar se é possível mover o arquivo para a pasta

    if(move_uploaded_file($_FILES['logo']['tmp_name'], $_UP['pasta'].$nome_imagem)) {
        echo "Imagem salva com sucesso <br>";
    }

?>