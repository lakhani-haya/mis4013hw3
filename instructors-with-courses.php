<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle = "Instructors with Courses";
Include "view-header.php";
$instructors = selectInstructors();
include "view-instructors-with-courses.php";
Include "view-footer.php";
?>
