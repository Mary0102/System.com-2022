<?php
  include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do usuário</title>
    <link rel='stylesheet' href='users.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body id="pg-user">
    
    <!----------------- NavBar  ------------------->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0,0,0);">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
          <img src="Image/Logo.png" alt="Logo" id="Logo">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"> System.com </a>
        </div>
    </nav>
          
    <style>
      #navbarTogglerDemo01 a {
        padding: 5px;
      }
    </style>
    <!------------------ Fim NavBar --------------------->

  
<div class="allpage">

<style>
  .Space-barra{
    background-color: #ffff;
    width: 37%;
    height: 700px;
  }

  main{
    position: absolute;
  }


</style>

<!-----------------    Pedidos  ------------------>
<main>  
  <div class="Space-bloco">
    <div id="Bloco-pedido">
      <div class="Bloco-inside">
        <div class="title-pedido" style="background-color: black;">
          <h1 class="Name-pedido" style="color: #ffff ;" >Descrição</h1>
        </div>
        <br>
          <div class="pedido">
            <?php
              print_r($_POST['pedido']);
              //$sql = "SELECT * FROM pedido WHERE descricao ";
              //$result = $conexao->query($sql);
              //print_r($result);
              // if($_POST['pedido']) == null{
               //   echo "Não possui nenhum pedido";
                //}else{
                  //Caso exista algum pedido
                  
              //  }  
            ?>
            <br>
          </div>
        <br>   
      </div>
    </div>
  </div>
</main>
<!-----------------   END Pedidos  ------------------>

 <!------------------- Area User ----------------------->
<!-----------------   Menu Lateral ------------------>
<div class= "Space-barra">
      <aside class="Barra-lateral">
        <div class="Dentro-barra">
          <!--  Foto do usuario, e seções que ele possa navegar-->
          <div class="user-icon">
            <img src="Image/user-icon.png" alt="testephoto" id="formaft">
            <span id="user-name">Usuario
             <!-- <?php
              //  print_r($_POST['nome']);
              ?> -->
            </span>
          </div>
          <!--End Foto User-->

          <hr><!--Linha divisoria-->

          <!---------Add Notificações-------->

          <ul id="Menu">
            <div class="bloco">
              <span class="li-item">
                <i class="fa fa-cog" style="font-size:24px" aria-hidden="true" id="icon"></i>
                <li><a href="#"><p>Editar Perfil</p></a></li>
              </span>
            </div> 
            
            <div class="bloco">
              <span class="li-item">
                <i class="fa fa-commenting" style="font-size:24px" id="icon"></i>
                <li><a href="#"><p>Mensagens</p></a></li>
              </span>
            </div>
            
            <div class="bloco">
              <span class="li-item">
                <i class="fa fa-edit" style="font-size:24px" id="icon"></i>
                <li><a href="userNP.php"><p>Meus Pedidos</p></a></li>
              </span>
            </div>
              
            <div class="bloco">
              <span class="li-item">
                <i class="fa fa-plus-square-o" style="font-size:24px" id="icon"></i>
                <li><a href="Pedido.php"><p>Novo pedido</p></a></li>
              </span>
            </div>
             
            <div class="bloco">
              <span class="li-item">
                <i class="fa fa-sign-out" style="font-size:24px; color:red"  id="icon"></i>
                <li><a href="System.html"><p>Sair</p></a></li>
              </span>
            </div>
          </ul>
        </div>
      </aside>
</div>
<!-----------------  END Menu Lateral ------------------>

      <style>
        .Barra-lateral{
          height: 700px;
          position: absolute;
          margin-top: 0px;
          
        }

        .allpage{
          margin-top: 0px;
          position: absolute;
        }
      </style>

  <!-------------------- Fim Area User -------------------->

  <style>
    .title-pedido{
      width: 100%;
      height: 12%;
      border-top-right-radius: 20px;
      border-top-left-radius:20px ;
      
    }
    .title-pedido h1{
      padding-top: 2px;
      padding-bottom: 2px;
      font-size: 26px;
    }
    .Bloco-inside{
      margin: 0px;
      padding: 0px;
      width: 600px;
      height: auto;
    }

    .Space-bloco{
      padding-left: 25%
     
    }
    
  </style>

  <!-----------------    Fim Seções  ----------------->
    
</div><!-- Close "Allpage"  -->

</body>
</html>