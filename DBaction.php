<?php 
		define('DB_SERVER', 'mysql-bahruz.alwaysdata.net');
		define('DB_USER', 'bahruz');
		define('DB_PASSWORD', 'baxa1999');
		define('DB_NAME', 'bahruz_weather');
		$img ="";$msg="";
		class action{
			public $conn = '';
			public function __construct() {
				$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
				if ($this->conn->connect_error) {
					// die("Connection failed: " . $this->conn->connect_error);
					die("Warning : Connection failed with system Database!");
				} 
			}
			
// Display error method
			public function error() {
				printf($this->conn->error);
			}
			
			//INSERT RECORD method goes here...
			public function insert($table, $data) {
				$key = array_keys($data);
				$val = array_values($data);
				$sql = "INSERT INTO $table (" . implode(', ', $key) . ") "
				. "VALUES ('" . implode("', '", $val) . "')"; 
				return $this->conn->query($sql);
				// print_r($sql);
			}
			
			//INSERT RECORD method goes here...
			public function insert_c($table, $data) {
				$key = array_keys($data);
				$val = array_values($data);
				$sql = "INSERT INTO $table (" . implode(', ', $key) . ") "
				. "VALUES ('" . implode("', '", $val) . "')"; 
				// return $this->conn->query($sql);
				print_r($sql);
			}		
			
			//READ ALL RECORD method goes here...
			public function read_all($table,$where) {
				$sql= "SELECT * FROM ". $table;
				if($where != null){
					foreach($where as $key=>$val) {
						$cols[] = "$key = '$val'";
					}
					if(count($where)>1){
						$sql.= " WHERE ". implode(' and ', $cols) ;
					}else{
						$sql.= " WHERE ". $key.'='.$val;
					}
				}
				return $this->conn->query($sql);
				// print_r($sql);
			}

			//READ specific columns method goes here...
			public function read_specific($col,$table,$where) {
				$sql= "SELECT ".$col." FROM ". $table;
				if($where != null){
					$sql .= ' WHERE '.$where;
				}
				return $this->conn->query($sql);
			}

			//READ specific columns method goes here...
			public function read_specific_c($col,$table,$where) {
				$sql= "SELECT ".$col." FROM ". $table;
				if($where != null){
					$sql .= ' WHERE '.$where;
				}
				print_r($sql);				
				// return $this->conn->query($sql);
			}

			//READ specigic columns method goes here...
			public function show_columns($table,$where) {
				$sql= "SHOW COLUMNS FROM ". $table;
				if($where != null){
					$sql .= ' WHERE '.$where;
				}
				return $this->conn->query($sql);
				// print_r($sql);
			}

			//READ SPECIFIC RECORD method goes here...
			public function select_id($table, $data) {
				$cols = array();
				foreach($data as $key=>$val) {
					$cols[] = "$key = '$val'";
				}
				if(count($data)>1){
					$sql= "SELECT * FROM ". $table ." WHERE " . implode(' and ', $cols) ;
				}else{
					$sql= "SELECT * FROM ". $table ." WHERE " . $key ."=" . $val;
				}
		        // print_r($sql);
				return $this->conn->query($sql);
			}

			//READ SPECIFIC RECORD method goes here...
			public function delete($table, $where) {
				$cols = array();
				foreach($where as $key=>$val) {
					$cols[] = "$key = '$val'";
				}
				if(count($where)>1){
					$sql= "DELETE FROM ". $table ." WHERE " . implode(' and ', $cols) ;
				}else{
					$sql= "DELETE FROM ". $table ." WHERE " . $key ."=" . $val;
				}
		        // print_r($sql);
				return $this->conn->query($sql);
			}

			//UPDATE RECORDS method goes here...
			public function update($table, $data, $parameters) {
				$cols = array();$cols2 = array();
				foreach($data as $key=>$val) {
					$cols[] = "$key = '$val'";
				}
				foreach($parameters as $key2=>$val2) {
					$cols2[] = "$key2 = '$val2'";
				}
				if(count($parameters)>1){
					$sql= "UPDATE $table SET " . implode(', ', $cols) ." WHERE " . implode(' and ', $cols2) ;
				}else{
					$sql= "UPDATE $table SET " . implode(', ', $cols) ." WHERE " . $key2.'='.$val2;
				}
				// print_r($sql);
				return $this->conn->query($sql);
			}

			//MAX id from table
			public function max_id($field,$table){
				$sql="SELECT COUNT(".$field.") AS max_id FROM ".$table;			
				return $this->conn->query($sql);
				// print_r($sql);
			}
			
			//Filter variables function
			function verifystring($val){
				return filter_var(trim(mysqli_real_escape_string($this->conn,$val)), FILTER_SANITIZE_STRING);  
			}
			function verifyemail($val){
				return filter_var(trim(mysqli_real_escape_string($this->conn,$val)), FILTER_VALIDATE_EMAIL);  
			}
			function verifyint($val){
				return filter_var(trim(mysqli_real_escape_string($this->conn,$val)), FILTER_VALIDATE_INT);  
			}
			function verifyfloat($val){
				return filter_var(trim(mysqli_real_escape_string($this->conn,$val)), FILTER_VALIDATE_FLOAT);  
			}


		}

		$obj = new action();
		$rains = array();
		$clouds = array();
		$sunShine = array();

		$rains_all = $obj->read_all('1_qualitativedata',NULL);
		while($row_rains = $rains_all->fetch_assoc()){
			array_push($rains, "<option value=".$row_rains['Temperature_id_'].">".$row_rains['Temperature']."</option>");
		}
		
		$_clouds = $obj->read_all('3_qualitativedata',NULL);
		while($row_clouds = $_clouds->fetch_assoc()){
			array_push($clouds, "<option value=".$row_clouds['Sky_id'].">".$row_clouds['Sky']."</option>");
		}
	
		$_sun = $obj->read_all('2_qualitativedata',NULL);
		while($row_sun = $_sun->fetch_assoc()){
			array_push($sunShine, "<option value=".$row_sun['Wind_id'].">".$row_sun['Wind']."</option>");
		}

		?>