<?php

  include_once'StepSwapRow.php';
	include_once'StepRowMultiplication.php';
	include_once'StepRowAddition.php';

   class RowOperation {

    private $row;
    private $column;
    private $matrix;
		private $pivot;
		private $step= array();


    public function __construct($size_row,$size_column,$_pivot) {

		  $this->pivot=0;
          $this->row = $size_row;
          $this->column = $size_column;
          $this->matrix = array(array());

          for($idx_row=0; $idx_row < $size_row; $idx_row ++ ) {
              for($idx_col=0; $idx_col < $size_column; $idx_col ++ ) {
                      $this->matrix[$idx_row][$idx_col]=0;
              }
          }
      }

		public function initMatrix() {

				 $this->pivot=0;
         		 $this->row = 3;
         		 $this->column = 4;
        		 $this->matrix = array(array());
				 $this->matrix[0][0]=1;
				 $this->matrix[0][1]=2;
				 $this->matrix[0][2]=3;
				 $this->matrix[0][3]=1;

				 $this->matrix[1][0]=2;
				 $this->matrix[1][1]=5;
				 $this->matrix[1][2]=3;
				 $this->matrix[1][3]=6;

				 $this->matrix[2][0]=1;
				 $this->matrix[2][1]=0;
				 $this->matrix[2][2]=8;
				 $this->matrix[2][3]=-6;
		}


		public function swapVar(&$var_1, &$var_2) {
			$temp = $var_1;
			$var_1 = $var_2;
			$var_2 = $temp;
		}

		public function swapRow($row_1, $row_2) {
			for($i=0; $i< $this->column; $i++) {
				$this->swapVar($this->matrix[$row_1][$i], $this->matrix[$row_2][$i]);
			}
		}

		public function hasPivot() {
			
			if(isset($this->matrix[$this->pivot][$this->pivot])) {
					
					if($this->matrix[$this->pivot][$this->pivot] == 0) {
					for($i=$this->pivot+1; $i < $this->row; $i++) {
						if($this->matrix[$i][$this->pivot] != 0) {
								return true;
						}
					}

					return false;
				} else {
					return true;
				}
			} else {
				return false;
			}
				
		}

		public function choosePivot() {

			$found=false;
			$temp_matrix;

			if($this->matrix[$this->pivot][$this->pivot] == 0) {

					for($i=$this->pivot+1; $i < $this->row; $i++) {
						if($this->matrix[$i][$this->pivot] != 0) {
							$found= true;
							break;
						}
					}

					if($found) {
						$temp_matrix= $this->matrix;
						$this->swapRow($this->pivot,$i);
						$this->step[]= new StepSwapRow($this->pivot,$i,$temp_matrix,$this->matrix,1);
					}
				}
		}

		private function normalizeRow() {

			$factor=1/$this->matrix[$this->pivot][$this->pivot];
			if($this->matrix[$this->pivot][$this->pivot] != 1 && $this->matrix[$this->pivot][$this->pivot] != 0) {
				$temp_matrix= $this->matrix;
				$this->multiplyRow($this->pivot,$factor);
				$this->step[]= new StepRowMultiplication($this->pivot,$factor,$temp_matrix,$this->matrix,2);
			}
		}

		private function makeZero() {

			for($i=0; $i < $this->row; $i++) {

					if($i != $this->pivot) {
						$factor = $this->matrix[$i][$this->pivot];
						if($this->matrix[$i][$this->pivot] != 0) {

							$temp_matrix= $this->matrix;
							for($j=0; $j < $this->column; $j++) {
								$this->matrix[$i][$j]= $this->matrix[$i][$j]-($factor * $this->matrix[$this->pivot][$j]);
							}

							$this->step[]= new StepRowAddition($i,$i,$this->pivot,$factor,$temp_matrix,$this->matrix,3);
						}
					}
			}

		}

		public function startGaussJordan() {

				$this->setPivot(0);
				while($this->hasPivot()) {
					$this->choosePivot();
					$this->normalizeRow();
					$this->makeZero();
					$this->incPivot();
				}
		}


		private function multiplyRow ($row, $factor) {

			for($i=0; $i < $this->column; $i++) {
				$this->matrix[$row][$i]=$this->matrix[$row][$i]*$factor;
			}
		}


		private function setPivot($pivot) {
           $this->pivot = $pivot;
		}

		private function getPivot() {
           return $this->pivot ;
		}

		private function incPivot () {
			$this->pivot++;
		}

		public function setRow($size_row) {
           $this->row = $size_row;
		}

		public function setColumn($size_column) {
           $this->row = $size_column;
		}

		 public function sizeRow() {
          return $this->row;
        }

        public function sizeColumn() {
          return $this->column;
        }


        public function getElement($row, $column) {
          return $this->matrix[$row][$column];
        }

		 public function getMatrix() {
          return $this->matrix;
        }

		public function getStepOperation() {
			return $this->step;
		}
		
		public function showMatrix() {

            echo '<table align="center" class="matrix">';
			for($i=0; $i < $this->row; $i++) {
				echo '<tr>';
				for($j=0; $j<$this->column; $j++) {
					echo '<td>'.$this->matrix[$i][$j].'</td>';
				}
				echo '</tr>';
			}

            echo '</table>';

		}
		
		public function printMatrix($_mat) {

            echo '<table align="center" class="matrix">';
			for($i=0, $row= count($_mat); $i < $row; $i++) {
				echo '<tr>';
				for($j=0, $column= count($_mat[$i]); $j < $column; $j++) {
					echo '<td>'.$_mat[$i][$j].'</td>';
				}
				echo '</tr>';
			}

            echo '</table>';

		}



  }

?>
