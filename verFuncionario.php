<?php 

 include 'telaAdm.php';
session_start();
function __autoload($class_name){
    require_once 'classes/'. $class_name. '.php';
}

 ?>

 <head>
     <link rel="stylesheet" href="font-awesome.min.css">
    <script src="https://use.fontawesome.com/7f68f17844.js"></script>
 </head>

<style >
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }
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
            border:none;
            border-radius: 10px;
            padding: 15px;
            background: #fff;
            color: #c5b785;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #00000056;
            outline: none;
            box-sizing: border-box;
        }

        .dados > label{
            color:  #FDC500;
            margin-bottom: 10px;
        }

        .dados > select{
            color:  #282828;
            margin-bottom: 10px;
        }

        .dados > input::placeholder{
           color: #FDC500; 
        }
       
        .conteudos{
            margin-left:auto ;
            margin-right:auto ;
            border: 1px solid yellow;
            width: 1200px;
            background-color: #262626;
            padding: 40px;
           
        }
        .conteudos form{
            display: flex;
        }

        .conteudos h1{
            color: #FDC500;
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

        .perfil-sexo{
            display: flex;
            padding-right: 200px;
        }

        .perfil-sexo .dados{
            margin: 40px;
           
        }

        .dados > select{
            height: 30px;
        }

        .dados- option{
            width: 40px;


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


</style>

 <div class="direita">

    <?php 

    if (isset($_POST['Atualizar'])) {
         $verFuncionario = new Funcionarios();
       
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $telefone = $_POST['telefone'];
        $email =$_POST['email'];
        $numeroBI = $_POST['numeroBI'];
        $sexo = $_POST['sexo'];
        $username = $_POST['username'];
        $senha = $_POST['senha'];
        $perfil = $_POST['perfil'];
        $morada = $_POST['morada'];

           $verFuncionario->setNome($nome);
            $verFuncionario->setApelido($apelido);
            $verFuncionario->setTelefone($telefone);
            $verFuncionario->setEmail($email);
            $verFuncionario->setNumeroBI($numeroBI);
            $verFuncionario->setSexo($sexo);
            $verFuncionario->setUsername($username);
            $verFuncionario->setSenha($senha);
            $verFuncionario->setPerfil($perfil);
            $verFuncionario->setMorada($morada);

           if ($verFuncionario->atualizar($id)) {
               echo "atualizado com sucesso!";
           }


    }

     ?>

     <?php 
     if (isset($_GET['acao']) && $_GET['acao'] == 'apagar') {
        
        $verFuncionario = new Funcionarios();
        $id = (int)$_GET['id'];
        if ($verFuncionario->apagar($id)){
            echo "apagado com sucesso";
        }
     }


      ?>

    <?php  

    if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

         $verFuncionario = new Funcionarios();
        $id = (int)$_GET['id'];
        $resultado = $verFuncionario->select($id);

    ?>
     <div class="conteudos">
        <h1>Atualizar funcionario</h1>
        <form action="" method="POST">
            <div class="esq">
                <div class="dados">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="digite o nome do funcionario">
                    </div>
                    <div class="dados">
                    <label for="apelido">Apelido</label>
                    <input type="text" id="apelido" name="apelido" value="<?php echo $resultado->apelido; ?>" placeholder="digite o apelido">
                    </div>
                    <div class="dados">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $resultado->telefone; ?>" placeholder="digite o telefone">
                    </div>
                    <div class="dados">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $resultado->email; ?>" placeholder="digite o email">
                    </div>
                    <div class="dados">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" value="<?php echo $resultado->senha; ?>" placeholder="digite a senha">
                    </div>
            </div>
            <div class="dir">
                <div class="dados">
                    <label for="numeroBI">Numero do BI</label>
                    <input type="text" id="numeroBI" name="numeroBI" value="<?php echo $resultado->numeroBI; ?>" placeholder="Digite o numero do BI">
                </div>
                <div class="dados">
                    <label for="username">UserName</label>
                    <input type="text" id="username" name="username" value="<?php echo $resultado->username; ?>" placeholder="Digite o user name">
                </div>
                <div class="perfil-sexo">
                    <div class="dados">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" >
                            <option value="<?php echo $resultado->feminino; ?>">Feminino</option>
                            <option value="<?php echo $resultado->masculino; ?>">Masculino</option>
                            <option value="<?php echo $resultado->outros; ?>">Outros</option>
                        </select>
                    </div>
                    <div class="dados">
                        <label for="perfil">Perfil</label>
                        <select name="perfil" id="perfil">
                            <option value="<?php echo $resultado->administrador; ?>">Administrador</option>
                            <option value="<?php echo $resultado->recepcionista; ?>">Recepcionista</option>
                        </select>
                    </div>
                </div>
                <div class="dados">
                    <label>Morada</label>
                    <textarea name="morada" value="<?php $resultado->morada; ?>" id="morada" cols="60" rows="10" ></textarea>
                </div>
               <div class="botoes">
                <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
                   <button class="btn-guardar" name="Atualizar">Atualizar</button>
               </div>
            </div>
            
        </form>
    </div>       
    <?php 
    }
     ?>

     <div class="tabela">
        <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Numero de BI</th>
            <th>Sexo</th>
            <th>Username</th>
            <th>Senha</th>
            <th>perfil</th>
            <th>morada</th>
            <th>Ações</th>
        </tr>
    </thead>
        <?php   

        $verFuncionario = new Funcionarios();

         ?>
         <?php foreach($verFuncionario->selectAll() as $key =>$value ): ?>
    <tbody>
        <tr>
            <td><?php echo $value->id; ?></td>
            <td><?php echo $value->nome; ?></td>
            <td><?php echo $value->apelido; ?></td>
            <td><?php echo $value->telefone; ?></td>
            <td><?php echo $value->email; ?></td>
            <td><?php echo $value->numeroBI; ?></td>
            <td><?php echo $value->sexo; ?></td>
            <td><?php echo $value->username; ?></td>
            <td><?php echo $value->senha; ?></td>
            <td><?php echo $value->perfil; ?></td>
            <td><?php echo $value->morada; ?></td>
            <td>
                <?php echo "<a class='btn-editar' href='verFuncionario.php?acao=editar&id=" . $value->id ."' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i>" ?>
                <?php echo "<a class='btn-apagar' href='verFuncionario.php?acao=apagar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'><i class='fa fa-trash-o' aria-hidden='true'></i></a>"; ?>
            </td>
            
        </tr>
    </tbody>

        <?php endforeach; ?>
 </table>  
     </div>
   
    
 </div>

 
 <?php include 'footer.php' ?>

