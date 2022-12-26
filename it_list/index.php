<?php
require_once ("app/controller/DBController.php");
require_once ("app/model/IT.php");


$db_handle = new DBController();

$action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
    
    
    
    case "it_list-add":
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $issue = $_POST['issue'];
            $date = "";
            if ($_POST["date"]) {
                $date_timestamp = strtotime($_POST["date"]);
                $date = date("Y-m-d", $date_timestamp);
            }
            
            $IT = new IT();
            $insertId = $IT->addIT($name, $quantity, $issue, $date);
            if (empty($insertId)) {
                $response = array(
                    "message" => "Chyba v přidání!",
                    "type" => "error"
                );
            } else {
                header("Location: index.php");
            }
        }
        require_once "app/view/it_list-add.php";
        break;
    
    case "it_list-edit":
        $id = $_GET["id"];
        $IT = new IT();
        
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $date = "";
            if ($_POST["date"]) {
                $date_timestamp = strtotime($_POST["date"]);
                $date = date("Y-m-d", $date_timestamp);
            }
            $issue = $_POST['issue'];
            
            $IT->editIT($name, $quantity, $issue, $date, $id);
            
            header("Location: index.php");
        }
        
        $result = $IT->getITById($id);
        require_once "app/view/it_list-edit.php";
        break;
    
    case "it_list-delete":
        $id = $_GET["id"];
        $IT = new IT();
        
        $IT->deleteIT($id);
        
        $result = $IT->getAllIT();
        require_once "app/view/it_list.php";
        break;
    
    default:
        $IT = new IT();
        $result = $IT->getAllIT();
        require_once "app/view/it_list.php";
        break;
}
?> 