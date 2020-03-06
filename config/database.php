<?php 
	class Database {

		private $conn;
		private $result;

		public function Connect() {
			$this->conn = mysqli_connect( 'localhost', 'root' , '' , 'thao_phongkham' );

			if(!$this->conn) {
				echo 'Không thể kết nối Database';
			} else {
				mysqli_set_charset( $this->conn, 'utf8' );
				date_default_timezone_set('Asia/Ho_Chi_Minh');
			}
			return $this->conn;
		}
		public function Query($sql)
		{
			if(!$this->result = mysqli_query($this->conn,$sql))
			{
				echo "error query";
			}
			return $this->result; 
		}
		
		public function getRow($sql)
		{
			
		}

		public function NumRow()
		{
			return mysqli_num_rows($this->result);
		}

	}
?>