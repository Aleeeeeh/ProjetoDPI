<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Minhas Postagens</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="paginaInicial.php"><img src="img/logo.png" alt="Logo" class="logo"></a> 
        <nav>
          <ul>
              <li><a href="meusposts.php">Minhas Postagens</a></li>
              <li><a href="novopost.php">Novo Post</a></li>
              <li><a href="sair.php">Sair</a></li>
          </ul>
        </nav>
    </header>
    <main style="background-image:url(./img/fundo.jpg);">
        <p id="postsRecentes" style="color: #fff;">Meus Posts:</p> 
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
              <div class="card-header" style="text-align: center;font-size: 25px;">Titulo</div>
              <div class="card-body">
                <p class="card-title">Autor:</p>
                <p class="card-text">Categoria:</p>
                <p class="card-text initialism">Postado em:</p>
              </div>
            </div>
            </div><!-- Fim da div filho -->
    </main>
    <footer>
        <div class="conteudo-rodape">
            <img src="img/footer.png" alt="footer"> <br>
            <p style="color: #fff;">Todos os direitos reservados</p> 
            <p style="color: #fff;">© Copyright</p>
        </div>
    </footer>
</body>
</html>