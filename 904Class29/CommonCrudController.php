<?php

class CommonCrudController {

    private $mysqli = '';
    private $result = [];
    private $conn = false;

    public function __construct()
    {
        if (!$this->conn) {
			$this->mysqli = new mysqli('localhost', 'root', '', 'portfolio_db');

			if ($this->mysqli->connect_error) {
				return false;
			} else {
				return true;
			}
		} else {
			return true;
		}
    }
    
    // READ
    public function select($table_name, $selectedField = '*', $whereClause = null)
    {
		if ($whereClause != null) {
			$sql = "SELECT $selectedField FROM $table_name WHERE $whereClause";
		} else {
			$sql = "SELECT $selectedField FROM $table_name";
		}
		// echo $sql;
		// die();

		if ($this->mysqli->query($sql)) {
			$selectResult = $this->mysqli->query($sql);

			$all_result = [];
			foreach ($selectResult as $key => $value) {
				$all_result[] = $value;
			}

			array_push($this->result, $all_result);
			return true;
		} else {
			array_push($this->result, $this->mysqli->error);
			return false;
		}
    }

    // CREATE
    public function create($table_name, $param = array())
    {
		$table_column = implode(', ', array_keys($param));
		$field_valuses = implode("', '", $param);

		$sql = "INSERT INTO $table_name ($table_column) VALUES ('$field_valuses')";

		if ($this->mysqli->query($sql)) {
			array_push($this->result, 'insert successfull');
			return true;
		} else {
			array_push($this->result, $this->mysqli->error);
			return false;
		}
    }

    // UPDATE
    public function update($table_name, $param = array(), $whereClause)
    {
		$fieldValues = [];
		foreach ($param as $key => $value) {
			$fieldValues[] = "$key = '$value'";
		}

		$field_valuses = implode(", ", $fieldValues);
        $sql = "UPDATE $table_name SET $field_valuses WHERE $whereClause";

		if ($this->mysqli->query($sql)) {
			array_push($this->result, 'update successfull');
			return true;
		} else {
			array_push($this->result, $this->mysqli->error);
			return false;
		}
    }

    // DELETE
    public function delete($table_name, $pk_id)
    {
        $sql = "DELETE FROM $table_name WHERE id=$pk_id";

		if ($this->mysqli->query($sql)) {
			array_push($this->result, 'Delete successfull');
			return true;
		} else {
			array_push($this->result, $this->mysqli->error);
			return false;
		}
    }

	public function resultDisplay()
	{
		$val = $this->result;
		$this->result = array();
		return $val;
	}

    public function __destruct()
    {
        if ($this->conn) { //True = has conncection
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else { //False = has no conncection
            return false;
        }
    }
} 