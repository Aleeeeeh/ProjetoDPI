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
    <title>Cadastro</title>
  </head>
  <body id="corpo">
    <div class="card" id="TelaLogin">
      
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text"class="form-control" name="nome" id="CaixaEntrada" aria-describedby="emailHelp" placeholder="Digite seu nome" maxlength="30">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text"class="form-control" name="telefone" id="CaixaEntrada" aria-describedby="emailHelp" placeholder="Digite seu telefone" maxlength="30">
                  </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email"class="form-control" name="email" id="CaixaEntrada" aria-describedby="emailHelp" placeholder="Digite seu email" maxlength="40">
                  </div>
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" id="CaixaEntrada" placeholder="Digite sua senha" maxlength="32" maxlength="32">
                    </div> 
                <div class="form-group">
                  <label>Confirmar senha</label>
                  <input type="password" class="form-control" name="confirmasenha" id="CaixaEntrada" placeholder="Digite sua senha" maxlength="32" maxlength="32"><br>
                <button type="submit" class="btn btn-success btn-block ">Cadastrar</button> 
              </form>
             <a href="index.php" class="mt-3">Ir para login</a>
        </div>
      </div>
<?php

if(isset($_POST['nome'])){

  $nome = addslashes($_POST['nome']);
  $telefone = addslashes($_POST['telefone']);
  $email = addslashes($_POST['email']);
  $senha = addslashes($_POST['senha']);
  $confirmasenha = addslashes($_POST['confirmasenha']);
  

  if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmasenha)){
    $u->conectar("login","localhost","root","");
    if($msgErro == "")
    {
      if($senha == $confirmasenha){
        if($u->Cadastrar($nome,$telefone,$email,$senha)){
          ?>
          <div class="alert alert-success" role="alert">
             Usuário cadastrado com sucesso!
         </div>
         <?php
        }
        else{
          ?>
         <div class="alert alert-danger" role="alert">
            Usuário já está cadastrado
        </div>
        <?php
        }
      }
      else{
        ?>
         <div class="alert alert-danger" role="alert">
            Senha incorreta !
        </div>
        <?php
      }
     
  }
  
}
else
  {
    ?>
         <div class="alert alert-danger" role="alert">
         Preencha todos os campos!
        </div>
    <?php    
  }
}
?>
  </body>
</html>