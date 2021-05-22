<?php
  require_once '../model/funcionario.php';
  $objFunc = new Funcionario();

  if(isset($_POST['txtlogin'])){
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if($objFunc -> validar($login, $senha)){
      $objFunc -> redirect('../funcionario.php');
    } else {
      $objFunc -> redirect('../index.php');
    }
  }

  if(isset($_POST['insert'])) {
    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCPF'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if($objFunc -> insert($nome, $cpf, $login, $senha)) {
      $objFunc -> redirect('../funcionario.php');
    }
  }

  if(isset($_POST['delete'])) {
    $id = $_POST['delete'];

    if($objFunc -> delete($id)) {
      $objFunc -> redirect('../funcionario.php');
    }
  }

  if(isset($_POST['update'])) {
    $id = $_POST['update'];
    $nome = $_POST['txtNome'];
    $cpf = $_POST['txtCPF'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    if($objFunc -> update($nome, $cpf, $login, $senha, $id)){
       $objFunc -> redirect('../funcionario.php');
    }
    }


?>