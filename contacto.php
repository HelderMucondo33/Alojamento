<?php 
session_start();

function __autoload($class_name){
    // require_once 'classes/'. $class_name. '.php';
    require_once 'classes/contacto.php';
}

//verificacao
if(!isset($_SESSION['logado'])){
    header('location: form.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conctacto</title>
    <link rel="stylesheet" href="css/estilo.css">
	<style type="text/css">
		*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}


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


	
						/*CONCTACTO*/
.conteinr{
position: absolute;
display: flex;
justify-content: center; 
align-items: center; 
width: 100%; 
height: 100%; 
padding: 20px 100px;
}
.conteinr:after{
 content: ''; 
 position: absolute; 
 left: 0; 
 top: 0; 
 width: 100%; 
 height: 100%; 
 background-color: url("./img/quarto-1.jpg") no-repeat center; 
 background-size: cover; 
 z-index: -1; 
 filter: blur(50px); 
}
.caixa-contactos{max-width: 850px; display: grid; grid-template-columns: repeat(2, 1fr); justify-content: center; align-items: center; text-align: center; background-color: #fff; box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);}
.left{height: 100%; background: url("./img/quarto-1.jpg") no-repeat center; background-size: cover; background-color: #fff;}
.rigth{padding: 25px 40px;}
.rigth h2{padding-bottom: 10px; margin-bottom: 10px; position: relative;}
.rigth h2:after{ content: ''; position: absolute;left: 50%; bottom: 0; transform: translateX(-50%); height: 4px; width: 50px; border-radius: 2px; background-color: #FDC500; }
.field{width:100%; padding: 0.5rem 1rem; outline: none; border: 2px solid rgba(0,0,0,0); background-color: rgba(230, 230, 230, 0.6); font-size: 1.1rem; margin-bottom: 22px; transition: .3s}
.field:hover{background-color: rgba(0,0,0,0.1);}
.field:focus{ background-color: #fff; border: 2px solid rgba(30,85,250, 0.47) }
.area{ min-height: 150px; }
.btn-enviar{ width: 100%; padding: 0.5rem 1rem; font-size: 1.1rem; background-color: #FDC500; cursor: pointer; outline: none; border: none; color:#fff; transition: .3s; }


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
<?php 
	
    $contacto = new Contactos();
 
	if (isset($_POST['enviar'])) {
	
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$numero = $_POST['numero'];
		$mensagem = $_POST['txt'];

        $contacto->setNome($nome);
        $contacto->setEmail($email);
        $contacto->setNumero($numero);
        $contacto->setMensagem($mensagem);

        if ($contacto->inserir()) {
            echo "<script>alert('mensagem enviada com sucessso')</script>";
        }

	}

	


 ?>
	<div class="container">
		<main class="principal">
	<div class="conteinr">
		<div class="caixa-contactos">
			<div class="left"></div>
			<div class="rigth">
			<h2 class="hidel"> Contacte-Nos</h2>
			<form method="POST">
			<input type="text" class="field" placeholder="Seu nome" name="nome">
			<input type="text" class="field" placeholder="Seu Email" name="email">
			<input type="text" class="field" placeholder="Seu Numero" name="numero">
			<textarea placeholder="Digite uma Mensagem" class="area field" name="txt"></textarea>
			<input class="btn-enviar" type="submit" name="enviar" value="Enviar">
			</form>
			</div>
		</div>
	</div>		
</main>
	</div>
</body>
</html>