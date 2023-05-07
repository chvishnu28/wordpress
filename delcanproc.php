<?php
$ txtAadhaarNum = $_GET["txtAadhaarNum"];
$db_conn= mysqli_connect("localhost","root","svec123","db_stumgnttsys");
if($db_conn==false)
echo "DB Connection Error";
else
{
$query="delete from tbl_stuperdetails where AadhaarNumber='".$ txtAadhaarNum ."'";
if(mysqli_query($db_conn,$query))
echo "Data deleted successfully.";
else
echo "Data deletion failed.";
}
?>
