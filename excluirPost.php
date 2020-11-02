<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
$id = filter_input(INPUT_GET, "id_post", FILTER_SANITIZE_SPECIAL_CHARS);
$username = "root";
$password = "";
try {
  $pdo = new PDO('mysql:host=localhost;dbname=login', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('DELETE FROM posts WHERE id_post = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo '<div class="alert alert-success m-5" role="alert">Deletado com sucesso !</div>';
  echo '<div class="m-5"><a href="meusposts.php">VOLTAR</a></div>';

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?> 