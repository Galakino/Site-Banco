<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu cliente</title>
    <link rel="website icon" type="png" href="logo.png">
</head>
<style>
    body{
    background-color: #b3b3ff;
    font-family: Arial, sans-serif;
    margin-bottom: 35em;
    margin: 0;
    }
    .box{
		border: solid lightblue 2px;
		width: 35%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: rgba(0, 0, 0, 0.8);
		padding: 30px;
		border-radius: 15px;
		color: white;
	}
   .criar{
	text-decoration: none;
	color: grey;
	background-color: pink;
	padding: 10px;
	position: absolute;
	top: 64%;
	left:47%;
	transform: (-50%, -50%);
	border: 1px solid;
  }
  .criar:hover{
	background-color:red ;
	color: white;
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
    .titulo{
		color: white;
		background-color: green;
		font-size: 25px;
		padding: 5px;
		border-radius: 2px;
	}
	.link{
		text-decoration: none;
		color: grey;
		background-color: pink;
		font-size: 20px;
		padding: 5px;
		border-radius: 2px;
		position: relative;
		top: 6px;
	}
	.link:hover{
		background-color: red;
		color: white;
	}
    .labelinput {
		position: absolute;
		top: 20px;
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
    #edit{
		position: absolute;
		top: 90%;
		transform: translate(-50%, -50%);
		font-size: medium;
		width: 10em;
	}
</style>
<body>
<header style="background-color: #484D6D; padding-top: 3px; padding-bottom: 3px; border-bottom: 2px solid black; height: 4em;">
    <nav>
        <ul>
			<li class="titulo">Dados do cliente</li>
			<li><a class="link" href="home.php"	>Voltar</a></li>
        </ul>
    </nav>
</header>
    <div class="box">
    <form action="conexao-cliente.php" method="POST">
        <center>
        <p style="position: relative;">
            <input type="text" name="nomeCliente" class="inputusers">
            <label for="nome" class="labelinput">Nome do cliente:</label>
        </p>
        <p style="position: relative;">
            <input type="text" name="emailCliente" class="inputusers">
            <label for="email" class="labelinput">Email do cliente:</label>
        </p>
        <p style="position: relative;">
            <input type="text" name="cep" class="inputusers">
            <label for="cep" class="labelinput">CEP do cliente:</label>
        </p>
        <p>
            <button type="submit" id="edit">Cadastrar</button>
        </p>
    </center>
   </div>
</form>
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
</head>
</html>