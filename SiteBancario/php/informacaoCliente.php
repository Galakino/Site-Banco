<?php 
	if(!empty($_POST['edit']))
	{
		include_once("conexao-form-bd.php");

		$id = $_POST['edit'];

		$sql = "SELECT * FROM `clientes` WHERE  `id` = '".$id."' ";

		$resultado = $conexao->query($sql);
		
		if($resultado->num_rows > 0)
		{
			while($user_data = mysqli_fetch_assoc($resultado))
			{
				$nome = $user_data['nomeCliente'];
				$cep = $user_data['cep'];
				$email = $user_data['email'];
				$cartao = $user_data['cartao'];
			}
		} else {
			header('Location: home.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações adicionais</title>
	<link rel="website icon" type="png" href="https://claudia.abril.com.br/wp-content/uploads/2020/02/receita-torta-queijo-goiabada.jpg">
</head>
<style>
	body{
		background-color: #b3b3ff;
		font-family: Arial, sans-serif;
		margin-bottom: 35em;
		margin: 0;
	}
	.navbar{
		background: transparent;
	}
	ul {
		list-style: none;
		display: flex;
		justify-content: space-around;
		gap: 30rem;
	}
	ul li{
		color: white;
	}
	h1{
		position: absolute;
		top: 7%;
		left: 53%;
		transform: translate(-50%, -50%);
		border: 1px solid;
		font-size: 2em;
		width: 15em;
		border-radius: 10px;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-right: 5px;
		padding-left: 10px;
	}
	a{
		text-decoration: none;
		color: grey;
		background-color: pink;
		padding: 10px;
		position: absolute;
		top: 70%;
		left: 50%;
		transform: (-50%, -50%);
		border: 1px solid;	
	}
	a:hover{
		background-color:red ;
		color: white;
	}
	.box{
		border: solid lightblue 2px;
		width: 35%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: rgba(0, 0, 0, 0.8);
		padding: 25px;
		border-radius: 15px;
		color: white;
	}
	
	#edit{
		position: absolute;
		top: 90%;
		transform: translate(-50%, -50%);
		font-size: medium;
		width: 10em;
	}
	.titulo{
		color: white;
		background-color: green;
		font-size: 18px;
		padding: 5px;
		border-radius: 2px;
	}
	.link{
		text-decoration: none;
		color: grey;
		background-color: pink;
		font-size: 18px;
		padding: 5px;
		border-radius: 2px;
		position: relative;
		top: 6px;
	}
	.link:hover{
		background-color:red ;
		color: white;
	}
	.labelinput {
		position: absolute;
		bottom: 0px;
		left: 0px;
		pointer-events: none;
		transition: 0.5s;
		color: grey;
		font-size: 15px;
	}
	.inputusers{
		background: none;
		border: none;
		border-bottom: 1px solid white;
		outline: none;
		color: white;
		font-size: 15px;
		width: 100%;
		letter-spacing: 2px;
		position: relative;
	}
	.inputusers:focus + .labelinput, 
	.inputusers:valid + .labelinput {
		top: -10px;
		font-size: 12px;
		color: dodgerblue;
	}
</style>
<body>
<header style="background-color: #484D6D; padding-top: 3px; padding-bottom: 3px; border-bottom: 2px solid black; height: 4em;">
    <nav>
        <ul>
			<li class="titulo">Informações adicionais do cliente</li>
			<li><a class="link" href="home.php"	>Voltar</a></li>
        </ul>
    </nav>
</header>
	<div class="box">
	<form action="saveedit.php" method="POST">
   		<p style="position: relative;">
			<input type="text" name="nomeCliente" class="inputusers" value="<?php echo $nome; ?>" id="nomeCliente">
			<label for="nomeCliente" class="labelinput">Nome: </label> 
		</p>
   		<p style="position: relative;">
			<input type="text" name="cep" class="inputusers" value="<?php echo $cep; ?>" id="cep">
			<label for="cep" class="labelinput">CEP: </label>
		</p>
		<p style="position: relative;">
			<input type="text" name="email" class="inputusers" value="<?php echo $email; ?>" id="email">
			<label for="email" class="labelinput">Email: </label>
		</p>
		<p style="position: relative;">
			<input type="text" name="cartao" class="inputusers" value="<?php echo $cartao; ?>" id="cartao">
			<label for="cartao" class="labelinput">Número do cartão: </label>
		</p>
		<p>
		<center>
		<input type="submit" name="update" id="edit" value="Salvar">
		<input type="hidden" name="edit" value='<?php echo $_POST['edit']; ?>'>
		</center>
		</br>
		</p>
	</form>
	</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var inputs = document.querySelectorAll('.inputusers');
		inputs.forEach(function(input) {
			if (input.value) {
				input.nextElementSibling.style.top = '-14px';
				input.nextElementSibling.style.fontSize = '12px';
				input.nextElementSibling.style.color = 'dodgerblue';
			}
			input.addEventListener('focus', function() {
				this.nextElementSibling.style.top = '-14px';
				this.nextElementSibling.style.fontSize = '12px';
				this.nextElementSibling.style.color = 'dodgerblue';
			});
			input.addEventListener('blur', function() {
				if (!this.value) {
					this.nextElementSibling.style.top = '3px';
					this.nextElementSibling.style.fontSize = '15px';
					this.nextElementSibling.style.color = 'grey';
				}
			});
		});
	});
</script>
</body>
</html>
