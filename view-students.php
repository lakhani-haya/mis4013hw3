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
while ($student = $students->fetch.assoc()) {
?>
<tr>
  <td><?php echo $student['student_id']; ?></td>
  <td><?php echo $student['student_name']; ?></td>
  <td><?php echo $student['student_major']; ?></td>
  <td><?php echo $student['course_id']; ?></td>
</tr>
<?php
}
?>
   </tbody>  
  </table>
</div>
