<?php
	session_start();
	include("bd.php");

	$conexao = new mysqli($host,$usuario,$senha,$bd);

	if ($conexao -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conexao -> connect_error;
		exit();
	} else {

	$sql = "DELETE FROM `sitebanco`.`clientes`
            WHERE `id`='".$_POST["exclui"]."';";

	$resultado = $conexao->query($sql);
	$conexao -> close();
    header('Location: home.php', true, 301);
}
?>