<?php 
require_once ("app/controller/DBController.php");
class it
{
    public $db_handle;
    
    function __construct() {
        $this->db_handle = new DBController();
    }
    
    public function addIT($name, $quantity, $issue, $date) {
        $query = "INSERT INTO it_list (name,quantity,issue,date) VALUES (?, ?, ?, ?)";
        $paramType = "siss";
        $paramValue = array(
            $name,
            $quantity,
            $issue,
            $date
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId; 
    }
    
    public function editIT($name, $quantity, $issue, $date, $id) {
        $query = "UPDATE it_list SET name = ?,quantity = ?,issue = ?,date = ? WHERE id = ?";
        $paramType = "sissi";
        $paramValue = array(
            $name,
            $quantity,
            $issue,
            $date,
            $id
            
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    public function deleteIT($id) {
        $query = "DELETE FROM it_list WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    public function getITById($id) {
        $query = "SELECT * FROM it_list WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
    
    public function getAllIT() {
        $sql = "SELECT * FROM it_list ORDER BY id";
       $result = $this->db_handle->runQueryAll($sql);
        return $result;
    }
}
?>