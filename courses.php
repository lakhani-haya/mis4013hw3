<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Courses";
include "view-header.php";

$courses = selectCourses();
if ($courses !== null) {
    include "view-courses.php";
} else {
    echo "No courses found.";
}

include "view-footer.php";
?>
