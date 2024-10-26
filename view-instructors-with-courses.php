<h1>Instructors with Courses</h1>
<div class="card-group">
<?php
while ($instructor = $instructors->fetch_assoc()) {
?>
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $instructor['instructor_name']; ?></h5>
            <p class="card-text"><small class="text-body-secondary">Office: <?php echo $instructor['office_number']; ?></small></p>
            <p class="card-text">Courses:</p>
            <ul class="list-group">
            <?php
            $courses = selectCoursesByInstructors($instructor['instructor_id']);
            while ($course = $courses->fetch_assoc()) {
            ?>
                <li class="list-group-item">
                    <?php echo $course['course_number']; ?> - <?php echo $course['semester']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?>
                </li>
            <?php    
            }
            ?>
            </ul>
        </div>
    </div>
<?php
}
?>
</div>
