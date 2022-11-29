<?php
    if(isset($_POST['enviar'])){
        print_r('Descrição: '.$_POST['pedido']);
       }

    //Caminho e nome do arquivo (se colocar só o nome do arquivo, ele deve estar na mesma pasta do PHP)
    $file = "Pedido.csv";
    //Carregar o arquivo existente
    $current = file_get_contents($file);
    //Criar (usando informações fornecidas pelo formulário HTML) e adicionar nova linha ao conteúdo já existente
    $current .= $_POST['nome'].', '.$_POST['mail'].', '.$_POST['sexo'][0]."\n";
    //Adicionar conteúdo todo ao arquivo
    file_put_contents($file, $current);
?>