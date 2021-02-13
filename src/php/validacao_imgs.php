<?php
    $cad = false;
    if(strlen($titulo) <= 0 || strlen($titulo) > 32)
    {
        echo "
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro_imgs.php'>
            <script type=\"text/javascript\">
                alert(\"O título precisa conter de 1 a 32 caracteres! \");
                window.location.href = \"http://localhost/myimages/form_cadastro_imgs.php\";
            </script>
        ";
        $cad = false;
    }else if(strlen($descricao) <= 0 || strlen($descricao) > 150){
        echo "         
            <META HTTP=EQUIV=REFRESH CONTENT = '0;URL=http://localhost/myimages/form_cadastro_imgs.php'>
            <script type=\"text/javascript\">
                alert(\"A descrição precisa conter de 1 a 150 caracteres! \");
                window.location.href = \"http://localhost/myimages/form_cadastro_imgs.php\";
            </script>
        ";
        $cad = false;
    }else{
        $cad = true;
    }



    //Pasta onde vai ser salvo
    $_UP['pasta'] = '../db/images/';
    //Tamanho máximo do arquivo em Bytes
    $_UP['tamanho'] = 1024*1024*100; //5mb
    //Array com extensões permitidas
    $_UP['extensoes'] = array('png', 'jpg', 'jpeg');
    //Renomear
    $_UP['renomear'] = true;
    //Array com os tipos de erros de upload do PHP
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'ERRO: Não é possível fazer upload desse arquivo. Ele ultrapassa o limite do PHP.';
    $_UP['erros'][2] = 'ERRO: Não é possível fazer upload desse arquivo. Ele ultrapassa o limite informado no site.';
    $_UP['erros'][3] = 'ERRO: O upload foi feito parcialmente.';
    $_UP['erros'][4] = 'ERRO: Não foi feito upload do arquivo.';
    //Verifica se houve erro com o upload. Se sim, exibe a msg de erro
    if($_FILES['arquivo']['error'] != 0){
        die($_UP['erros'][$_FILES['arquivo']['error']]);
        exit; //Executa o script
    }    
?>

