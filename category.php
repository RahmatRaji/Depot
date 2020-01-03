<?php

  class Database{
  	private $host;
  	private $username;
  	private $password;
  	private $dbName;

 // class obtains the categories from the database
    // establishes a connection
  	function connect(){
  		$this -> host= "localhost";
  		$this -> username ="root";
  		$this -> password = "";
  		$this -> dbName ="shoppn";


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
       //obtains categories from the database
	    function category(){
		$conns = new mysqli($this->host, $this->username, $this->password, $this->dbName);
		$sqls = mysqli_query($conns, "SELECT cat_id,cat_name FROM categories");
		while ($rows = $sqls->fetch_assoc()){
		echo "<option value= ".$rows['cat_id'].">" . $rows['cat_name'] . "</option>";
		
		}
            
    }

}
$obj = new Database;
$obj ->connect();
$obj ->category();

?>

