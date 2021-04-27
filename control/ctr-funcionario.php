<?php
  require_once'../model/funcionario.php';
  $objFunc = new Funcionario();

  if(isset($_POST['txtLogin'])){
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if($objFunc -> validar($login, $senha)){
      $objFunc -> redirect('../venda.php');
    } else {
      $objFunc -> redirect('../index.php?login=false');
    }
  }
?>