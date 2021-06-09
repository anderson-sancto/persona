<?php
include("../model/variaveis.php");
include("../model/conexao.php");
include("../model/classcrud.php");

$Crud = new ClassCrud();
$Crud->insertDB(
  "persona (nome, idade, genero, profissao, salario, hobbie, bairro, cidade, estado, avatar)",
  "?,?,?,?,?,?,?,?,?,?",
  array($Nome, $Idade, $Genero, $Profissao, $Salario, $Hobbie, $Bairro, $Cidade, $Estado, $Avatar)
);

header("location:http://localhost/persona/views/consulta.php");
exit();
