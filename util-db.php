<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'hwhayaou_hw3user', 'hihelloSQL1', 'hwhayaou_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
