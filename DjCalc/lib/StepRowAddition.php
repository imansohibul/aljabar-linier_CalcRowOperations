<?php
	include_once 'StepOperation.php';
	class StepRowAddition extends StepOperations {

		private $assign;
		private $atom_1;
		private $atom_2;
		private $factor;

		public function __construct ($_assign, $_atom_1 ,$_atom_2,$_factor,$bf_matrix,$af_matrix, $_operation_type) {

			$this->assign = $_assign+1;
			$this->atom_1=$_atom_1+1;
			$this->atom_2=$_atom_2+1;
			$this->factor=$_factor;
			$this->setAfMatrix($af_matrix);
			$this->setBfMatrix($bf_matrix);
			$this->setType($_operation_type);
		}

		public function setAtom1($_atom) {
			$this->atom_1=$_atom;
		}

		public function setAtom2($_atom) {
			$this->atom_2=$_atom;
		}

		public function setFactor ($_factor) {
			$this->factor=$_factor;
		}

		public function setAssign ($_assign) {
			$this->assign=$_assign;
		}

		
		public function getAssign() {
			return $this->assign;	
		}

		public function geAtom1() {
			return $this->atom_1;
		}

		public function geAtom2() {
			return $this->atom_2;
		}

		public function getFactor() {
			return $this->factor;
		}
		
		public function toString(){
			
				 $assign = "R<span style='font-size:9pt;'>".$this->assign."</span>";
				 $atom1 = "R<span style='font-size:9pt;'>".$this->atom_1."</span>";
				 $atom2= "R<span style='font-size:9pt;'>".$this->atom_2."</span>";
				 $statement= $assign." = ".$atom1." - ( ".$this->factor." ) ".$atom2;
				 return $statement; 
		}


	}



?>
