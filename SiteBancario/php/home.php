


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="home.css">
    <title>Painel Gerencia</title>
	<link rel="website icon" type="png" href="logo.png">
<style>
	body{
    background-color: #b3b3ff;
    font-family: Arial, sans-serif;
    margin-bottom: 35em;
    margin: 0;
}
table {
	position: absolute;
	top: 25%;
	left: 2.5%;
	transform: (-50%, -50%);
	border: 1px solid;
	background-color: white;
	padding: 10px;
	width: 94%;
} 
table td{
	border: 1px solid;
	
}
td button{
	padding-top: 10px;
	padding-bottom: 10px;
	padding-right: 10px;
	padding-left: 10px;
	color: white;
	text-shadow: 1px 1px 1px black;
}
td button:hover{
	cursor: pointer;
	text-shadow: none;
}
th{
	text-align: center;
}
tr, td, th{
	border-bottom: 1.5px solid black;
	padding: 10px;
}
.add{
	text-decoration: none;
	color: black;
	background-color: lightgreen;
	position: relative;
	bottom: 10px;
}
.exclui{
	text-decoration: none;
	color: black;
	background-color: red;
	position: relative;
	bottom: 10px;
}
.criar{
	text-decoration: none;
	color: black;
	background-color: greenyellow;
	padding: 10px;
	position: absolute;
	top: 15%;
	left: 75%;
	transform: (-50%, -50%);
	border: 1px solid;
  }
  .criar:hover{
	background-color: black;
	color: white;
  }

  .Linha{
    position: absolute;
    top: 24%;
    left: 49.46%;
    transform: translate(-50%, -50%);
    border-bottom: 3px solid blue;
    width: 1030px;
    height: 4px;
	z-index: 14;
}
</style>
</head>
<body>
<?php include("menu.php") ?>
<!--inclui o menu-->
<a href="cliente.php" class="criar">Adicionar cliente</a>

<span class="Linha"></span>

<?php
echo "<table>
		<tr>
			<th>ID</th>
			<th>Cliente</th>
			<th>Cep</th>
			<th>Email</th>
			<th>Cartão</th>
			<th>Data de Cadastro</th>
			<th>Ação</th>
		</tr>";
	include("bd.php");

	$conexao = new mysqli($host,$usuario,$senha,$bd);

	if ($conexao -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conexao -> connect_error;
		exit();
	} else {
	
	$sql = "SELECT * FROM `sitebanco`.`clientes`
            WHERE `nomeGerente` = '".$_SESSION['nome']."';";

	$resultado = $conexao->query($sql);
	while($row = mysqli_fetch_array($resultado)){
		echo '</br><tr>
				<td>'.$row[0].'</td>	
				<td>'.$row[2].'</td>
				<td>'.$row[4].'</td>
				<td>'.$row[5].'</td>
				<td>'.$row[6].'</td>
				<td>'.'<center>'.$row[3].'</center>'.'</td>
				<td>
					<form action="informacaoCliente.php" method="POST">
						<input type="hidden" name="edit" value='.$row[0].'></br>
						<button type="submit" class="add">Editar</button>
					</form>
				</td>
				<td>
					<form action="exclui.php" method="POST">
						<input type="hidden" name="exclui" value='.$row[0].'></br>
						<button type="submit" class="exclui">Excluir</button>
					</form>
				</td>
			</tr>';
	} echo "</table>";
	$conexao -> close();
	}
?>
</body>
</html>


















