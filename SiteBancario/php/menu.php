<!-- menu para todas as paginas --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png"
    href="https://claudia.abril.com.br/wp-content/uploads/2020/02/receita-torta-queijo-goiabada.jpg">
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
.corBranca{
    color: white;
    background-color: blue;
    font-size: 18px;
    padding: 5px;
    border-radius: 2px;
}
</style>
<body>
<header style="background-color: #484D6D; padding-top: 3px; padding-bottom: 3px; border-bottom: 2px solid black; ">
    <nav class="navbar">
        <ul class="menu">
            <?php
            // iniciar uma sessão
            session_start();

            if (empty($_SESSION['nome'])){
                // Logado??? Não?? Tchau, bb.
                header('Location: sair.php');
                exit();
            } else {
            echo '<li class="corBranca">Bem vindo, '.$_SESSION['nome'].'!</li>';
            }
            ?> 
            <li><a class="link" href="sair.php">Sair</a></li>
        </ul>
    </nav>
</header>
</body>
</html>