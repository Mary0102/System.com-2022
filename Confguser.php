
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do usuário (Pr)</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./users.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
    <body>
        <!----------------- NavBar  ------------------->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0,0,0);">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
                <img src="Image/Logo.png" alt="Logo" id="Logo">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"> System.com </a>
            </div>
        </nav>

<?php
   if(isset($_POST['salvar'])){
    print_r('Endereço: '.$_POST['endereco']);
   }

?>
          
        <style>
            #navbarTogglerDemo01 a {
            padding: 5px;
            }

            .folha-centro{
                border-radius: 20px;
            }

            #Outras-confg p{
                display: inline-block;
            }

            textarea{
                width: 310px;
                height:200px ;
            }

            #btn{
                display: inline-flex;
                margin-left: 8%;
                margin-bottom: 3%;
                
            }

            #sair, #save:hover{
                cursor:pointer;
            }

            #sair{
                color: rgb(255, 255, 255);
                background-color: brown;
                border-radius: 10px;
                border-style: none;
                height: 30px;
                width: 60px;
                margin-right: 450px;
            }

            #save{
                color: rgb(255, 255, 255);
                background-color: green;
                border-radius: 10px;
                border-style: none;
                height: 30px;
                width: 60px;
            }
        </style>
        <!------------------ Fim NavBar --------------------->
    <main>
        <form action="Confguser.php" method="POST">
        <div class="folha-centro">
            <div id="inside-folha-centro">
                    <br>
                <h3>Editar Informações</h3>
                    <hr>
                <div id="display"> <!--Parte especifica com Display alterado(INLINE)-->    
                    <img src="Image/user-icon.png" alt="imagem-usuario" class="formaft-edit" >
                    <span>Nome do usuario </span>
                        <br>
                    <div id="Outras-confg">
                        <div id="local">
                            <p>Endereço: </p>
                                <br>
                            <input type="text" placeholder="Ex: Estado,Cidade,Rua" name="endereco">
                        </div>
                        <br>
                        <div id="email">
                            <p>Email: </p>
                                <br>
                            <input type="email" name="email">
                        </div>
                        <br>
                        <div id="tell">
                            <p>Telefone: </p>
                                <br>
                            <input type="number" name="tell">
                        </div>
                        <br>
                        <div id="sobreuser">
                            <p>Experiencia Profissional: </p>
                                <br>
                            <textarea name="xp"></textarea>
                        </div>
                        <br>
                        <div id="sobreuser">
                            <p>Cursos realizados: </p>
                                <br>
                            <textarea name="cursos"></textarea>
                        </div>
                        <br>
                        <div id="sobreuser">
                            <p>Quais linguagens de programação utiliza: </p>
                                <br>
                            <textarea name="lp"></textarea>
                        </div>
                        <br>
                        <div id="sobreuser">
                            <p>Sobre mim: </p>
                                <br>
                            <textarea name="sobre"></textarea>
                        </div>
                        <br>
                    </div>
                    <div id="btn">
                        <a href="userNP.html"><button id="sair">Sair</button></a>  
                        <button id="save" name="salvar">Salvar</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
     </form>   
    </main>
</body>
</html>    