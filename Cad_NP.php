<?php
   session_start();
   if(isset($_POST['submit'])){
      //print_r('Nome: '.$_POST['nome']);
      //print_r('<br>');
      //print_r('Senha: '.$_POST['senha']);
      //print_r('<br>');
      //print_r('Email: '.$_POST['email']);
      //print_r('<br>');
      //print_r('Telefone: '.$_POST['tell']);
      //print_r('<br>');
      //print_r('CPF: '.$_POST['cpf']);

      include_once('conexao.php');
      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $tell = $_POST['tell'];
      $cpf = $_POST['cpf'];

      $result_userNP = mysqli_query($conexao, "INSERT INTO cad_user_np(nome, senha, email, telefone, cpf) VALUES ('$nome', '$senha', '$email', '$tell', '$cpf' )");
      //$resultado_usuario_np = 
   
      if(mysqli_insert_id($conexao)){
         $_SESSION['msg'] = "<p style = 'color:green';> Usuário cadastrado com sucesso</p>";
         header("Location: pedido.php");//Retorna para a pagina de cadastro
      } else{
         $_SESSION['msg'] = "<p style = 'color:red';> Usuário não foi cadastrado com sucesso</p>";
         header("Location: Cad_NP.php");
      }
   }
?>
   
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cadastro - Pessoa Física</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form action="Cad_NP.php" method="POST">
   
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Cadastre-se</h2>
      <br>
      <!--     A welcome message or an explanation of the login form -->
      <p>Insira suas informações.</p>
      <?php
         if(isset($_SESSION['msg'])){//Se existir essa variavel...
            echo $_SESSION['msg'];//Imprime o valor dessa variavel
            unset($_SESSION['msg']);//Destroi a variavel(Não permite a repetição da mesma)
         }
      ?>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set"> <!--Agrupa todos os elementos abaixo(porem, é só o nome da classe)-->
     
      <!--   user name icon -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="Nome Completo" name="nome"required>
     
      <br>
     
      <!--   Password icon -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Senha" id="pwd"  name="senha" required>

      <br>

      <!--  Email icon -->

      <span class="input-item">
         <i class="fa fa-envelope-open"></i>
      </span>   
      <!--  Email Input -->  
      <input class="form-input" type="email" placeholder="Email" id="email" name="email" required>

      <br>

      <!--  Telefone icon -->
      <span class="input-item">
         <i class="fa fa-phone"></i>
      </span>

      <!--  Telefone input-->
      <input class="form-input" type="tel" placeholder="Telefone" id="cell" name="tell" required>
         <script>
            $( "#cell" ).keypress(function() {
            $(this).mask('(00) 0000-00009');
            });
         </script>

      <br>

      <!--  CPF Icon -->
      <span class="input-item">
         <i class="fa fa-address-card-o"></i>
      </span>

      <!--  CPF Input  -->
      <input class="form-input" type="number" placeholder="CPF" id="cpf" name="cpf" required>

      <br> 
     
      <br>

<!--  button -->

      <a href="Pedido.php"><button class="log-in" name="submit"> Cadastre-se </button></a>
      
      
   </div>
<!--      button cadastro -->
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>
<!-- partial 
  <script  src="./script.js"></script>-->

</body>
</html>
