<?php
$txtAadhaarNo = $_GET["txtAadhaarNo"];
$db_conn= mysqli_connect("localhost","root","svec123","db_stumgnttsys");
if($db_conn==false)
echo "DB Connection Error";
else
{
$query =" SELECT Fullname, MobileNumber, EmailId, AadhaarNumber,Gender,
CourseType, DOB FROM tbl_stuperdetails WHERE AadhaarNumber=$txtAadhaarNo";
$result =mysqli_query($db_conn,$query);
$recCount =mysqli_num_rows($result);
if($recCount>0)
{
echo "<table border='2px'>";
echo "<tr><th>Fullname</th><th>MobileNumber</th>
<th>EmailId</th><th>AadhaarNumber</th>
<th>Gender</th><th>CourseType</th>
<th>DOB</th></tr>";
while($r =mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$r["Fullname"]."</td>" ;
echo "<td>".$r["MobileNumber"]."</td>";
echo "<td>".$r["EmailId"]."</td>" ;
echo "<td>".$r["AadhaarNumber"]."</td>" ;
echo "<td>".$r["Gender"]."</td>" ;
echo "<td>".$r["CourseType"]."</td>" ;
echo "<td>".$r["DOB"]."</td>" ;
echo "</tr>";
}
echo "</table>";
}
else
{
echo "No Data Found with this Aadhaar Number.";
}
mysqli_close($db_conn);
}
?>
