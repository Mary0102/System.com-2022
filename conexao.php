<?php
    
    $servidor="localhost";
    $usuario="root";
    $senha="";
    //$usuario="Mariana";
    //$senha="Andromeda";
    $dbname="system.com";

    $conexao = new mysqli($servidor, $usuario, $senha, $dbname);

    if ($conexao -> connect_errno){
        die("Houve um erro: ".mysqli_connect_error());
    }
    //else{
     //  echo "conexão efetuada com sucesso";
       // echo '<script type="text/JavaScript"> 
       //         alert("Inscrição realizada com sucesso!");
       //       </script>';
   //}
?>
