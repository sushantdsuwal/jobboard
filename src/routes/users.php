<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//Get All users
$app->get('/api/users', function (Request $request, Response $response, array $args) {
  $sql = "SELECT * FROM users";

  try{
    //GET DB Object
    $db = new db();
    //Connect
    $db = $db->connect();

    $stmt = $db->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null ;
    echo json_encode($users);

  } catch (PDOException $e) {
      echo '{"error": {"text": '.$e->getMessage().'}';
  }
});