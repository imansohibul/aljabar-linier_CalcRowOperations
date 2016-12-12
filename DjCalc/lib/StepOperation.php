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
		
		
		private function decimalToFraction($decimal) {
			
					if ($decimal < 0 || !is_numeric($decimal)) {
						// Negative digits need to be passed in as positive numbers
						// and prefixed as negative once the response is imploded.
						return false;
					}
					
					if ($decimal == 0) {
						return [0,0];
					}
				
					$tolerance = 1.e-4;
				
					$numerator = 1;
					$h2 = 0;
					$denominator = 0;
					$k2 = 1;
					$b = 1 / $decimal;
					do {
						$b = 1 / $b;
						$a = floor($b);
						$aux = $numerator;
						$numerator = $a * $numerator + $h2;
						$h2 = $aux;
						$aux = $denominator;
						$denominator = $a * $denominator + $k2;
						$k2 = $aux;
						$b = $b - $a;
					} while (abs($decimal - $numerator / $denominator) > $decimal * $tolerance);
	
					return [$numerator,$denominator];
				}

		
		
		
		
	}

?>
