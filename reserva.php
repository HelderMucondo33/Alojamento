
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header class="menu">
        <div class="container">
        <h1>CONFORT HOUSE</h1>
            <nav class="menu-nav">
                <ul>
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="reserva.php">Quartos</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contacto.php">Conctato</a></li>
                </ul>
            </nav>
            <a class="btn" href="classes/logout.php" >Sair</a>
             <h1 style="color: greenyellow; margin-left:50px;"> <?php echo $_SESSION['username']; ?></h1>
            </nav>
        </div>
    </header>

    <?php 

        $quartos = new Quartos();
        // $dados = $reservaQ = new Reservas();
    
     ?>

    <?php foreach ($quartos->quartosDisponivel() as $key => $value): ?>

    <div class="container2">
        <div class="left-q">
            <img src="img/quarto-<?php echo $value->id; ?>.jpg" alt="quarto disponivel">
        </div>
        <div class="right-q">
            <h3>Quarto <?php echo $value->nr_quarto; ?></h3>
            <h4>numero de camas <?php echo $value->nr_quarto; ?></h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Distinctio quam nemo voluptas sed vero perspiciatis explicabo ea magnam iure nulla nihil,
                nobis blanditiis enim delectus architecto esse perferendis non.
            </p>
            <!-- <button class="btn-quarto">Ver quarto</button> -->
            <a class="btn-quarto" href="reserva-2.php?id=<?php echo $value->id; ?>"> Fazer Reserva</a>
        </div>
    </div>
        
    <?php endforeach; ?>
    
</body>
</html>