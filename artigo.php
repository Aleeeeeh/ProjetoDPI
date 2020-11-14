<?php
    require_once 'classes/usuarios.php';
    $u = new usuario;
    $u->conectar("login","localhost","root","");
    
    session_start();
    $id = filter_input(INPUT_GET, 'id_post', FILTER_SANITIZE_SPECIAL_CHARS);
     $result_post = "SELECT * FROM posts WHERE id_post='$id'";
    //Pegar pelo id_post 
     $result_post = $pdo->prepare($result_post);
     $result_post->execute();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artigo</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <?php
      if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    ?>
        <a href="paginaInicial.php"><img src="img/logo.png" alt="Logo" class="logo"></a> 
        <nav>
          <ul>
              <li><a href="meusposts.php">Minhas Postagens</a></li>
              <li><a href="novopost.php">Novo Post</a></li>
              <li><a href="sair.php">Sair</a></li>
          </ul>
        </nav>
        <?php
      }else{
        ?>
        <a href="pageVisita.php"><img src="img/logo.png" alt="Logo" class="logo"></a>
        <nav>
          <ul>
              <li class="text-white">Ainda não possui uma conta ?</li>
              <li><a href="cadastro.php">Cadastre-se</a></li>
          </ul>
        </nav>
      <?php
      }
      ?>
    </header>
    <div class="container">
        <?php while($row_post = $result_post->fetch(PDO::FETCH_ASSOC)){?>
            <h1 class="mt-5"><?php  echo $row_post['titulo'] ;?></h1>
            <h5>Por <?php echo $row_post['autor'] ?> | <?php echo $row_post['data']; ?></h5><br>
            <p><?php echo $row_post['artigo'] ;?></p>
        <?php } ?>
    </div>
</body>
</html>