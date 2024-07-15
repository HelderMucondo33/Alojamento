<?php 

require_once 'crud.php';

class Funcionarios extends Crud{


	protected $table = 'funcionario'; //vem da base de dados
	private $nome;
	private $apelido;
	private $telefone;
	private $email;
	private $numeroBI;
	private $sexo;
	private $username;
	private $senha;
	private $perfil;
	private $morada;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setApelido($apelido){
		$this->apelido = $apelido;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setNumeroBI($numeroBI){
		$this->numeroBI = $numeroBI;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}

	public function setMorada($morada){
		$this->morada = $morada;
	}

	public function inserir(){
		$sql = "INSERT INTO $this->table (nome, apelido, telefone, email, numeroBI, sexo, username, senha, perfil, morada  ) VALUES (:nome, :apelido, :telefone, :email, :numeroBI, :sexo, :username, :senha, :perfil, :morada)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':apelido', $this->apelido);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':numeroBI', $this->numeroBI);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':morada', $this->morada);
		return $stmt->execute();
	}

	public function atualizar($id){
		$sql = "UPDATE $this->table SET nome = :nome, apelido = :apelido, telefone = :telefone, email = :email, numeroBI = :numeroBI, sexo =  :sexo, username = :username, senha = :senha, perfil = :perfil, morada = :morada where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':apelido', $this->apelido);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':numeroBI', $this->numeroBI);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':morada', $this->morada);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}
}

 ?>