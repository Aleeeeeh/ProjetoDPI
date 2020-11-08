<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
    session_start();
    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        $id_usuario = $_SESSION["usuario"][0];
   }else{
       header('Location: index.php');
   }

    $username = "root";
    $password = "";
 
    $pdo = new PDO('mysql:host=localhost;dbname=login', $username, $password);

   $edita = FILTER_INPUT(INPUT_POST,"edita",FILTER_SANITIZE_STRING);
   
   if($edita){
        //Receber os dados do formulário
        $id = FILTER_INPUT(INPUT_POST, "id_post", FILTER_SANITIZE_NUMBER_INT);
        $titulo = FILTER_INPUT(INPUT_POST,"titulo",FILTER_SANITIZE_STRING);
        $autor = FILTER_INPUT(INPUT_POST,"autor",FILTER_SANITIZE_STRING);
        $artigo = FILTER_INPUT(INPUT_POST,"artigo",FILTER_SANITIZE_STRING);

        $result_post = "UPDATE posts SET titulo=:titulo, autor= :autor, artigo=:artigo WHERE id_post = $id";

        $update_post = $pdo->prepare($result_post);
        $update_post-> bindParam(':titulo',$titulo);
        $update_post-> bindParam(':autor',$autor);
        $update_post-> bindParam(':artigo',$artigo);

        if($update_post->execute()){
            echo '<div class="alert alert-success m-5" role="alert">Editado com sucesso !</div>';
            echo '<div class="m-5"><a href="meusposts.php">VOLTAR</a></div>';
        }else{
            echo '<div class="alert alert-success m-5" role="alert">Erro ao tentar editar a postagem !</div>';
            echo '<div class="m-5"><a href="meusposts.php">VOLTAR</a></div>';
        }
    }else{
            echo '<div class="alert alert-success m-5" role="alert">Erro ao tentar editar a postagem !</div>';
            echo '<div class="m-5"><a href="meusposts.php">VOLTAR</a></div>';
    }
   
?>