<?php
 include 'telaAdm.php';
function __autoload($class_name){
    require_once 'classes/'. $class_name. '.php';
}

?>
<style>
       
       .dados{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0;
        }

        .dados > input{
            width: 80%;
            border:1px solid #FDC500;
            border-radius: 10px;
            padding: 15px;
            background: #fff;
            color: #c5b785;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #fff;
            outline: none;
            box-sizing: border-box;
        }

        .dados > label{
            color:  #252525;
            margin-bottom: 10px;
        }

        .dados > select{
            color:  #282828;
            margin-bottom: 10px;
        }

        .dados > input::placeholder{
           color: #282828; 
        }
       
        .conteudos{
            margin-left:auto ;
            margin-right:auto ;
            border: 1px solid yellow;
            width: 1200px;
            background-color: #fff;
            padding: 40px;
            
           
        }
        .conteudos form{
            display: flex;
        }

        .conteudos h1{
            color: #252525;
            text-align: center;
        }
        .esq{
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        .dir{
            width: 50%;
            display: flex;
            flex-direction: column;
            
            align-items: center;
        }

        .dir .btn-guardar{
            width: 35%;
            padding: 16px 16px;
            margin: 25px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #282828;
            background-color: #FDC500;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00000056;
            margin-top: 90px;
        }
        .dir .btn-voltar{
            width: 35%;
            padding: 16px 16px;
            margin: 25px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #282828;
            background-color: #FDC500;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00000056;
            margin-top: 90px;
        }

        .botoes{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tipo-cama{
            display: flex;
            padding-right: 200px;
        }

        .tipo-cama .dados{
            margin: 40px;
           
        }

        .dados > select{
            height: 30px;
        }

        .dados- option{
            width: 40px;
        }
    </style>


    <?php 
        $quarto = new Quartos();

        if(isset($_POST['guardar'])) {
            $nr_quarto= $_POST['nr_quarto'];
            $nr_camas = $_POST['nr_camas'];
            $tipo_cama = $_POST['tipo_cama'];
            $status_quarto = 0;
            $quarto->setNr_quarto($nr_quarto);
            $quarto->setNr_camas($nr_camas);
            $quarto->setTipo_cama($tipo_cama);
            $quarto->setStatus_quarto($status_quarto);
            
            //insert 

            if ($quarto->inserir()) {
                echo "inserido com sucesso";
            }
        }
     ?>

        <div class="direita">
        <div class="conteudos">
        <h1>Cadastrar novo quarto</h1>
        <form action="" method="POST">
            <div class="esq">
                    <div class="dados">
                    <label for="nr_quarto">Numero do Quarto</label>
                    <input type="number" id="nr_quarto" name="nr_quarto" placeholder="digite o numero do quarto" min="1">
                    </div>
                    <div class="dados">
                    <label for="nr_camas">Numero de camas</label>
                    <input type="number" id="nr_camas" name="nr_camas" placeholder="digite o nr_camas" min="0">
                    </div>
                    <div class="dados">
                    <label for="status_quarto">Status</label>
                    <input type="number" id="status_quarto" name="status_quarto" placeholder="digite o status do quarto" min="0" max="1">
                    </div>   
            </div>
            <div class="dir">
                <div class="tipo-cama">
                    <div class="dados">
                        <label for="tipo_cama">Tipo de Cama</label>
                        <select name="tipo_cama" id="tipo_cama">
                            <option value="king">King</option>
                            <option value="queen">Queen</option>
                        </select>
                </div>
               <div class="botoes">
                    <button class="btn-voltar">Voltar</button>
                   <button class="btn-guardar" name="guardar">Guardar</button>
               </div>
            </div>
            
        </form>
    </div>       

    </div>
    </div>

    
<?php include 'footer.php' ?>