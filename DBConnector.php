<?php

const DB_SERVER = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'btc3205';

class DBConnector{
    public $conn;
    
/*function __construct allows you to initialize 
an object's properties upon creation of the object. 
PHP will automatically call this function when you create an object from a class*/
    function __construct (){
        $this->conn = mysqli_connect (DB_SERVER, DB_USER, DB_PASS) or die ("Error" .mysqli_error());
        mysqli_select_db($this->conn, DB_NAME);   //get the connection first, then select the db
    }
    
    public function closeDatabase (){
        mysqli_close ($this->conn); //research about db connection and closing
    }
}

//dbconnection

?>

