<?php 
	
if (isset($_POST['guardar'])) {
	 require_once 'loginUserConfig.php';

	$loginP = new LoginProcess();
	$loginP->setUsername($_POST['username']);
	$loginP->setPassword($_POST['password']);
	$loginP->setEmail($_POST['email']);




}

if($loginP->checkUser($_POST['email'])){

	echo "<script>alert('usuario ja existe por favor faca o login');document.location='../form.php'</script>";
}else{
	$loginP->inserir();

	echo "<script>alert('usuario criado com sucesso');document.location='../form.php'</script>";
}

	
