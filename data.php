<html>
<head><title>Gate pass</title></head>
<body>
<?php 
$host="localhost";
$user="root";
$pass="";
$db="data1";
$con=new mysqli($host,$user,$pass,$db);
if(!$con)
{
   echo "there  are some problemd";
}
$username=$_POST['username'];
$rolno=$_POST['rlno'];
$email=$_POST['email'];
$branch=$_POST['class'];
$phonenumber=$_POST['phonenumber'];
$reason=$_POST['reason'];
$qry="INSERT INTO `gatepass`(`username`, `phonenumber`, `email`, `reason`, `rolno`, `branch`) 
VALUES ('$username','$rolno','$email','$reason','$phonenumber','$branch')";
$insert=mysqli_query($con,$qry);
$qry1=  "insert classper select * from gatepass"; 
$insert1=mysqli_query($con,$qry1);
$qry2="insert hod select * from gatepass";
$insert2=mysqli_query($con,$qry2)
?>
<h1 align="center">Your data is stored </h1>
<form action='classper.php'>
    <label>click here to ask permission</label>
    <button type="submit">Submit</button>
</form>

</body>
</html>