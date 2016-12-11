<?php

	include_once 'StepOperation.php';
	class StepRowMultiplication extends StepOperations {

		private $row;
		private $factor;

		public function __construct ($_row, $_factor ,$bf_matrix,$af_matrix, $_operation_type) {

			$this->row=$_row+1;
			$this->factor=$_factor;
			$this->setAfMatrix($af_matrix);
			$this->setBfMatrix($bf_matrix);
			$this->setType($_operation_type);
		}

		public function setRow($_row) {
			$this->row=$_row;
		}

		public function setFactor ($_factor) {
			$this->factor=$_factor;
		}

		public function getRow() {
			return $this->row;
		}

		public function getFactor() {
			return $this->factor;
		}
		
		public function toString() {
		
			$statement="R<span style='font-size:9pt;'>".$this->row."</span> = ( ".$this->factor." ) R<span style='font-size:9pt;'>".$this->row."</span>";
			return $statement;
				
		}


	}



?>
