<style type="text/css">
    body * {
        align-items: center;
    }

    body {
        font-size: 100%;
        background: linear-gradient(45deg, #c9ffc7, #42801f);
    }

    .btn {
        padding: 5px;
        border: 1px #fff;
        border-radius: 5px;
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
    }

    .form {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: space-around;
        gap: 10px
    }

</style>

<head>
    <title>Teste de Cadastro</title>
</head>

<body>

<div class="container">
    <h1 class="title">Cadastrar empresa</h1>

    <form class="form" method="POST" action="processar.php" enctype="multipart/form-data">
        <label class="label">Nome:</label>
        <input type="text" name="nome">

        <label class="label">Tipo:</label>
        <input type="text" name="tipo">

        <label class="label">Endereço:</label>
        <input type="text" name="endereco">

        <label class="label">Contato:</label>
        <input type="text" name="contato">

        <label class="label">Descrição:</label>
        <input type="text" name="desc">

        <label class="label">Logo:</label>
        <input type="file" name="logo">

        <input class="btn" type="submit" value="Cadastrar">
    </form>
</div>

</body>