<?php
function selectStudents {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select student_id, student_name, student_major, course_id from student");
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
