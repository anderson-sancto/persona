<?php
include("../model/conexao.php");
include("../model/classcrud.php");


$Crud = new classcrud();
$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
  "persona",
  "id=?",
  array($IdUser)
);

header("location:http://localhost/persona/views/consulta.php");
