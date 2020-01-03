<?php
  class Database1{
  	private $host;
  	private $username;
  	private $password;
  	private $dbName;

 // the class obtains the brand from the database
    
  	function connect(){
  		$this -> host= "localhost";
  		$this -> username ="root";
  		$this -> password = "";
  		$this -> dbName ="shoppn";

//connection to the database
  		$conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);	
			if (!$conn) {
				$this->status_fatal = true;
				echo 'Connection BDD failed';
				die();
			} 
			else {
				$this->status_fatal = false;
				echo "Connection to the database is successful<br>";
			}

	}
    //obtains brand from the database
	function brand(){
		$conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
		$sql = mysqli_query($conn, "SELECT brand_id,brand_name FROM brands");
		while ($row = $sql->fetch_assoc()){
		 echo "<option value= ".$row['brand_id'].">" . $row['brand_name'] . "</option>";
		}      
    }

}
$obj = new Database1;
$obj ->connect();
$obj ->brand();

?>

