<?php 

require_once 'crud.php';

class Reservas extends Crud{


	protected $table = 'reserva'; //vem da base de dados
	private $data_entrada;
	private $data_saida;
	private $status = 0;
	private $id_cliente;
	private $id_quarto;
	private $preco;


	public function setData_entrada($data_entrada){
		
		$this->data_entrada = $data_entrada;
	}

	public function getData_entrada(){
		return $this->data_entrada;
	}


	public function setData_saida($data_saida){
		
		$this->data_saida = $data_saida;
	}

	public function getData_saida(){
		return $this->data_saida;
	}

	public function setStatus($status){
		
		$this->status = $status;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setId_cliente($id_cliente){
		
		$this->id_cliente = $id_cliente;
	}

	public function getId_cliente(){
		return $this->id_cliente;
	}

	public function setId_quarto($id_quarto){
		
		$this->id_quarto = $id_quarto;
	}

	public function getId_quarto(){
		return $this->id_quarto;
	}

	
	public function setPreco($preco){
		
		$this->preco = $preco;
	}

	public function getPreco(){
		return $this->preco;
	}

		public function inserir(){
		$sql = "INSERT INTO $this->table (data_entrada, data_saida, status, id_cliente, id_quarto, preco) VALUES (:data_entrada, :data_saida, :status,:id_cliente, :id_quarto, :preco)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data_entrada', $this->data_entrada);
		$stmt->bindParam(':data_saida', $this->data_saida);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':id_cliente', $this->id_cliente);
		$stmt->bindParam(':id_quarto', $this->id_quarto);
		$stmt->bindParam(':preco', $this->preco);
		return $stmt->execute();
	}

	public function atualizar($id){
		$sql = "UPDATE $this->table SET :data_entrada, :data_saida, :status, :id_cliente, :id_quarto, :preco where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':data_entrada', $this->data_entrada);
		$stmt->bindParam(':data_saida', $this->data_saida);
		$stmt->bindParam(':status', $this->status);
		$stmt->bindParam(':id_cliente', $this->id_cliente);
		$stmt->bindParam(':id_quarto', $this->id_quarto);
		$stmt->bindParam(':preco', $this->preco);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}


	public function atualizarStatus($id){
		$sql = "UPDATE $this->table SET status=0 where id ='$id'";
		$stmt = DB::prepare($sql);
		return $stmt->execute();
	}

	

	public function ultimoId(){
		$sql = "SELECT id FROM $this->table ORDER BY id DESC LIMIT 1";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetch();
	}

	public function dadosReserva($id){
		$sql  = "SELECT * FROM usuarionormal INNER JOIN reserva ON usuarionormal.id = reserva.id_cliente INNER JOIN quarto ON reserva.id_quarto = quarto.id WHERE usuarionormal.id ='$id'";
		$stmt = DB::prepare($sql);
		// $stmt->bindParam('id', $id);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function totalReservas(){
		$sql = "SELECT COUNT(id) AS qtd_reservas FROM reserva";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetch();
	}

}

 ?>