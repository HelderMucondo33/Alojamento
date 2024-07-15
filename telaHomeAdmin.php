<?php
 include 'telaAdm.php';
// session_start();
function __autoload($class_name){
    require_once 'classes/'. $class_name. '.php';
    require_once 'classes/loginUserConfig.php';
    require_once 'classes/reservar.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASBOARD</title>
    <link rel="stylesheet" href="font-awesome.min.css">
	<script src="https://use.fontawesome.com/7f68f17844.js"></script>
    <style>
        .conteudo{
            display:flex;
            /* justify-content: space-around; */
        }

        .conteudo .relatorio{
            margin-bottom: 50px;
         padding:10px 24px;
         box-shadow: 0px 10px 40px #ff7f50;
         margin:20px;
        }

        .conteudo .relatorio h3{
            background-color:#ff7f50;
            border:1px solid greenyellow;
            color:#fff;
            padding:4px;
        }

        .conteudo .relatorio h1::after{
            content: '';
            display:block;
            height:20px;
            width:20px;
            border-radius:50%;
            background:#fff;
            border:4px solid #ff7f50;
        }

        .conteudo .relatorio h2{
            text-align:center;
        }
        
                /*Tabela*/

         .btn-apagar{
             outline: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px;
             color: #fff;
             background-color: #f80000;
         } 

         .tabela{
            height: 500px;
            overflow: auto;
         }

         table{
            width: 1200px;
            table-layout: fixed;
            min-width: 900px;
            border-collapse: collapse;
         }

         thead th{
            background-color: #f6f9fc;
            color: #8493a5;
            font-size: 15px;

         }

         th, td{
            border-bottom: 1px solid #dddddd;
            padding: 10px 20px;
            word-break: break-all;
            text-align: center;
         }

         tr:hover td{
            color: #0298cf;
            cursor: pointer;
            background-color: #f6f9fc;
         }

         ::-webkit-scrollbar{
            height: 5px;
            width: 5px;
         }

         ::-webkit-scrollbar-track{
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
         }

         ::-webkit-scrollbar-thumb{
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
         }
    </style>
</head>
<body>
       <?php 

        $quartos = new Quartos();

        $usuarios = new LoginProcess();

        $reservas = new Reservas();

        $total= $quartos->totalQuartosDisponiveis();
    
        $qtd = $quartos->qtdQuartosDisponiveis();

        $qtdQuartosReservados = $quartos->totalQuartosReservados();

        $totalUsuarios = $usuarios->totalUsuariosDisponiveis();

        $totalReserva = $reservas->totalReservas();


       ?> 

<?php 
     if (isset($_GET['acao']) && $_GET['acao'] == 'apagar') {
        
        $usuarios = new LoginProcess();
        $id = (int)$_GET['id'];
        if ($usuarios->apagar($id)){
            echo "apagado com sucesso";
        }
     }


      ?>
    <div class="direita">
        <div class="conteudo">
            <div class="relatorio">
                <h3>Total de Quartos</h3>
                <h2> <i class="fa fa-bed" aria-hidden="true"></i><?php echo $total->qtd_quartos; ?></h2>
            </div>
            <div class="relatorio">
                <h3>Total de Quartos Disponiveis</h3>
                <h2> <i class="fa fa-bed" aria-hidden="true"></i> <?php echo $qtd->qtd_quartos; ?></h2>
            </div>
            <div class="relatorio">
                <h3>Total de Quartos Reservados</h3>
                <h2> <i class="fa fa-bed" aria-hidden="true"></i> <?php echo $qtdQuartosReservados->qtd_quartos; ?></h2>
            </div>
            <div class="relatorio">
                <h3>Total de Usuarios</h3>
                <h2><i class="fa fa-user" aria-hidden="true"></i> <?php echo $totalUsuarios->qtd_usuarios; ?></h2>
            </div>
            <div class="relatorio">
                <h3>total de reservas</h3>
                <h2><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $totalReserva->qtd_reservas; ?></h2>
            </div>
        </div>

        
     <div class="tabela">
        <table>
            <legend>Usuarios Cadastrados</legend>
    <thead>
        <tr>
            <th>#</th>
            <th>username</th>
            <th>email</th>
        </tr>
    </thead>
        <?php   

            $usuarios = new LoginProcess(); 

         ?>
         <?php foreach($usuarios->selectAll() as $key =>$value ): ?>
    <tbody>
        <tr>
            <td><?php echo $value->id; ?></td>
            <td><?php echo $value->username; ?></td>
            <td><?php echo $value->email; ?></td>
            <td>
                <?php echo "<a class='btn-apagar' href='telaHomeAdmin.php?acao=apagar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"; ?>
            </td>
            
        </tr>
    </tbody>

        <?php endforeach; ?>
 </table>  
     </div>
    </div>
</body>
</html>