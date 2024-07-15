<?php 

    session_start();
function __autoload($class_name){
    require_once 'classes/'. $class_name. '.php';
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body{
            margin: 0;
            padding: 0;
        }

        .main-login{
            width: 100vw;
            height: 100vh;
            background-color: #282828;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lef-login{
           width: 50vw;
           height: 100vh; 
           display: flex;
           justify-content: center;
           align-items: center;
           flex-direction: column
        }

        .lef-login img{
            width: 35vw;
        }

        .lef-login > h1{
            color: #FDC500;
        }

        .right-login{
           width: 50vw;
           height: 100vh; 
           display: flex;
           justify-content: center;
           align-items: center; 
        }

        .card-login{
            width: 60%;
            display: flex;
           justify-content: center;
           align-items: center; 
           flex-direction: column;
           padding: 30px 35px;
           background-color: #262626;
           border-radius: 20px;
           box-shadow: 0px 10px 40px #00000056;
        }

        .card-login > h1{
            color:#FDC500; 
            font-weight: 800;
            margin: 0;
        }

        .textfield{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0;
        }

        .textfield > input{
            width: 100%;
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

        .textfield > label{
            color:  #FDC500;
            margin-bottom: 10px;
        }

        .textfield > input::placeholder{
           color: #FDC500; 
        }

        .btn-login{
            width: 100%;
            padding: 16px 0px;
            margin: 25px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
            color: #2b134b;
            background-color: #FDC500;
            cursor: pointer;
            box-shadow: 0px 10px 40px -12px #00000056;
        }

        .conta{
            display: flex;
            margin-right: 30px;
        }

        .conta .btn-login{
            color: #FDC500;
            border: 1px solid #FDC500;
            padding: 4px 2px;
            align-items: center;
            text-align: center;
            text-decoration: none;
            padding: 4px;
            background-color: #252525;
        }

        .conta > p{
            font-weight: bold;
            color: #ccc;
        }
    </style>
</head>
<body>

<form action="classes/loginUserEntrar.php" method="POST">
       <div class="main-login">
        <div class="lef-login">
            <h1>faca o login <br> entre para o nosso site</h1>
            <img src="hotel-booking-animate.svg" alt="alojamento">
        </div>
        <div class="right-login">
           <div class="card-login">
                <h1>Login</h1>
              <div class="textfield">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="email">
              </div>
              
                <div class="textfield">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" placeholder="password">
                </div>
                <input type="submit" name="login" class="btn-login" value="Login">
                <div class="conta">
                    <p>Nao uma conta? crie uma!</p>
                    <a class="btn-login" href="usuarioNormal.php">Criar</a>
                 </div>
            </div>
            
        </div>   
   </div>
</form>
</body>
</html>