  <?php
  require_once 'classes/usuarios.php';
  $u = new usuario;
  $u->conectar("login","localhost","root","");

  if(isset($_POST['titulo'])){

    $titulo = addslashes($_POST['titulo']);
    $autor = addslashes($_POST['autor']);
    $categorias = addslashes($_POST['categorias']);
    $artigo = addslashes($_POST['artigo']);
    $u->conectar("login","localhost","root","");
    $u ->postar($titulo, $autor, $categorias, $artigo );

}
  /* Selecionando tabela com os dados que serão exibidos e armazenando na variável row_post */
  $result_post = "SELECT * FROM posts";

  $result_post = $pdo->prepare($result_post);
  $result_post->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Página Inicial</title>
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
    <main><!-- PENDENTE: Deixar 3 cards em uma linha e fazer a página de artigos -->
      <img src="img/hw.jpg" alt="banner" class="banner">
      <div style="background-color: lightgray;">
        <p id="postsRecentes">Post recentes:</p>
        <!-- Exibindo dados na tela inicial -->
        <?php while($row_post = $result_post->fetch(PDO::FETCH_ASSOC)){?>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-white bg-info mb-4" style="max-width: 25rem;">
              <div class="card-header" style="text-align: center;font-size: 25px;"><?php echo $row_post['titulo'];?></div>
              <div class="card-body">
                <p class="card-title">Autor: <?php echo $row_post['autor'];?></p>
                <p class="card-text">Categoria: <?php echo $row_post['categorias'];?></p>
                <p class="card-text initialism">Postado em:</p>
                <button type="button" class="btn btn-success float-right"><a href="artigo.php" style="color: white;">Leia Mais</a></button>
              </div>
            </div>
            </div><!-- Fim da div filho -->
          </div>
        </div>
        <?php } ?>
      </div>
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
