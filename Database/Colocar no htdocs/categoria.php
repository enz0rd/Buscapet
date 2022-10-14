<?php
    include_once('conexao.php');
    $categoria = $_POST['nome_categoria'];
    $tipo = $_POST['tipo'];

    echo "Categoria: $categoria <br>";
    echo "Tipo: $tipo <br>";

    if ($tipo == "ProdSer") {
        $result_categoria = "INSERT INTO categorias_prodser (ds_categoria) VALUES ('$categoria')";
        $cadastro = mysqli_query($conn, $result_categoria);
        $ultimo_id = mysqli_insert_id($conn);
    echo "Id: $ultimo_id <br>";
        echo "Cadastro efetuado";
    } elseif ($tipo == "Empresa") {
        $result_categoria = "INSERT INTO categorias_empresas (ds_categoria) VALUES ('$categoria')";
        $cadastro = mysqli_query($conn, $result_categoria);
        $ultimo_id = mysqli_insert_id($conn);
        echo "Id: $ultimo_id <br>";
        echo "Cadastro efetuado";
    } else {
        echo "Erro no cadastro";
    }
    header("Location: http://localhost/teste/index.php");
    exit();
?>