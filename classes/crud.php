<?php 

	require_once 'DB.php';

	abstract class Crud extends DB{

		protected $table;
		abstract public function inserir();
		abstract public function atualizar($id);

		public function select($id){
			$sql = "SELECT * FROM $this->table where id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function selectAll(){
			$sql = "SELECT * FROM $this->table";
			$stmt = DB::prepare($sql);
			$stmt -> execute();
			 return $stmt->fetchAll();
		}

		public function apagar($id){
			$sql = "DELETE FROM $this->table where id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->execute();
		}
	}
 ?>