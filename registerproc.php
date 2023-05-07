<?php
$fullname = $_POST['txtFullName'];
$mobile = $_POST['txtMobNum'];
$email = $_POST['txtEmail'];
$aadhaar = $_POST['txtAadhaar'];
$rdbtnGender = $_POST['rdbtnGender'];
$rdbtnCourseType= $_POST['rdbtnCourseType'];
$dobdate = $_POST['drpdwnlstdate'];
$dobmonth = $_POST['drpdwnlstmonth'];
$dobyear = $_POST['drpdwnlstyear'];
$dob = $dobdate."-".$dobmonth."-".$dobyear;
$db_conn= mysqli_connect("localhost","root","svec123","db_stumgnttsys");
if($db_conn==false)
echo "Database Connection Error";
else
{
$query ="INSERT INTO tbl_stuperdetails (Fullname, MobileNumber, EmailId,
AadhaarNumber, Gender, CourseType, DOB)
values('$fullname','$mobile','$email',$aadhaar,'$rdbtnGender','$rdbtnCourseType','$dob')";
if(mysqli_query($db_conn,$query))
{
echo "Data Inserted Safely.";
echo "<a href='register.html'>Insert one more record</a>";
}
else
echo "Data insertion failed.";
}
?>
