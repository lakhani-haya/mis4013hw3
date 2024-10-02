<?php
require_once("util-db.php");
require_once("model-students.php");

$pageTitle = "Students";
Include "view-header.php";
$instructors = selectStudents();
include "view-students.php";
Include "view-footer.php";
?>
