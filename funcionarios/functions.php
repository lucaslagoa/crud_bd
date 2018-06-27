<?php

require_once('../config.php');
require_once(DBAPI);

$funcionarios = null;
$funcionario = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $funcionarios;
	$funcionarios = find_all('funcionarios');
}


/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['funcionario'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $funcionario = $_POST['funcionario'];
    
    save('funcionarios', $funcionario);
    header('location: index.php');
  }
}


/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['funcionario'])) {

      $funcionario = $_POST['funcionario'];

      update('funcionarios', $id, $funcionario);
      header('location: index.php');
    } else {

      global $funcionario;
      $funcionario = find('funcionarios', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $funcionario;
  $funcionario = find('funcionarios', $id);
}
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $funcionario;
  $funcionario = remove('funcionarios', $id);

  header('location: index.php');
}