<?php
if (isset($_POST['nome'])) {
  $Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['nome'])) {
  $Nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Nome = "";
}
if (isset($_POST['idade'])) {
  $Idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['idade'])) {
  $Idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Idade = "";
}
if (isset($_POST['genero'])) {
  $Genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['genero'])) {
  $Genero = filter_input(INPUT_GET, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Genero = "";
}
if (isset($_POST['profissao'])) {
  $Profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['profissao'])) {
  $Profissao = filter_input(INPUT_GET, 'profissao', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Profissao = "";
}
if (isset($_POST['salario'])) {
  $Salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['salario'])) {
  $Salario = filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Salario = "";
}
if (isset($_POST['hobbie'])) {
  $Hobbie = filter_input(INPUT_POST, 'hobbie', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['hobbie'])) {
  $Hobbie = filter_input(INPUT_GET, 'hobbie', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Hobbie = "";
}
if (isset($_POST['bairro'])) {
  $Bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['bairro'])) {
  $Bairro = filter_input(INPUT_GET, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Bairro = "";
}
if (isset($_POST['cidade'])) {
  $Cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['cidade'])) {
  $Cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Cidade = "";
}
if (isset($_POST['estado'])) {
  $Estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['estado'])) {
  $Estado = filter_input(INPUT_GET, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Estado = "";
}
if (isset($_POST['inlineRadioOptions'])) {
  $Avatar = filter_input(INPUT_POST, 'inlineRadioOptions', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['inlineRadioOptions'])) {
  $Avatar = filter_input(INPUT_GET, 'inlineRadioOptions', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Avatar = "";
}
