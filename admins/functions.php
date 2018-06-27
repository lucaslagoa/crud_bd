<?php

require_once('../config.php');
require_once(DBAPI);

$admins = null;
$admin = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $admins;
	$admins = find_all('admins');
}


/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['admin'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $admin = $_POST['admin'];
    
    save('admins', $admin);
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

    if (isset($_POST['admin'])) {

      $admin = $_POST['admin'];

      update('admins', $id, $admin);
      header('location: index.php');
    } else {

      global $admin;
      $admin = find('admins', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $admin;
  $admin = find('admins', $id);
}
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $admin;
  $admin = remove('admins', $id);

  header('location: index.php');
}