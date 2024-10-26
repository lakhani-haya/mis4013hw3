<?php
function selectStudents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT student_id, student_name, student_major, course_id FROM student");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
