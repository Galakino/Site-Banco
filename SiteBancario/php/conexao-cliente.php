<?php
	// iniciar uma sessão
	session_start();
			
	include('bd.php');
		
	$conexao = new mysqli($host,$usuario,$senha,$bd);

	if ($conexao -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conexao -> connect_error;
		exit();
	} else {
	// Evita caracteres epsciais (SQL Inject)
	$cliente = $conexao -> real_escape_string($_POST['nomeCliente']);
    $cep = $conexao -> real_escape_string($_POST['cep']);                
    $email = $conexao -> real_escape_string($_POST['emailCliente']);

	$sql = "INSERT INTO `sitebanco`.`clientes`(`nomeCliente`, `nomeGerente`, `email`, `dataCadastro`, `cep`)
		VALUES
	('".$cliente."', '".$_SESSION['nome']."', '".$email."', '".date('Y-m-d')."', '".$cep."');";
	
	$resultado1 = $conexao->query($sql);
	$conexao -> close();
	header('Location: home.php', true, 301);
} 
?>
