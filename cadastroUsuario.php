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
            background-color: #fff;
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
    </style>


    <?php 
        $usuario = new Usuarios();

        if(isset($_POST['guardar'])) {
            $username= $_POST['username'];
            $password = $_POST['password'];
            $perfil = $_POST['perfil'];
            $usuario->setUsername($username);
            $usuario->setPassword($password);
            $usuario->setPerfil($perfil);
            
            //insert 

            if ($usuario->inserir()) {
                echo "inserido com sucesso";
            }
        }
     ?>

        <div class="direita">
        <div class="conteudos">
        <h1>Cadastrar novo usuario</h1>
        <form action="" method="POST">
            <div class="esq">
                <div class="dados">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="digite o usernamedo usuario">
                    </div>
                    <div class="dados">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="digite o password">
                    </div>
                   
            </div>
            <div class="dir">
                <div class="perfil-sexo">
                    <div class="dados">
                        <label for="perfil">Perfil</label>
                        <select name="perfil" id="perfil">
                            <option value="administrador">Administrador</option>
                            <option value="recepcionista">Recepcionista</option>
                        </select>
                    </div>
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