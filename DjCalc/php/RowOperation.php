<?php

   class RowOperation {

        private $row;
        private $column;
        private $matrix;
		private $pivot;
        private $temp_matrix;

        public function __construct($size_row,$size_column) {

          $this->row = $size_row;
          $this->column = $size_column;
          $this->matrix = array(array());

          for($idx_row=0; $idx_row < $size_row; $idx_row ++ ) {
              for($idx_col=0; $idx_col < $size_column; $idx_col ++ ) {
                      $this->matrix[$idx_row][$idx_col]=0;
              }
          }
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
		}
		
		public function showBfMatrix() {
	
            echo '<table align="center" class="matrix">';
			for($i=0; $i<$this->row; $i++) {
				echo '<tr>';
				for($j=0; $j<$this->row; $j++) {
					echo '<td>'.$this->matrix[$i][$j].'</td>';
				}
			}
               
            echo '</tr>';
            echo '</table>';            
				
		}
		
		public function showAfMatrix() {
					
		
            echo ' <table align="center" class="matrix">';
			for($i=0; $i<$this->row; $i++) {
				echo '<tr>';
				for($j=0; $j<$this->row; $j++) {
					echo '<td>'.$this->matrix[$i][$j].'</td>';
				}
			}
               
            echo '</tr>';
            echo '</table>'; 

		}
	
		private function setPivot($pivot) {
           $this->pivot = $pivot;
		}
		
		private function getPivot() {
           return $this->pivot ;
		}
		
		//public function 
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

		
       
  }

?>
