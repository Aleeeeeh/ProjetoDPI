<?php
  require_once 'classes/usuarios.php';
  $u = new usuario;
  ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo-login.css">
    <title>Login</title>
  </head>
  <body id="corpo">
    <div class="card" id="TelaLogin">
      
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                  <label>LOGIN</label>
                  <input type="email"class="form-control" name="email" id="CaixaEntrada" aria-describedby="emailHelp" placeholder="Informe seu login">
                </div>
                <div class="form-group">
                  <label>SENHA</label>
                  <input type="password" class="form-control" name="senha" id="CaixaEntrada" placeholder="Informe sua senha" maxlength="32"><br>
                <button type="submit" class="btn btn-success btn-block ">Entrar</button>
                <a href="cadastro.php">cadastro</a>
              </form>
        </div>
      </div>

      <?php
      if(isset($_POST['email'])){

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
       
        if(!empty($email) && !empty($senha)){

          $u->conectar("login","localhost","root","");
            if($msgErro == ""){

              if($u->logar($email,$senha)){
           
                header("location: paginaInicial.php");
    
              }
              else{
                ?>
                <div class="alert alert-danger" role="alert">
                   Email ou senha incorretos !
               </div>
               <?php
              } 

            }else{
              echo "erro banco de dados";
           }
        }
        else
      {
        ?>
        <div class="alert alert-danger" role="alert">
           Preencha todos os campos! !
       </div>
       <?php
      }  
      }
      
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>