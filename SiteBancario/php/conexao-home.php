<html>
    <body>
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
				$usuario = $conexao -> real_escape_string($_POST['usuario']);
				$senha = $conexao -> real_escape_string($_POST['senha']);

				$sql="SELECT `id`, `nome` FROM `cadastrogerente` WHERE `nome` = '".$usuario."' AND `senha` = '".$senha."'
				AND `ativo` = 's';";
				
				$resultado = $conexao->query($sql);
				
				if($resultado->num_rows != 0) {
					$row = $resultado -> fetch_array();
					$_SESSION['id'] = $row[0];
					$_SESSION['nome'] = $row[1];
					$conexao -> close();
					
				header('Location: home.php', true, 301);
					exit();
				} else {
					$conexao -> close();
					header('Location: index.php');
				}
			}
		?>
	</body>
</html>