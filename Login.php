<?php
   session_start();
   include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<!-- partial:index.partial.html -->
<div class="overlay">

<form method="POST"> <!--Para onde vai?-->

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
      <input class="form-input" type="email" placeholder="Email" id="email" name="email">

         <br>    
     
      <!--   Password icon -->  
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Senha" id="pwd"  name="senha">

         <br>
<!----------------------------  End inputs ---------------------------------------------->

<!-------------------------------- button LogIn ------------------------------------->
      <button class="log-in" name="submit"> Login </button>
   </div>
<!-------------------------------- button LogIn ------------------------------------->
<a href="System.html" class=back> > Voltar < </a>
</form>

   <!----------------------------   other buttons ----------------------------------->
   <div class="other">
      <!--      Forgot Password button
            <button class="btn submits frgt-pass">Esqueci a senha</button>-->
      <!--     Sign Up button 
            <a href="System.html"><button class="btn submits sign-up" id="back">Voltar-->
           
      <!--     Sign Up font icon 
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            </button></a>-->
   </div>
   <!-----------------------  End Other the Division -------------------------------->
   

      <style>
         .back{
            text-decoration: none;
            color:white;
            margin-left: 0px;
            margin-top: 28%;
            position: absolute;
         }  

         .back:active{
            color: darkgray;
            transition: 1s;
         }

         .back:hover{
            color:black;
            transform: translatey(3px);
            box-shadow: none;
            animation: ani9 0.4s ease-in-out infinite alternate;
         }
         
         .field-set{
            margin-left: 12%;
         }
      </style>
     
<!--   End Conrainer  -->
  </div>
  <!-- End Form -->
</div>
   


  <script  src="./script.js"></script>

</body>
</html>
