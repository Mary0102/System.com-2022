<?php
   include_once('conexao.php');
   if(isset($_POST['email']) || isset($_POST['senha'])) {

      if(strlen($_POST['email']) == 0) {
          echo "Preencha seu e-mail";
      } else if(strlen($_POST['senha']) == 0) {
          echo "Preencha sua senha";
      } else {
          $email = $mysqli->real_escape_string($_POST['email']);
          $senha = $mysqli->real_escape_string($_POST['senha']);


          $sql_code = "SELECT * FROM login_user_np WHERE email = '$email' AND senha = '$senha'";
          $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error);

          $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
      
               $_SESSION['id'] = $usuario['id'];
               $_SESSION['nome'] = $usuario['nome'];

               header("Location: painel.php");
    
         } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
         }

      }
   }

   //if(isset($_POST['submit'])){
   //   print_r("Funcionou");

      
   //   $email = $_POST['email'];
   //   $senha = $_POST['senha'];

   //   $result = mysqli_query($conexao, "INSERT INTO login_user_np(email, senha) VALUES ('$email', '$senha')");
  // }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="overlay">

<form action="Login.php" method="POST"> <!--Para onde vai?-->

   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Faça Login</h2>
      <br>
      <!--     A welcome message or an explanation of the login form -->
      <p>Insira suas informações.</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">


<!----------------------------  inputs ---------------------------------------------->
     
      <!--  Email icon -->
      <span class="input-item">
         <i class="fa fa-envelope-open"></i>
      </span>   
      <!--  Email Input -->  
      <input class="form-input" type="email" placeholder="Email" id="email" name="email" required>

         <br>    
     
      <!--   Password icon -->  
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Senha" id="pwd"  name="senha" required>

         <br>
<!----------------------------  End inputs ---------------------------------------------->

<!-------------------------------- button LogIn ------------------------------------->
      <button class="log-in" name="submit"> Login </button>
   </div>
<!-------------------------------- button LogIn ------------------------------------->

</form>

   <!----------------------------   other buttons ----------------------------------->
   <div class="other">
      <!--      Forgot Password button-->
            <button class="btn submits frgt-pass">Esqueci a senha</button>
      <!--     Sign Up button -->
            <a href="Cadastro.html"><button class="btn submits sign-up">Inscreva-se
      <!--     Sign Up font icon -->
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            </button></a>
   </div>
   <!-----------------------  End Other the Division -------------------------------->
   

     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->

</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
