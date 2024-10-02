<?php
require_once("util-db.php");
require_once("model-courses-by-instructor.php");

$pageTitle = "Courses by Instructor";
Include "view-header.php";
$instructors = selectCoursesByInstructor($_GET['id']);
include "view-courses-by-instructor.php";
Include "view-footer.php";
?>
