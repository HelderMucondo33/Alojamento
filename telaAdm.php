
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="font-awesome.min.css">
	<script src="https://use.fontawesome.com/7f68f17844.js"></script>
    <style>
            /*Reset*/
body, h1, h2, h3, p, ul {
    margin: 0px;
    padding: 0px;
}

body{
    font-family: Georgia, serif;
    color: #252525;
}

*{
    box-sizing: border-box;
}

            /* menu */
.menu{
    background-color: #252525;
    padding: 15px 0;
}

.menu-nav a{
    text-decoration: none;
    color: #fff;
    font-size: 1.125wm;
}

.menu h1{
    color: #ffd936;
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

.menu-lateral{
    /*position: fixed;*/
    width: 300px;
    height: 100vh;
    background-color: #282828;
    box-shadow: 0px 10px 40px #00000056;


}
i{
    color: #282828;
}

.conteudo{
    display:flex;
}
.direita{
  
}

.btn-menu{
    width: 100%;
    height: 60px;
    background-color: #FDC500;
    color: #252525;
    font-weight: 800;
    font-size: 12pt;
    outline: none;
    text-transform: uppercase;
    cursor: pointer;
    text-align: left;
    padding: 10px 15px;
}

.btn-menu:hover{
    background-color: greenyellow;
    color: #fff;
}

i{
   /* margin-left: 15px;*/
}
.logo img{
    width: 300px;
    height:200px;
}


    </style>

</head>
<body>
    <header class="menu">
        <div class="container">
      
            <!-- <h1>CONFORT HOUSE</h1> -->
            <nav class="menu-nav">
                <ul> 
                    <li><a href="#"><i class="fa fa-user-circle fa-2x" style="color:#fff;" aria-hidden="true"></i>BEM VINDO</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="conteudo">
    <div class="menu-lateral">
    <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <a href="telaHomeAdmin.php"><button class="btn-menu"><i class="fa fa-home"></i>Home</button></a>
        <a href="cadastroFuncionario.php"><button class="btn-menu"><i class="fa fa-user-plus" aria-hidden="true"> Adicionar funcionario</button></i></a>
        <a href="cadastroQuarto.php"><button class="btn-menu"> <i class="fa fa-bed" aria-hidden="true"></i> Adicionar quarto</button></i></a>
           <a href="verFuncionario.php"><button class="btn-menu"> <i class="fa fa-users" aria-hidden="true"></i> Funcionarios</button></i></a>
           <a href="cadastroUsuario.php"><button class="btn-menu"><i class="fa fa-user-plus" aria-hidden="true"></i> Adicionar Usuario</button></a>
           <a href="verUsuarios.php"><button class="btn-menu"><i class="fa fa-user" aria-hidden="true"></i> Usuario</button></a>
           <a href="#"><button class="btn-menu"><i class="fa fa-config" aria-hidden="true"></i>Configuracao</button></a>
           <a href="form.php"><button class="btn-menu"><i class="fa fa-log-out" aria-hidden="true"></i> Sair</button></a>

    </div>
 
 