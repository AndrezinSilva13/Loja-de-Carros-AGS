<?php
    require 'Carros.php';//importo arquivo da classe
    session_start();
    $carrosVetor = $_SESSION["carros"] ?? [];
    $id = $_GET["id"] ?? -1;
    $carro = null;
    $indice = null;
    foreach($carrosVetor as $chave => $valor)
    {
        $elementoDoVetor = $carrosVetor[$chave];
        if($elementoDoVetor->getID() == $id){        
            $indice = $chave;
            $carro = $elementoDoVetor;
            break;
        }
    }

    if(isset($_GET['nome'])){
        foreach($carrosVetor as $chave => $valor)
        {
            $elementoDoVetor = $carrosVetor[$chave];
            if($elementoDoVetor->getID() == $id){        
                $indice = $chave;
                $carro = $elementoDoVetor;
                break;
            }
        }
        $carrosVetor[$indice] = $carro->atualizar($_GET);      
        $_SESSION["carros"] = $carrosVetor;

        header("location: ../index.php");   
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/editar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Atividade Pessoas</title>
</head>
<body>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <ul>
            <li class="text-muted"><a href="../index.php">Home</a></li>    
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" 
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>



    <?php 
        if(isset($carro)){
    ?>

    <h1 id="title">Atualizar Carro #<?=$carro->getID()?></h1>
    <form action="EditarItem.php" method="get">
        
        <?="<input type=\"hidden\" name=\"id\" value=\"{$carro->getID()}\">"?>

        <label id="imagemName" for="imagem">Imagem:</label>
        <input id="imagem" name="imagem" placeholder="Imagem do Carro" value="<?=$carro?->getImagem()?>"><br>
        
        <label id="nomeName" for="nome">Nome:</label>
        <input id="nome" name="nome" placeholder="Nome do Carro" value="<?=$carro?->getNome()?>"><br>
        
        <label id="marcaName" for="marca">Marca:</label>
        <input id="marca" name="marca" placeholder="Marca do Carro" value="<?=$carro?->getMarca()?>"><br>
        
        <label id="modeloName" for="modelo">Modelo:</label>
        <input id="modelo" name="modelo" placeholder="Modelo do Carro" value="<?=$carro?->getModelo()?>"><br>

        <label id="anoName" for="ano">Ano:</label>
        <input id="ano" name="ano" placeholder="Ano do Carro" value="<?=$carro?->getAno()?>"><br>

        <label id="precoName" for="preco">Preço:</label>
        <input id="preco" name="preco" placeholder="Preço do Carro" value="<?=$carro?->getPreco()?>"><br>
        <button type="submit" class="bodyb">Salvar Informações</button>
    </form>

    <?php 
        }
        else{
            echo "<p>Carro não encontrado</p>";
            echo "<form action='../index.php'>
            <button type='submit' class='bodyb'>Voltar</button>
            </form>";
        }
    ?>   
    
    <p class="credits">
        &copy; Todos os direitos reservados</p>
        <p class="name">André G. Silva</p>
        <p class="links"><a href="https://www.instagram.com/andrex__gs/">
                <img src="../img/instaImage.png" alt="Insta" class="instaImage">
            </a>
            <a href="https://www.facebook.com/andre.gonsalves.54943">
                <img src="../img/faceImage.png" alt="Face" class="faceImage">
            </a>
            <a href="https://twitter.com/GsAndrex">
                <img src="../img/twiterImage.png" alt="Twiter" class="twiterImage">
            </a>
        </p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


