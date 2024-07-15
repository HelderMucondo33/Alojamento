<?php 
// session_start();
require_once 'crud.php';

class Login extends Crud{

	protected $table = 'usuario';
	private $id;
	private $username;
	private $password;
	private $perfil;
	


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		
		$this->id = $id;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($u){
		
		$this->username = $u;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($s){
		$this->password = $s;
	}

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}


		public function inserir(){
		$sql = "INSERT INTO $this->table (username, password, perfil) VALUES (:username, :password, :perfil)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute();

		
		$login = new Login();
		$login->setEmail($_POST['username']);
		$login->setPassword($_POST['password']);

		$sucesso = $login->entrarAdmin();
	}

	public function atualizar($id){
		$sql = "UPDATE $this->table SET :username, :password, :perfil where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}

	public function entrarAdm(){
			$sql = "SELECT * FROM $this->table where id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt ->execute();
			 $user = $stmt->fetch();

			 if ($user != null) {
				$_SESSION['logado'] = true;
			 	$_SESSION['id'] = $user->id;
			 	$_SESSION['username'] = $user->username;
			 	$_SESSION['password'] = $user->password;
			 	$_SESSION['perfil'] = $user->perfil;
			 	
			 		return true;	
			 }else{
			 	return false;
			 }

	}

}
