<?php

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {       
        /* se a variavel está ok, vai acessar o sistema... */
        
        include_once('config.php');
        $email = $_POST['email'];   //VERFIFICAR se as variáveis conferem no formulario do login.html !!!
        $senha = $_POST['senha'];

        print_r('Email: ' . $email); //o ponto é para concatenar
        print_r(<br>)
        print_r('Senha: ' . $senha);

        //https://www.youtube.com/watch?v=15CXhnQkilY&list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK&index=4&ab_channel=GustavoNeitzke
        //19min
    }
    else {
        /* ...caso contrario, voltará à pagina de login */
        header('Location: login.html')  
    }
?>