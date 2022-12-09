<?php

    if(isset($_POST['enviar'])){
      //  print_r('Descrição: '.$_POST['pedido']);
    
    include_once('conexao.php');
    $pedido = $_POST['pedido'];

    $result_descricao = mysqli_query($conexao, "INSERT INTO pedido(descricao) VALUES ('$pedido')");

    header('Location: userNP.php');
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title> Descrição </title>    
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS (TextArea)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ]
      });
    </script>
</head>

<body>

  <div class="overlay"> 
    <style>
      body{
      background-image: linear-gradient(-225deg, #0b0c0c 0%, #ce65ff 100%);
      background-image: linear-gradient(to top, #050505 0%, rgb(119, 33, 218) 100%); 
      background-attachment: fixed;
      background-repeat: no-repeat;
      font-family: 'Vibur', cursive;
      /*   the main font */
      font-family: 'Abel', sans-serif;
      opacity: .95;
      }

      .area-texto{
        margin-left: 20%;
        width: 60%;
        height: 80%;
      }

/***********STYLE NAV BAR**********************/
      .contatos{
          padding-left: 30%;
        }

        div.box {
            width: 30px;
            display: inline-block;
          }

          .box :hover{
            background-color: rgb(44, 44, 44);
            border-radius: 10px;
          }
/***********END STYLE NAV BAR**********************/

        #save{
                color: rgb(255, 255, 255);
                background-color: green;
                border-radius: 10px;
                border-style: none;
                height: 30px;
                width: 60px;
                margin-left: 50%;
            }
    </style>

<!-----------------------------------NAV BAR - BARRA DE NAVEGAÇÃO--------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0,0,0);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="System.html"> System.com </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Sobre.html"> Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"> Destaques </a>
      </li>
    </ul>
    <div class="contatos">
      <div class="box">
          <a href="#"><img width="40px" src="Image/icon-face.png"/></a>
      </div>
      <div class="box">
          <a href="#"><img width="40px" src="Image/icon-wpp.png"/></a>
      </div>
      <div class="box">
          <a href="#"><img width="40px" src="Image/icon-tt.png"/></a>
      </div>
      <div class="box">
        <a href="#"><img width="40px" src="Image/icon-insta.png"/></a>
    </div>
  </div>
</nav>
<!-------------------------------END NAV BAR - BARRA DE NAVEGAÇÃO--------------------------------------->

      <br/>
    <h1 align="center" style="color:aliceblue; font-family:EB Garamond" >
       Descreva como quer o seu programa.
    </h1>
    <h5 align="center" style="color:rgb(187, 182, 255);font-family:Dosis">
       Entre em contato conosco para agendar uma reunião <br/> ou para tirar dúvidas sobre o nosso serviço.
    </h3>
   
<div style="text-align:center; width:55%; height:50%;margin: 10px; padding: 1px; position: relative;">
    <h6  style="color:aliceblue">
       <span style="color:rgb(188, 160, 255);">Email:</span>Polysystem@gmail.com
    </h6>
</div>
<div>
  <form action="userNP.php" method="POST">
    <div class="area-texto">
      <textarea id="tiny" name="pedido"></textarea>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="uwyzi3azphk9bvd9sn47xkrttutdjb0rhcs8pp14xdklcrhc" crossorigin="anonymous"></script>
        <br>
      <button id="save" name="enviar">Enviar</button>
  </form>
</div>


  </div>
</body>
</html>