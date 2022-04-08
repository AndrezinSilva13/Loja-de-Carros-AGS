<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Loja de Carros</title>
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




    <header>
        <h1 class="title">Cadastrar Carro Carro</h1>
    </header>



    <main>
        <div class="form">
            <form action="cadastrar.php" method="get">
                <div class="informacoes">
                    <label id="image1" for="imagem">Imagem:</label>
                    <input id="imagem" name="imagem" placeholder="url da imagem">
                </div>

                <br>

                <div class="informacoes">
                    <label for="nome">Nome:</label>
                    <input id="nome" name="nome" placeholder="Nome do Carro" required>
                </div>

                <br>

                <div class="informacoes">
                    <label for="marca">Marca:</label>
                    <input id="marca" name="marca" placeholder="Marca do Carro" required>
                </div>

                <br>

                <div class="informacoes">
                    <label for="modelo">Modelo:</label>
                    <input id="modelo" name="modelo" placeholder="Modelo do Carro" required>
                </div>

                <br>

                <div class="informacoes">
                    <label for="ano">Ano:</label>
                    <input id="ano" name="ano" placeholder="Ano do Carro" required>
                </div>

                <br>

                <div class="informacoes">
                    <label for="preco">Preço:</label>
                    <input id="preco" name="preco" placeholder="Preço do Carro" required>
                </div>

                <br>

                <button type="submit">Cadastrar</button>
            </form>

        </div>
    </main>



    <footer>
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
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>