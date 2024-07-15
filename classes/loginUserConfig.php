<?php 
// session_start();
require_once 'crud.php';
include ("loginUserEntrar.php");
class LoginProcess extends Crud{

	protected $table = 'usuarionormal';
	private $id;
	private $username;
	private $password;
	private $email;
	

	public function __construct($id=0,$username="",$password="",$email=""){
		$this->id = $id;
		$this->username = $username;
		$this->password = $password;
		$this->email = $email;

	}

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

	public function setEmail($email){
		$this->email = $email;
	}


		public function inserir(){
		$sql = "INSERT INTO $this->table (username, password, email) VALUES (:username, :password, :email)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':email', $this->email);
		return $stmt->execute();

		$login = new LoginConfig();
		$login->setEmail($_POST['email']);
		$login->setPassword($_POST['password']);

		$sucesso = $login->entrar();

	}

	public function atualizar($id){
		$sql = "UPDATE $this->table SET :username, :password, :email where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}

	public function totalUsuariosDisponiveis(){
		$sql = "SELECT COUNT(id) AS qtd_usuarios FROM usuarionormal";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetch();
	}


	public function checkUser($email){

		$sql = "SELECT * FROM $this->table where email = '$email'";
			$stmt = DB::prepare($sql);
			$stmt ->execute();
			if ($stmt->fetchColumn()) {
				return true;
			}else{
				return false;
			}
	}



}
