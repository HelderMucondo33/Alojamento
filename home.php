<?php 

// session_start();

require_once 'classes/loginUserConfig2.php';


//verificacao
if(!isset($_SESSION['logado'])){
   header('location: form.php');
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alojamento</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        .btn{
        background: transparent;
        border: 2px solid #FDC500;
        padding: 12px 34px;
        color: #fff;
        border-radius: 30px;
        text-decoration: none;
        margin-left: 100px;
        font-size: 14px;
        font-weight: bold;
        width: 100px;
}
.btn:hover{
	background-color: #FDC500;
	color: #fff;
	transform: .3s;
}
    </style>
</head>
<body>
    <header class="menu">
        <div class="container">
            <h1>CONFORT HOUSE</h1>
            <nav class="menu-nav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="reserva.php">Quartos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contacto.php">Conctato</a></li>
                </ul>
            </nav>
            <a class="btn" href="classes/logout.php" >Sair</a>
             <h1 style="color: greenyellow; margin-left:50px;"> <?php echo $_SESSION['username']; ?></h1>
        </div>
    </header>
    <main class="intro">
		<h1>Quartos com a cara<br>do Moçambique</h1>
		<p>Isso so no nosso Alojamento</p>
	</main>
    <section class="sobre">
		<h2>Um lugar com uma Mistura de</h2>
		<div class="container">
			<div class="sobre-item">
				<img src="img/quarto-4.jpg">
				<h3>Paz</h3>
			</div>
			<div class="sobre-item">
				<img src="img/quarto-3.jpg">
				<h3>relaxamento</h3>
			</div>
		</div>
		<p>A CONFORT HOUSE é uma empresa que desenvolve a sua atividade no deslumbrante Mocamique.Ele recomenda-te o melhor lugar para poderes estar, sozinho, com amigos, familia etc. Venha conhecer o melhor do Pais</p>
	</section>

    <div class="slideshow meio">
        <h1> Destaques </h1>

        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
                <img src="img/quarto-1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/quarto-2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/quarto-3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/quarto-4.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/quarto-5.jpg" alt="">
            </div>
        </div>

        <div class="navegacao">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
    </div>

	<section class="assine">
		<div class="container">
			<div class="assine-info">
				<h2>Assine Nossa Newsletter</h2>
				<p>promoções e eventos mensais</p>
			</div>
			<form>
				<label>E-mail</label>
				<input type="text" placeholder="Digite seu e-mail">
				<button type="submit">Enviar</button>
			</form>
		</div>
	</section>
      
    <footer class="footer">
		<di v class="container">
			<p>Este é um projeto do Grupo abstracao nivel 1000. Mais em conforthouse.com<br>Universidade Joaquim Chissano, Zimpeto - circular - Maputo</p>
			<div class="footer-logo">
			<h1>CONFORT HOUSE</h1>
		    </div>
		</div>
	</footer>
</body>
</html>