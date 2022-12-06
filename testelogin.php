<?php
//print_r($_REQUEST);

//if(!isset($_SESSION['login'])){//Se não existir a sessão login, ele abre a pagina de login
    
         
        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){//ACESSA
          //  if($email == $VAR_BDS && $senha == $VAR_BDS){//Se $senha e $email forem = $senha e $email(do bds)
            include_once('conexao.php'); 
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //print_r('Email: ' . $_POST['email']);

            $sql = "SELECT * FROM cad_user_np WHERE senha = '$senha'and email = '$email' ";
            $result = $conexao->query($sql);
            //print_r($result);
            if(mysqli_num_rows($result) <1){
                //print_r('Dados inválidos');
                unset($_SESSION['email']);//Destroi a var.
                unset($_SESSION['senhal']);
                header('Location: Login.php');
            }else{
               // print_r('Dados válidos');
               $_SESSION['email'] = $email;
               $_SESSION['senha'] = $senha;
               header('Location: userNP.php');
            }
        } 
        else {//NÃO ACESSA
               ;
               echo 'Dados inválidos';
        }
         //}
   

   //   }else{//caso exista a sessão de login, ele irá entrar direto na pagina de usuário
     //    include('System.html');
      //}
?>