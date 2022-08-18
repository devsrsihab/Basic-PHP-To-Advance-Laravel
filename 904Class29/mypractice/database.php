<!-- <?php 

// main class
class database{

    // database connection variables
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = 'root';
    private $db_name = 'testing';

    private $mysqli = "";
    private $conn   = false;
    private $result = array();

    // magice function for getting data
    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            $this->conn=true;
            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;

            }

        }else{
            return true;          
        }

    }

    // method for insert data into database
    public function insert($table,$perams=[]){
        if($this->tableExists($table)){
            echo "<pre>";
            print_r($perams);
            echo "</pre>";

            $table_columns        = implode(', ',array_keys($perams));
            $table_columns_values = implode("','" ,$perams);
            
           $sql = "INSERT INTO $table ($table_columns) VALUES('$table_columns_values') ";

           if($this->mysqli->query($sql)){
            array_push($this->result,$this->mysqli->insert_id);
            return true;
           }else{
            array_push($this->result,$this->mysqli->error);
            return false;
           }

        }else {
            return false;
        }
       

    }

    // method for update row into database
    public function update($table,$perams=[],$where=null){
        if($this->tableExists($table)){
            // echo "<pre>";
            // print_r($perams);
            // echo "</pre>";
            $args =[];
            foreach ($perams as $key => $value) {
                $args[]= "$key = '$value' ";
            }            
 
             $sql= "UPDATE $table SET " . implode(', ',$args);
           if ($where != null) {
            $sql .= " WHERE $where";
           
           } 
           if ($this->mysqli->query($sql)) {
            array_push($this->result,$this->mysqli->affected_rows);
            return true;
           } else {
            array_push($this->result,$this->mysqli->error);
           }
           
           
        }

    }

    // method for delet row from database
    public function delete($table, $where=null){
        if($this->tableExists($table)){
            $sql= " DELETE FROM $table  ";
            if($where != null){
                $sql .= " WHERE $where";

            }
            // exicute the query
            if ($this->mysqli->query($sql)) {
                array_push($this->result,$this->mysqli->affected_rows);
                return true;
               } else {
                array_push($this->result,$this->mysqli->error);
               }
        

        } else{
            return false;
        }

    }

    // method for select data from database
    public function select(){

    }
    public function sql(){

    }

    // database table name exist method 
    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows==1){
                return true;
            }else {
                array_push($this->result,$table." Table is Not Exist ");
                return false;
            }

        }

    }

    // get satatus method
    public function getResult(){
        $val = $this->result;
        $this->result =[];
        return $val;
    }

    // close connection
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn= false;
                return true;
            }

        }else{
            return false;
        }

    }
    
}//class close










?> -->