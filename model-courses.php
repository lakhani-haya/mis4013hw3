
<?php
function selectCourses() {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT course_id, course_number, course_description FROM `course`");
    $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    return $result;
}
?>



