<?php 
 session_start();
require_once 'crud.php';

class LoginConfig extends Crud{

	protected $table = 'usuarionormal';
	private $id;
	private $password;
	private $email;
	

	public function __construct($id=0,$password="",$email=""){
		$this->id = $id;
		$this->password = $password;
		$this->email = $email;

	}

	public function getId(){
		return $this->id;
	}
	

	public function setId($id){
		
		$this->id = $id;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($s){
		$this->password = $s;
	}

	public function setEmail($email){
		$this->email = $email;
	}


		public function inserir(){
		$sql = "INSERT INTO $this->table ( password, email) VALUES (:password, :email)";
		$stmt = DB::prepare($sql);

		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':email', $this->email);
		return $stmt->execute();
	}

	public function atualizar($id){
		$sql = "UPDATE $this->table SET :password, :email where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}

	public function entrar(){
			$sql = "SELECT * FROM $this->table where email = :email AND password = :password";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':password', $this->password);
			$stmt->bindParam(':email', $this->email);
			$stmt ->execute();
			 $user = $stmt->fetch();
			 
			 if ($user != null) {
				$_SESSION['logado'] = true;
			 	$_SESSION['id'] = $user->id;
			 	$_SESSION['password'] = $user->password;
			 	$_SESSION['email'] = $user->email;
			 	$_SESSION['username'] = $user->username;
			 	
			 		return true;	
			 }else{
			 	return false;
			 }

	}

}
