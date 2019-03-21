<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//Get All users
$app->get('/api/company', function (Request $request, Response $response, array $args) {
  $sql = "SELECT name FROM company";

  try{
    //GET DB Object
    $db = new db();
    //Connect
    $db = $db->connect();

    $stmt = $db->query($sql);
    $company = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null ;
    echo json_encode($company);

  } catch (PDOException $e) {
      echo '{"error": {"text": '.$e->getMessage().'}';
  }
});