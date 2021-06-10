<?php
			try
			{
				$db = new PDO('mysql:host=localhost;dbname=vigenere','root','');
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
			$manager = new Manager($db);
	 class Manager{
		private $db;
		public function __construct($db){
			$this->db = $db;
		}
		public function insertion($table,array $data){
			$q = "INSERT INTO $table(";
			foreach($data as $key => $val){
				$q .= $key.",";
			}
			$q = substr($q,0,-1);
			$q .=") VALUES(";
			foreach($data as $key => $val){
					if(is_int($val)or gettype($val)== 'object'){
						$q .= $val.",";
					}else{
						$q .= "'".$val."',";
					}
			}
			$q =substr($q,0,-1);
			$q .=")";

			$this->db->query($q);
			return $q;
		}
		public function selectionUnique2($table,array $champs,$contrainte){
			$q = "SELECT " ;
			foreach($champs as $val){
				$q .= "$val".",";
			}
			$q = substr($q,0,-1);
			$q .= " FROM $table";
			$q .= " WHERE $contrainte";
			$v = $this->db->query($q);
			$r = array();
			while($donneee = $v->fetch(PDO::FETCH_OBJ)){
				$r[] = $donneee ;
			}
			return $r ;
		}
		public function modifier($table,array $champs,$contrainte){
			$q = "UPDATE $table SET ";
			$r = array();
			foreach($champs as $key=>$val){
				if($key == 'Filiere_id' or $key == 'Cohorte_Id' or $key == 'Service_Id' or $key == 'TypeApprenant_Id'){
					$q .= " $key = $val," ;
				}else{
					$q .= " $key = '$val'," ;
				}
				
			}
			$q = substr($q,0,-1);
			$q .= " WHERE $contrainte";
			$v = $this->db->query($q);
			return $q;
		}
		public function dernierIdInserer(){
			$id = $this->db->lastInsertId();
			return $id;
		}
		
	}
?>