<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 


        // Variáveis relacionadas a produtos
        $produto1_nome = "CAM";
        $produto1_preco = 20.00;

        $produto2_nome = "Calça Jeans";
        $produto2_preco = 50.00;

        // Identificador do produto a ser acessado
        $produtoAtual = 2;

        // Utilizando variável de variável para acessar informações do produto
          $nomeAtual = ${"produto" . $produtoAtual . "_nome"};
           $nomeAtual = $produto2_nome; 


          
        $precoAtual = ${"produto" . $produtoAtual . "_preco"};

        // Exibindo informações do produto
        echo "Produto: $nomeAtual<br>";
        echo "Preço: $precoAtual";


        echo   '<hr>';

                $n1 = '<img alt="oi"/>';
                $n2 = '<hr>';
                $n3 = 'l';

                    $total = 'Isso aqui é foda';


                
                    $imp = ${$n1. " "  .$n2.$n3};




                    echo $imp;
                    
   


    ?>
</body>
</html>