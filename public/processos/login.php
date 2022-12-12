<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
        //Incluindo a conexão com banco de dados   
    include_once("./conecta.php");    
        $usuario = $_POST['email']; //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = $_POST['password'];
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && password = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if($resultado){
            $_SESSION['usuarioId'] = $resultado['iduser'];
            $_SESSION['usuarioNome'] = $resultado['name'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['time'] = time();
            setcookie("login", $usuario);
            echo "<meta http-equiv='refresh' content='1; url=/dashboard'>";
            //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
            //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            echo "<meta http-equiv='refresh' content='1; url=/login'>";
        }
?>