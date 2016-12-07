<? php

  public class RowOperation {

        private $row;
        private $column;
        private $matrix;
        private $temp_matrix;

        public function __construct($size_row,$size_column) {

          $this->row = $size_row;
          $this->column = $size_column;
          $this->matrix = array(array());

          for($idx_row=0; $idx_row < $size_row; $idx_row ++ ) {
              for($idx_col=0; $idx_col < $size_column; $idx_col ++ ) {
                      $this->matrix[$idx_row][$idx_col]=-1;
              }
          }
        }

        public function getElement($row, $column) {
          return $this->matrix[$row][$column];
        }

        public function sizeRow($row, $column) {
          return $this->row;
        }

        public function sizeColumn($row, $column) {
          return $this->row;
        }

  }

?>
