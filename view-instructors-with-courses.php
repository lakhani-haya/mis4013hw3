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
  <?php
  $courses = selectCoursesByInstructor($instructor['instructor_id']);
  while ($course = $courses->fetch_assoc()) {
?>
    
<?php    
  }
  ?>
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
