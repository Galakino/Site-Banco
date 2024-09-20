<?php
	$nome1 = 'Lucas';
	$nome2 = 'j';

	if($nome1 = $nome2){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login da Gerência</title>
    <link rel="website icon" type="png"
    href="https://claudia.abril.com.br/wp-content/uploads/2020/02/receita-torta-queijo-goiabada.jpg">
</head>
<style>
    .box{
        margin-left: auto;
        margin-right: auto;
        border: 4px solid black;
        width: 30%;
        border-radius: 1em;
        padding-bottom: 12px;
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    body{
    background-color: #b3b3ff;
    font-family: Arial, sans-serif;
    margin-bottom: 35em;
    margin: 0;
}
    
</style>
<body>
<center>
    <div class="box">
    <h1>Digite seus dados:</h1>
    <form action="conexao-home.php" method="POST">
        <p>
            <label for="usuario">Seu Nome: </label>
            <input type="text" name="usuario" size="20" required>
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" size="20" min="8" max="16" required>
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
        <!--sistema de login-->
    </form>
    </div>
    
</center>
</html>
<?php
	/* 
	COSTANTES

	define('NOME', 'Guilherme');
	echo NOME; 

	*/

	/*
	Declarar arrays

	$nome = array('lucas', 'joao', 'felipe');

	$nome[] = 'João';
	$nome[] = 'Felipe';

	$nome[0] = 'João';
	$nome[100] = 'Felipe';

	$variaveis = ['Joao', 'Guilherme', 'Felipe'];

	$nome = array('lucas', true, 23, 10.45);
	*/ 

	/*
	CONCATENAÇÃO

	$nome = "Lucas";

	echo "Meu nome é $nome";

	$nomedaclasse = "box";

	echo "<div class=\"$nomedaclasse\">Meu conteúdo da div<div>"
	*/






?>
<?php } else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Errado
</body>
</html>
<?php } ?>