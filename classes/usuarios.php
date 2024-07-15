<?php 

require_once 'crud.php';

class Usuarios extends Crud{


	protected $table = 'usuario'; //vem da base de dados

	private $username;
	private $password;
	private $perfil;


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

	public function getPerfil(){
		return $this->perfil;
	}


		public function inserir(){
		$sql = "INSERT INTO $this->table (username, password, perfil) VALUES (:username, :password, :perfil)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute();
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
}

 ?>