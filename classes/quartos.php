<?php 

require_once 'crud.php';

class Quartos extends Crud{


	protected $table = 'quarto'; //vem da base de dados
	private $nr_quarto;
	private $nr_camas;
	private $tipo_cama;
	private $status_quarto =0;


	public function setNr_quarto($nr_quarto){
		
		$this->nr_quarto = $nr_quarto;
	}

	public function getNr_quarto(){
		return $this->nr_quarto;
	}


	public function setNr_camas($nr_camas){
		
		$this->nr_camas = $nr_camas;
	}

	public function getNr_camas(){
		return $this->nr_camas;
	}

	public function setTipo_cama($tipo_cama){
		
		$this->tipo_cama = $tipo_cama;
	}

	public function getTipo_cama(){
		return $this->tipo_cama;
	}

	public function setStatus_quarto($status_quarto){
		
		$this->status_quarto = $status_quarto;
	}

	public function getStatus_quarto(){
		return $this->status_quarto;
	}


		public function inserir(){
		$sql = "INSERT INTO $this->table (nr_quarto, nr_camas, tipo_cama, status_quarto) VALUES (:nr_quarto, :nr_camas, :tipo_cama,:status_quarto)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nr_quarto', $this->nr_quarto);
		$stmt->bindParam(':nr_camas', $this->nr_camas);
		$stmt->bindParam(':tipo_cama', $this->tipo_cama);
		$stmt->bindParam(':status_quarto', $this->status_quarto);
		return $stmt->execute();
	}

	public function atualizar($id){
		$sql = "UPDATE $this->table SET :nr_quarto, :nr_camas, :tipo_cama, :status_quarto where id =:id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nr_quarto', $this->nr_quarto);
		$stmt->bindParam(':nr_camas', $this->nr_camas);
		$stmt->bindParam(':tipo_cama', $this->tipo_cama);
		$stmt->bindParam(':status_quarto', $this->status_quarto);
		$stmt->bindParam('id', $id);
		return $stmt->execute();
	}

	public function atualizarStatusQ($id){
		$sql = "UPDATE $this->table SET status_quarto = 0 WHERE id = '$id'";
		$stmt = DB::prepare($sql);
		return $stmt->execute();
	}
	

	public function quartosDisponivel(){
		$sql = "SELECT * FROM quarto WHERE status_quarto=0";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetchAll(); 
	}

	public function totalQuartosDisponiveis(){
		$sql = "SELECT COUNT(id) AS qtd_quartos FROM quarto";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetch();
	}

	public function totalQuartosReservados(){
		$sql = "SELECT COUNT(id) AS qtd_quartos FROM quarto WHERE status_quarto = 1";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetch();
	}

	public function qtdQuartosDisponiveis(){
		$sql = "SELECT COUNT(id) AS qtd_quartos FROM quarto WHERE status_quarto = 0";
		$stmt = DB::prepare($sql);
		$stmt -> execute();
		return $stmt->fetch();
	}


}

 ?>