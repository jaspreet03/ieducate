<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location:loginpage.php"); 
}
?>




<?php


include("config.php");


$name1=$_POST['name'];
$phone1=$_POST['phone'];
$email1=$_POST['email'];
$text1=$_POST['text'];
//insert form data in database
$query1="INSERT INTO contact (name,phone,email,text) VALUES ('$name1','$phone1','$email1','$text1')";
$q1=mysqli_query($con,$query1);
if($q1){

    echo "data added";
    echo "<br>";

}else {

    echo "data not added";
}
//fetch form data from database
$query2="SELECT * FROM contact";
$q2=mysqli_query($con,$query2);
echo "<table border=1 color='blue'>";

echo "<tr><td>";
    echo "ID";
    echo "</td><td>";
    echo "NAME";
    echo "</td><td>";
    echo "PHONE";
    echo "</td><td>";
    echo "EMAIL";
    echo "</td><td>";
    echo "TEXT";
    echo "</td></tr>";

while($row=mysqli_fetch_array($q2)){
    echo "<tr><td>";
    echo "$row[0]";
    echo "</td><td>";
    echo "$row[1]";
    echo "</td><td>";
    echo "$row[2]";
    echo "</td><td>";
    echo "$row[3]";
    echo "</td><td>";
    echo "$row[4]";
    echo "</td><td>";

    // stringquery
?>

<a href="delete.php?id=<?php echo $row[0]; ?>">DELETE</a>



<?php
echo "</td></tr>";

}
echo "</table>";






include('footer.php');
?>



