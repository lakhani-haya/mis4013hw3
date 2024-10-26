<?php
function selectCourses() {
    $conn = null; // Initialize the connection variable
    try {
        $conn = get_db_connection(); // Get the database connection
        $stmt = $conn->prepare("SELECT course_id, course_number, course_description FROM `course`");
        $stmt->execute();
        
        $result = $stmt->get_result(); // Fetch the result
        return $result; // Return the result set
    } catch (Exception $e) {
        if ($conn) {
            $conn->close(); // Close connection if it was established

}
?>

