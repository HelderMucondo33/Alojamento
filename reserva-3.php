<?php 
        session_start();
//verificacao
if(!isset($_SESSION['logado'])){
   header('location: form.php');
}
        require_once 'classes/reservar.php';
        require_once 'classes/quartos.php';
       
        $reserva = new Reservas();

        $quarto = new Quartos();
       

        $dataAtual = date('Y-m-d');

        if(isset($_POST['reservar'])) {
            $data_entrada = $_POST['data_entrada'];
            $data_saida = $_POST['data_saida'];
            $status = 1;
            $id_cliente =$_SESSION['id'];
            $preco = $_POST['preco'];
            // $id_cliente =$_POST['id_cliente'];

            // $id_quarto = $_POST['id_quarto'];
            if (isset($_GET['id'])) {
              
                $idQ = $_GET['id'];
            }
            $reserva->setData_entrada($data_entrada);
            $reserva->setData_saida($data_saida);
            $reserva->setStatus($status);
            $reserva->setId_cliente($id_cliente);
            $reserva->setId_quarto($idQ);
            $reserva->setPreco($preco);
      
            
            $dataAtual = time();
            $data_saida = strtotime($data_saida);

           

            if ($reserva->inserir()) {
            // die("02");
                
           
                echo "<script>alert('reservado com sucesso');document.location='reserva.php'; </script>";
               /*document.location='reserva.php'*/
                $id = $_SESSION['id'];
            
                $dados = $reserva->dadosReserva($id);
               
                echo "<br>";
                echo $dados->username;
                echo "<br>";
                echo $dados->email;
                echo "<br>";
                echo $dados->nr_camas;
                echo "<br>";
                echo $dados->preco;
                echo "<br>";
                 $ultID = $reserva->ultimoId()->id;

            if($dataAtual > $data_saida){

                 // $id = (int)$_GET['id'];
                 $quarto->atualizarStatusQ($idQ);
              

                if ($reserva->atualizarStatus($ultID)) {
                    echo "status atualizado";
                }

                // echo "hoje e dia da saida!"."<br>";
               
            }
            }


        }
     ?>