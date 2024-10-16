<?


$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"vibe");

if($con)
{
    echo "success";
}
else
{
    echo "error";
}



?>