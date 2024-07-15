<?php 

require_once 'crud.php';

class Contactos extends Crud{


	protected $table = 'contacto'; //vem da base de dados

	private $nome;
	private $email;
	private $numero;
    private $mensagem;


	public function getNome(){
		return $this->nome;
	}

	public function setNome($u){
		
		$this->nome = $u;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($s){
		$this->email = $s;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getNumero(){
		return $this->numero;
	}

    public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}

	public function getmensagem(){
		return $this->mensagem;
	}


		public function inserir(){
		$sql = "INSERT INTO $this->table (nome, email, numero, mensagem) VALUES (:nome, :email, :numero, :mensagem)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':mensagem', $this->mensagem);
		return $stmt->execute();
	}

	


	public function atualizar($id){
		$sql = "UPDATE $this->table SET :nome, :email, :numero, :mensagem where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':mensagem', $this->mensagem);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}
}

 ?>