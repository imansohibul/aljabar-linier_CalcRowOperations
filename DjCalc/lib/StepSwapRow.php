<?php

	include_once 'StepOperation.php';
	class StepSwapRow extends StepOperations  {

		private $row_1;
		private $row_2;

		public function __construct ($row1, $row2,$bf_matrix,$af_matrix, $_operation_type) {
			$this->row_1=$row1;
			$this->row_2=$row2;
			$this->setAfMatrix($af_matrix);
			$this->setBfMatrix($bf_matrix);
			$this->setType($_operation_type);
		}

		public function setRow1 ($row) {
			$this->row_1=$row;
		}

		public function setRow2 ($row) {
			$this->row_2=$row;
		}

		public function getRow1() {
			return $this->row_1;
		}

		public function getRow2() {
			return $this->row_2;
		}
		
		public function toString() {
			$statement = "R<span style='font-size:9pt;'>".$this->row_1."</span> <---> "."R<span style='font-size:8pt;'>".$this->row_2."</span>";
			return $statement;
			
		}


	}

?>
