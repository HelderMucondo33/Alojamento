<?php 


if (isset($_POST['login'])) {
	
	require_once 'loginUserConfig2.php';

	$info = new LoginConfig();

	$info->setEmail($_POST['email']);
	$info->setPassword($_POST['password']);

	$entrar = $info->entrar();

	if ($entrar) {
		header("Location:../home.php");
	}else{
		echo "<script>alert('email ou password invalido');document.location='../form.php'</script>";
	}
}


 ?>