<?php
//  include 'telaAdm.php';
session_start();
//verificacao
if(!isset($_SESSION['logado'])){
   header('location: form.php');
}

function __autoload($class_name){
    require_once 'classes/reservar.php';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>        /*Tabela*/
         
         .btn-editar{
            
            outline: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px;
            color: #fff;
            background-color: #0298cf;
         } 

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
                /*Tabela*/
         
         .btn-editar{
            
            outline: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px;
            color: #fff;
            background-color: #0298cf;
         } 

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

         .opcoes{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0;
        }

        .opcoes > input{
            width: 80%;
            border:1px solid #fff;
            border-radius: 10px;
            padding: 15px;
            background: #252525;
            color: #c5b785;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #252525;
            outline: none;
            box-sizing: border-box;
        }

        .opcoes > label{
            color:  #ccc;
            margin-bottom: 10px;
        }

        .opcoes > select{
            color:  #282828;
            margin-bottom: 10px;
        }

        .opcoes > input::placeholder{
           color: #ccc; 
        }
       
        .conteudo{
            margin-left:auto ;
            margin-right:auto ;
            border: 1px solid yellow;
            width: 1200px;
            background-color: #252525;
            padding: 40px;
           
        }
        .conteudo form{
            display: flex;
        }

        .conteudo h1{
            /*color: #FDC500;*/
            color: #fff;
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

        .reservar{
            width: 50%;
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

        .perfil-sexo{
            display: flex;
            padding-right: 200px;
        }

        .perfil-sexo .dados{
            margin: 40px;
           
        }

        .opcoes > select{
            height: 30px;
        }

        .opcoes >  option{
            width: 40px;
        }

        .conta{
            display: flex;
            margin: 10px;
        }

        .conta .btn-login{
            color: #FDC500;
            border: 1px solid #FDC500;
            padding: 4px 8px;
            align-items: center;
            text-align: center;
            text-decoration: none;
            padding: 4px;
        }

        .conta > p{
            font-weight: bold;
            color: #ccc;
        }

        .logo h1{
            display: flex;
            float: right;
        }

        .logo h1::after{
            content: '';
            display: block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 5px solid #FDC500;
            background: #252525;
        }
        .logo img{
            width: 200px;
            height: 180px;
        }

    </style>
</head>
<body>

       <?php
       if (isset($_GET['id'])) {
              
         $idQ = $_GET['id'];
         }
       ?>
       
        <form method="POST" action="reserva-3.php?id=<?php echo $idQ; ?>">
            
            <div class="conteudo">
                <div class="esquerda">
                  <div class="logo">
                     <img src="img/logo.png">
                     <h1>Escolha as datas <br>
                     <p style="color:#FDC500">em Que deseja reservar o quarto</p></h1>
                  </div>
                    <div class="opcoes">
                        <label for="data_entrada">data_entrada Prevista</label>
                        <input type="date" name="data_entrada" id="data_entrada">
                    </div>
                     <div class="opcoes">
                        <label for="data_saida">Saida Prevista</label>
                        <input type="date" name="data_saida" id="data_saida">
                    </div>
                    <div class="opcoes">
                        <label for="preco">Valor adiantado em MT's</label>
                        <select name="preco" id="preco">
                           <option value="500">500MT</option>
                           <option value="1000">1000MT</option>
                        </select>
                    </div>
                    <div >
                         <input class="reservar" type="submit" name="reservar" value="Reservar">
                    </div>
                </div>

            </div>

        </form>
        <br>
        

</body>
</html>