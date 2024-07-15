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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="font-awesome.min.css">
	<script src="https://use.fontawesome.com/7f68f17844.js"></script>
    <style>
        /*RESET */
*{margin: 0; padding: 0; font-size: 100%; font-family: font-family: 'Open Sans', sans-serif; font-weight: normal; box-sizing: border-box; border: none; outline: none;}
img{max-width: 100%;}
ul{list-style: none;}
a{text-decoration: none;}
h2{font-size: 1.5em; color: #333;}
p{font-size: 1em; color: #777;}
/*CABECALHO*/
.cabecalho{width: 100%; float: left; padding: 50px 8%; background-color:#00264D ;} 
.logo a{width: 220px; height:220px; float: left; background: url(../img/Logo2.jpg) no-repeat; font-size:0;}
.cabecalho form{ width: 30%; float:right; }
.cabecalho input[type="text"]{width: 85%; float:left; padding:15px 10px; border-radius: 5px 0 0 5px;}
.cabecalho button{width: 15%; float: right; padding: 15px 10px; background-color: #304D63; color: #fff; cursor:pointer; border-radius:0 5px 5px 0 ;}

/*principal*/
.principal{ width: 100%; float: left; padding: 20px 8%;}
.sobre{width: 70%; float: left; padding: 0 20px 20px 0;}
.sobre h2{ margin-bottom: 15px; }
.sobre img{ width: 50%; float: left; border-radius: 5px; margin: 0 15px 15px 0; }
.sobre p {text-align: justify;}
/*SIDEBAR*/
.onde-estamos{width: 30%; float: right; padding: 10px 20px ; background-color:#f5f5f5; border-radius: 5px; }
.onde-estamos h2{margin-bottom: 5px;}
.onde-estamos iframe { width: 100%; height: 250px; margin: 20px 0; }
.onde-estamos li{ color: #777; margin-bottom: 10px; }
.onde-estamos i {margin-right: 5px;}

/*Contatos*/
.conteinr{position: relative; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; padding: 20px 100px;}
.conteinr:after{ content: ''; position: absolute; left: 0; top: 0; width: 100%; height: 100%; background-color: url("../img/Loja.jpg") no-repeat center; background-size: cover; z-index: -1; filter: blur(50px); }
.caixa-contactos{max-width: 850px; display: grid; grid-template-columns: repeat(2, 1fr); justify-content: center; align-items: center; text-align: center; background-color: #fff; box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);}
.left{height: 100%; background: url("../img/Loja.jpg") no-repeat center; background-size: cover; background-color: #fff;}
.rigth{padding: 25px 40px;}
.rigth h2{padding-bottom: 10px; margin-bottom: 10px; position: relative;}
.rigth h2:after{ content: ''; position: absolute;left: 50%; bottom: 0; transform: translateX(-50%); height: 4px; width: 50px; border-radius: 2px; background-color: #2ecc71; }
.field{width:100%; padding: 0.5rem 1rem; outline: none; border: 2px solid rgba(0,0,0,0); background-color: rgba(230, 230, 230, 0.6); font-size: 1.1rem; margin-bottom: 22px; transition: .3s}
.field:hover{background-color: rgba(0,0,0,0.1);}
.field:focus{ background-color: #fff; border: 2px solid rgba(30,85,250, 0.47) }
.area{ min-height: 150px; }
.btn{ width: 100%; padding: 0.5rem 1rem; font-size: 1.1rem; background-color: #2ecc71; cursor: pointer; outline: none; border: none; color:#fff; transition: .3s; }

/*Menu*/

            /* menu */
  .menu{
    background-color: #252525;
    padding: 15px 0;
}

.menu h1{
    color: #ffd936;
   }

.menu-nav a{
    text-decoration: none;
    color: #fff;
    font-size: 1.125wm;
}

.container  {
    display: flex;
    max-width: 960px;
    margin: 0 auto;
}

.menu-nav{
    flex: 1;
    align-self: center;
}

.menu-nav ul{
    float: right;
    display: flex;
    list-style: none;
}

.menu-nav ul li a{
    padding: 10px;
}

.menu-nav ul li a:hover{
    color: #ffd936;
    cursor: pointer;
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

    </style>
</head>
<body>
<header class="menu">
        <div class="container">
            <h1 style="color:FDC500;">CONFORT HOUSE</h1>
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
<main class="principal">
			<article class="sobre">
				<h2> Sobre nos</h2>
				<img src="img/quarto-3.jpg" width="450" height="350" alt="confort house">
				<P>
                    visao e missao da CONFORT HOUSE
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus qui sed dolorum nemo ducimus quasi veniam a mollitia eius. Veniam amet sapiente nobis reprehenderit reiciendis obcaecati incidunt aliquam, repellat tenet
				</P>
			</article>
			<aside class="onde-estamos">
				<h2>Onde estamos </h2>
				<p>
				Av. Julius Nyerere, Maputo
				</p>
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.8933494993994!2d32.59693321502395!3d-25.905876283571505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69096e2949fcf%3A0xe0dd6fdf728dfb77!2sAvenida%20Julius%20Nyerere%2C%20Maputo!5e0!3m2!1spt-PT!2smz!4v1638716115436!5m2!1spt-PT!2smz" ></iframe>
				<h2> Contatos</h2>
				<ul>
					<li><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (+258) 845736245</li>
					<li><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>(+258) 845736245</li>
					<li><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> heldermucondo@gmail.com</li>
				</ul>
			</aside>
		</main>
</body>
</html>