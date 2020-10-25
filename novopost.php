<!--Autenticação -->
<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
         $id_usuario = $_SESSION["usuario"][0];
    }else{
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Novo Post</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="paginaInicial.php"><img src="img/logo.png" alt="Logo" class="logo"></a> 
        <nav>
          <ul>
              <li><a href="paginaInicial.php">Voltar</a></li>
          </ul>
        </nav>
    </header>
    <main">
        <p id="postsRecentes">Cria seu artigo</p>
    <form action="paginaInicial.php" method="POST">
        <div class="formulario">
            <label for="titulo" class="titulos">Titulo:</label>
            <input type="text" id="titulo" maxlength="100" name="titulo" class="input-padrao" placeholder="Insira um titulo" required>
            <label for="autor" class="titulos">Autor:</label>
            <input type="text" id="autor" maxlength="40" name="autor" class="input-padrao" placeholder="Nome do autor" required>
            
            <label for="categorias" class="titulos">Categorias:</label>
            <label for="radio-tecnologia"><input type="radio" name="categorias" value="tecnologia" id="radio-tecnologia">Tecnologia</label>
            <label for="radio-entretenimento"><input type="radio" name="categorias" value="entretenimento" id="radio-entretenimento">Entretenimento</label>
            <label for="radio-saude"><input type="radio" name="categorias" value="saude" id="radio-saude">Saúde</label>
            <label for="radio-educacao"><input type="radio" name="categorias" value="educacao" id="radio-educacao">Educação</label>
            <label for="radio-politica"><input type="radio" name="categorias" value="politica" id="radio-politica">Politica</label>
            <label for="radio-esportes"><input type="radio" name="categorias" value="esportes" id="radio-esportes">Esportes</label>
    
            <label for="artigo" class="titulos">Artigo:</label>
            <textarea name="artigo" id="artigo" maxlength="600" cols="70" rows="10" class="input-padrao" placeholder="Digite seu artigo" required></textarea>
            <input type="submit" value="enviar" class="enviar" name="submit">
        </div>
    </form>
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