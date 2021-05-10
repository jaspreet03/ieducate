<?php
include("config.php");

$id1=$_GET['id'];

$query="DELETE FROM contact WHERE id=$id1";
$qq=mysqli_query($con,$query);
if($qq){
    echo "deleted entry";
}else{
    echo "entry not deleted";

}

?>
