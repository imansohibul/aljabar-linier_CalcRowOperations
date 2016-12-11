<?php

	class StepOperations {

		private $operation_type;
		private $before_matrix;
		private $after_matrix;


		public function __construct ($bf_matrix,$af_matrix, $_operation_type) {
			$this->operation_type=$_operation_type;
			$this->after_matrix=$af_matrix;
			$this->before_matrix=$bf_matrix;
		}

		public function setAfMatrix($mat) {
			$this->after_matrix=$mat;
		}

		public function setBfMatrix($mat) {
			$this->before_matrix=$mat;
		}

		public function setType ($type) {
			$this->operation_type = $type;
		}

		public function getType () {
			return $this->operation_type;
		}

		public function getBfMatrix() {
			return $this->before_matrix;
		}

		public function getAfMatrix() {
			return $this->after_matrix;
		}

		public function showBfMatrix() {

            echo '<table align="center" class="matrix">';
			for($i=0, $row= count($this->before_matrix); $i < $row; $i++) {
				echo '<tr>';
				for($j=0, $column= count($this->before_matrix[$i]); $j < $column; $j++) {
					echo '<td>'.$this->before_matrix[$i][$j].'</td>';
				}
				echo '</tr>';
			}

            echo '</table>';

		}

		public function showAfMatrix() {

            echo '<table align="center" class="matrix">';
			for($i=0, $row= count($this->after_matrix); $i < $row; $i++) {
				echo '<tr>';
				for($j=0, $column= count($this->after_matrix[$i]); $j<$column; $j++) {
					echo '<td>'.$this->after_matrix[$i][$j].'</td>';
				}
				echo '</tr>';
			}

            echo '</table>';

		}
	}

?>
