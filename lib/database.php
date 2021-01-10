<?php
	
class Database{

	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbname = DB_NAME;

	public $link;
	public $error;

	public function Database(){
		$this->connectDB();
	}

	public function connectDB()
	{
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if(!$this->link){
			$this->error = "Connection failed".$this->link->connect_error;
			return false;
		}
	}

	public function select($query)
	{
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		}
		return false;
	}

	public function insert($query)
	{
		$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
		if($insert_row){
			return $insert_row;
		}
		return false;
	}

	public function update($query)
	{
		$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
		if($update_row){
			return $update_row;
		}
		return false;
	}

	public function delete($query)
	{
		$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
		if($delete_row){
			return $delete_row;
		}
		return false;
	}

	public function procedure($query)
	{
		$stmt = $this->link->query($query) or die($this->link->error.__LINE__);
		if($stmt){
			return $stmt;
		}
		return false;
	}
	
	public function backupData(){
		$return='';
		$allTables = array();
		$listBillIDCheckedout = array();

		$return.="SET FOREIGN_KEY_CHECKS=0;\n\n";

		$result = $this->link->query('SHOW TABLES');
		while($row = mysqli_fetch_array($result)){
			$allTables[] = $row[0];
		}
		
		foreach($allTables as $table){
			$result = $this->link->query('SELECT * FROM '.$table);
			$num_fields = mysqli_num_fields($result);
			
			$return.= 'DELETE FROM '.$table.";\n\n";
			$row2 = mysqli_fetch_array($this->link->query('SHOW CREATE TABLE '.$table));
			// $return.= "\n\n".$row2[1].";\n\n";
			
			for ($i = 0; $i < $num_fields; $i++) {
				while($row = mysqli_fetch_array($result)){
					$return.= 'INSERT INTO '.$table.' VALUES(';
					for($j=0; $j<$num_fields; $j++){
						$row[$j] = addslashes($row[$j]);
						$row[$j] = str_replace("\n","\\n",$row[$j]);
						if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; }
						else { $return.= '""'; }
						if ($j<($num_fields-1)) { $return.= ','; }

						if($row[$j] == 'Đã thanh toán'){
							array_push($listBillIDCheckedout, $row[0]);
						}
					}
					$return.= ");\n";
				}
			}
			$return.="\n\n";
		}

		foreach($listBillIDCheckedout as $billID){
			$return.="UPDATE Bill SET status = 'Đã thanh toán' WHERE id = " . $billID . ";\n";
		}

		$return.="\n\nSET FOREIGN_KEY_CHECKS=1;\n\n";
		
		// Create backup folder
		$folder = 'backup/';
		if (!is_dir($folder))
		mkdir($folder, 0777, true);
		chmod($folder, 0777);	
		// Create filename
		date_default_timezone_set('Asia/Bangkok');	// change timezone
		$date = date('d-m-Y-H-i-s', time());
		$filename = $folder."ql-quancafe-keycodemon-".$date.'.sql';
		// Create sql file
		$handle = fopen($filename,'w+');
		fwrite($handle,($return));
		fclose($handle);
		return $filename;
	}

	public function restoreData($fileName){
		// Temporary variable, used to store current query
		$templine = '';
    
		// Read in entire file
		$lines = file($fileName);
		
		$error = '';
		
		// Loop through each line
		foreach ($lines as $line){
			
			// Skip it if it's a comment
			if(substr($line, 0, 2) == '--' || $line == ''){
				continue;
			}
			
			// Add this line to the current segment
			$templine .= $line;
			
			// If it has a semicolon at the end, it's the end of the query
			if (substr(trim($line), -1, 1) == ';'){
				// Perform the query
				if(!$this->link->query($templine)){
					$error .= 'Error performing query "<b>' . $templine . '</b>": ' . $this->link->error . '<br /><br />';
				}
				
				// Reset temp variable to empty
				$templine = '';
			}
		}
		return !empty($error)?$error:true;
	}

}
?>