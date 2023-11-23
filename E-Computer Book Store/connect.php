<?
$firstname=$_POST['firstname'];
$PhoneNumber=$_POST['PhoneNumber'];
$email=$_POST['email'];
$Password=$POST['Password'];
$ConformPassword=$_POST['ConformPassword'];

$con=new mysqli('localhsot','root','','ebooks');
if($con->connect_error(){
	die('COnnection failed'.$con->connect_error);
else
{

$smt=$con->prepare("insert into Registration(firstname,PhoneNumber,email,Password,ConformPassword) values(?,?,?,?,?)");
$result=$smt->execute($firstname,$PhoneNumber,$email,$Password,$ConformPassword);
if($result){
	echo "Registration successfull..........";
}
$smt->close();
$con->close();
}
}
?>