<h1>Students </h1>
<div class="table-responsive">
  <table class="table">
   <thead>
     <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Major</th>
     <th>Course</th>
     <th></th>  
     </tr>
    
   </thead>
   <tbody>
<?php
while ($course = $courses->fetch.assoc()) {
?>
<tr>
  <td><?php echo $student['student_id']; ?></td>
  <td><?php echo $student['student_name']; ?></td>
  <td><?php echo $student['student_major']; ?></td>
  <td><?php echo $student['course_id']; ?></td>
  <td>
    <form method="post" action="sections-by-course.php">
      <input type="hidden" name="cid" value="<?php echo $course['course_id']; ?>">
     <button type="submit" class="btn btn-primary">Sections</button>
    </form>
  </td>
</tr>
<?php
}
?>
   </tbody>  
  </table>
</div>
