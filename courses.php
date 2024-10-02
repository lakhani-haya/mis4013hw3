<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Courses";
Include "view-header.php";
$instructors = selectCourses();
include "view-courses.php";
Include "view-footer.php";
?>
