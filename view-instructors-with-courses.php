<h1>Instructors with Courses</h1>
<div class="card-group">
 
<?php
while ($instructor = $instructors->fetch.assoc()) {
?>
    <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $instructor['instructor_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
  <?php
  $courses = selectCoursesByInstructor($instructor['instructor_id']);
  while ($course = $courses->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $course['course_number']; ?> - <?php echo $course['semester']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?> </li>
      <td><?php echo $course['course_id']; ?></td>
  <td><?php echo $course['course_number']; ?></td>
  <td><?php echo $course['course_description']; ?></td>
  <td><?php echo $course['semester']; ?></td>
  <td><?php echo $course['room']; ?></td>
  <td><?php echo $course['day_time']; ?></td>
<?php    
  }
  ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $instructor['office_number']; ?></small></p>
    </div>
  </div>
<tr>
  <td><?php echo $instructor['instructor_id']; ?></td>
  <td><?php echo $instructor['instructor_name']; ?></td>
  <td><?php echo $instructor['office_number']; ?></td>
  <td><a href="courses-by-instructor.php?id=<?php echo $instructor['instructor_id']; ?>">Courses</a></td>
</tr>
<?php
}
?>
</div>
