<?php
	include_once("../conexao/conexao.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha = md5($senha);
	$select_situacao = $_POST['select_situacao'];
	$select_nivel_acesso = $_POST['select_nivel_acesso'];
	
?>