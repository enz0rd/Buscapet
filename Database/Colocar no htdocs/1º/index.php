<style type="text/css">
    body * {
        align-items: center;
    }

    body {
        font-size: 100%;
        background: linear-gradient(45deg, #c9ffc7, #42801f);
        display: flex;
        flex-direction: column;
    }

    .insert {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-around;
        flex-wrap: wrap;

    }

    .btn {
        padding: 10px;
        border: solid 2px #707070;
        border-radius: 10px;
        transition: 0.3s;
    }

    .btn:hover {
        background-color: #42801f;
        transform: scale(1.10);
        box-shadow: #707070 2px 2px 10px;
    }

    .title {
        font-family: Verdana;
        font-size: 25px;
        font-weight: bold;
        border: 1px white;
        text-shadow: #707070 3px 3px 5px;
    }

    .label {
        font-family: 'Courier New';
        font-weight: 200;
    }

    .container {
        background-color: aliceblue;
        border: 1px black;
        border-radius: 50px;
        box-shadow: black 10px 10px 10px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        margin: 10px;
        max-width: max-content;
    }

    .form {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: space-around;
        padding-left: 25px;
        padding-right: 25px;
        gap: 10px
    }

    .radio {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .table {
        background-color: aliceblue;
        border: 1px black;
        border-radius: 10px;
        box-shadow: black 10px 10px 10px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        margin: 10px;
        max-width: max-content;
    }

    .select {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    table, th, td {
        border: 1px solid;
        border-collapse: collapse;
    }
    td, th {
        padding: 0.5rem;
    }

</style>

<head>
    <title>Teste de Cadastro</title>
    <script src="main.js"></script>
</head>

<body>
    <div class="insert">
        <div class="container">
            <h1 class="title">Cadastrar Categoria</h1>

            <form class="form" method="POST" action="./src/categoria.php" enctype="multipart/form-data">
                <label class="label">Categoria:</label>
                <input type="text" name="nome_categoria">
                <label class="label">Tipo:</label>
                <div class="radio">
                    <input type="radio" id="tipo_empresa" name="tipo" value="Empresa">
                    <label class="label" for="tipo_empresa">Empresa</label><br>
                    <input type="radio" id="tipo_produto" name="tipo" value="ProdSer">
                    <label class="label" for="tipo_produto">Produtos/Serviços</label>
                </div>
                <input class="btn" type="submit" value="Cadastrar">
            </form>
        </div>

        <br><br>

        <div class="container">
            <h1 class="title">Cadastrar empresa</h1>

            <form class="form" method="POST" action="./src/empresas.php" enctype="multipart/form-data">
                <label class="label">Nome:</label>
                <input type="text" name="nome_empresa">

                <label class="label">Tipo:</label>
                <select id="tipo" name="tipo">
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('conexao.php');
                    $selecttype = "SELECT * FROM categorias_empresas ORDER BY ds_categoria";
                    $result_type = mysqli_query($conn, $selecttype);
                    while ($tipo = mysqli_fetch_array($result_type)) {
                    ?>
                        <option value="<?php echo $tipo['idcategoria'] ?>"><?php echo $tipo['ds_categoria'] ?></option>
                    <?php } ?>
                </select>

                <label class="label">Endereço:</label>
                <input type="text" name="endereco_empresa">

                <label class="label">Contato:</label>
                <input type="text" name="contato_empresa" maxlength="12">

                <label class="label">Descrição:</label>
                <input type="text" name="desc_empresa" maxlength="100">

                <label class="label">Logo:</label>
                <input type="file" name="logo_empresa">

                <input class="btn" type="submit" value="Cadastrar">
            </form>
        </div>

        <br><br>

        <div class="container">
            <h1 class="title">Cadastrar Produto</h1>

            <form class="form" method="POST" action="./src/produto.php" enctype="multipart/form-data">
                <label class="label">Nome:</label>
                <input type="text" name="nome_produto">

                <label class="label">Empresa:</label>
                <select id="empresa" name="empresa">
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('conexao.php');
                    $selecttype = "SELECT idempresa, ds_empresa FROM empresas ORDER BY ds_empresa";
                    $result_type = mysqli_query($conn, $selecttype);
                    while ($tipo = mysqli_fetch_array($result_type)) {
                    ?>
                        <option value="<?php echo $tipo['idempresa'] ?>"><?php echo $tipo['ds_empresa'] ?></option>
                    <?php } ?>
                </select>

                <label class="label">Tipo:</label>
                <select id="tipo" name="tipo">
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('conexao.php');
                    $selecttype = "SELECT * FROM categorias_prodser ORDER BY ds_categoria";
                    $result_type = mysqli_query($conn, $selecttype);
                    while ($tipo = mysqli_fetch_array($result_type)) {
                    ?>
                        <option value="<?php echo $tipo['idcategoria'] ?>"><?php echo $tipo['ds_categoria'] ?></option>
                    <?php } ?>
                </select>

                <label class="label">Valor:</label>
                <input type="number" min="0" placeholder="0.00" name="valor_produto" step="0.01" pattern="^\d+(?:\.\d{1,2})?$">

                <label class="label">Quantidade:</label>
                <input type="number" min="0" name="qtd_produto" step="any">

                <label class="label">Descrição:</label>
                <input type="text" name="desc_produto" maxlength="100">

                <label class="label">Imagem:</label>
                <input type="file" name="img_produto">

                <input class="btn" type="submit" value="Cadastrar">
            </form>
        </div>

        <br><br>

        <div class="container">
            <h1 class="title">Cadastrar Serviço</h1>

            <form class="form" method="POST" action="./src/servicos.php" enctype="multipart/form-data">
                <label class="label">Nome:</label>
                <input type="text" name="nome_servico">

                <label class="label">Empresa:</label>
                <select id="empresa" name="empresa">
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('conexao.php');
                    $selecttype = "SELECT idempresa, ds_empresa FROM empresas ORDER BY ds_empresa";
                    $result_type = mysqli_query($conn, $selecttype);
                    while ($tipo = mysqli_fetch_array($result_type)) {
                    ?>
                        <option value="<?php echo $tipo['idempresa'] ?>"><?php echo $tipo['ds_empresa'] ?></option>
                    <?php } ?>
                </select>

                <label class="label">Tipo:</label>
                <select id="tipo" name="tipo">
                    <option value="Nenhuma">Selecione uma opção</option>
                    <?php
                    include_once('conexao.php');
                    $selecttype = "SELECT * FROM categorias_prodser ORDER BY ds_categoria";
                    $result_type = mysqli_query($conn, $selecttype);
                    while ($tipo = mysqli_fetch_array($result_type)) {
                    ?>
                        <option value="<?php echo $tipo['idcategoria'] ?>"><?php echo $tipo['ds_categoria'] ?></option>
                    <?php } ?>
                </select>

                <label class="label">Valor:</label>
                <input type="number" min="0" placeholder="0.00" name="valor_servico" step="0.01" pattern="^\d+(?:\.\d{1,2})?$">

                <label class="label">Descrição:</label>
                <input type="text" name="desc_servico" maxlength="100">

                <label class="label">Imagem:</label>
                <input type="file" name="img_servico">

                <input class="btn" type="submit" value="Cadastrar">
            </form>
        </div>
    </div>

    <br><br>

    <div class="select">
        <div class="categorias-empresas">
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                    <?php
                        include_once('conexao.php');
                        $selecttype = "SELECT * FROM categorias_empresas ORDER BY idcategoria";
                        $result_type = mysqli_query($conn, $selecttype);
                        while ($tipo = mysqli_fetch_array($result_type)) {
                        ?>
                            <tr>   
                                <td><?php echo $tipo['idcategoria'] ?></td>
                                <td><?php echo $tipo['ds_categoria'] ?></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
        <div class="categorias-prodser">
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                    <?php
                        include_once('conexao.php');
                        $selecttype = "SELECT * FROM categorias_prodser ORDER BY idcategoria";
                        $result_type = mysqli_query($conn, $selecttype);
                        while ($tipo = mysqli_fetch_array($result_type)) {
                        ?>
                            <tr>   
                                <td><?php echo $tipo['idcategoria'] ?></td>
                                <td><?php echo $tipo['ds_categoria'] ?></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
        <div class="empresas">
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Contato</th>
                        <th>Endereço</th>
                        <th>Descrição</th>
                    </tr>
                    <?php
                        include_once('conexao.php');
                        $selecttype = "SELECT idempresa, ds_empresa, ds_categoria, contato_empresa, endereco_empresa, desc_empresa FROM empresas,categorias_empresas WHERE empresas.idcategoria = categorias_empresas.idcategoria";
                        $result_type = mysqli_query($conn, $selecttype);
                        while ($tipo = mysqli_fetch_array($result_type)) {
                        ?>
                            <tr>   
                                <td><?php echo $tipo['idempresa'] ?></td>
                                <td><?php echo $tipo['ds_empresa'] ?></td>
                                <td><?php echo $tipo['ds_categoria'] ?></td>
                                <td><?php echo $tipo['contato_empresa'] ?></td>
                                <td><?php echo $tipo['endereco_empresa'] ?></td>
                                <td><?php echo $tipo['desc_empresa'] ?></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
        <div class="produtos">
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th>QTD</th>
                        <th>Descrição</th>
                        <th>Empresa</th>
                    </tr>
                    <?php
                        include_once('conexao.php');
                        $selecttype = "SELECT idproduto, ds_produto, ds_categoria, valor_produto, qtd_produto, desc_produto, ds_empresa FROM produtos,empresas,categorias_prodser WHERE produtos.idcategoria = categorias_prodser.idcategoria AND produtos.idempresa = empresas.idempresa";
                        $result_type = mysqli_query($conn, $selecttype);
                        while ($tipo = mysqli_fetch_array($result_type)) {
                        ?>
                            <tr>   
                                <td><?php echo $tipo['idproduto'] ?></td>
                                <td><?php echo $tipo['ds_produto'] ?></td>
                                <td><?php echo $tipo['ds_categoria'] ?></td>
                                <td>R$<?php echo $tipo['valor_produto'] ?></td>
                                <td><?php echo $tipo['qtd_produto'] ?></td>
                                <td><?php echo $tipo['desc_produto'] ?></td>
                                <td><?php echo $tipo['ds_empresa'] ?></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
        <div class="servicos">
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Empresa</th>
                    </tr>
                    <?php
                        include_once('conexao.php');
                        $selecttype = "SELECT idservico, ds_servico, ds_categoria, valor_servico, desc_servico, ds_empresa FROM servicos,empresas,categorias_prodser WHERE servicos.idcategoria = categorias_prodser.idcategoria AND servicos.idempresa = empresas.idempresa";
                        $result_type = mysqli_query($conn, $selecttype);
                        while ($tipo = mysqli_fetch_array($result_type)) {
                        ?>
                            <tr>   
                                <td><?php echo $tipo['idservico'] ?></td>
                                <td><?php echo $tipo['ds_servico'] ?></td>
                                <td><?php echo $tipo['ds_categoria'] ?></td>
                                <td>R$<?php echo $tipo['valor_servico'] ?></td>
                                <td><?php echo $tipo['desc_servico'] ?></td>
                                <td><?php echo $tipo['ds_empresa'] ?></td>
                            </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>