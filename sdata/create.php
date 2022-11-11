
<?php
 
   //Creating a connection
   $con = mysqli_connect("localhost", "root", "", "stpauls_data");


   $student_name = $_POST['sname'];

   $father_name = $_POST['sfather'];

   $classdiv = $_POST['sclass'];

   $sphone = $_POST['sphone'];

   $admissonyr = $_POST['admissonyr'];

   $saddress = $_POST['saddress'];

   $gender = $_POST['gender'];

   //Inserting a records into the my_team table
   $res = mysqli_query($con, "insert into student_registration values('$student_name','$father_name','$classdiv','$sphone','$admissonyr','$saddress','$gender')");
   echo $_POST[0]; 
   $res = mysqli_query($con, "SELECT * FROM student_registration");
   print("Data inserted sucessfully");
  

   //Closing the connection
   mysqli_close($con);
?>