<?php
 // include 'telaAdm.php';
session_start();
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

        .dados > label{
            color:  #ccc;
            margin-bottom: 10px;
        }

        .dados > select{
            color:  #282828;
            margin-bottom: 10px;
        }

        .dados > input::placeholder{
           color: #ccc; 
        }
       
        .conteudos{
            margin-left:auto ;
            margin-right:auto ;
            border: 1px solid yellow;
            width: 1200px;
            background-color: #252525;
            padding: 40px;
           
        }
        .conteudos form{
            display: flex;
        }

        .conteudos h1{
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

        .dir .btn-guardar{
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

        .dados > select{
            height: 30px;
        }

        .dados- option{
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

        <div class="direita">
        <div class="conteudos">
            <div class="logo">
                <img src="img/logo.png">
                 <h1>Crie Uma Nova Conta <br>
                    <p style="color:#FDC500">e Desfrute Dos Nossos Servicos</p></h1>
            </div>
       
        <form action="classes/loginUserProcess.php" method="POST">
            <div class="esq">
                    <div class="dados">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="digite o usernamedo usuario">
                    </div>
                    <div class="dados">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="digite o password">
                    </div>
                    <div class="dados">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="digite o emaildo usuario">
                    </div>
                   
            </div>
            <div class="dir">
                <div class="perfil-sexo">
                  <!--   <div class="dados">
                        <label for="perfil">Perfil</label>
                        <select name="perfil" id="perfil">
                            <option value="administrador">Administrador</option>
                            <option value="recepcionista">Recepcionista</option>
                        </select>
                    </div> -->
                </div>
               <div class="botoes">
                    <button class="btn-voltar">Voltar</button>
                   <button class="btn-guardar" name="guardar">Criar Nova Conta</button>
               </div>

                <div class="conta">
                    <p>Ja tens uma conta?</p>
                    <a class="btn-login" href="form.php">Login</a>
                 </div>
            </div>
            
        </form>
    </div>       

    </div>
    </div>

    
<?php include 'footer.php' ?>