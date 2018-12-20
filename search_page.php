<?php
$conn = mysqli_connect("localhost","root","","web_project");
$get = $_POST['search'];
if ($get) {
	$show = "SELECT * FROM class where name ='$get'";
	$result = mysqli_query($conn,$show);
	while($rows = mysqli_fetch_array($result)){
		echo $rows['name'];
		echo $rows['degree'];
		echo $rows['position'];
		echo $rows['age'];
		echo $rows['bithday'];
		echo $rows['gender'];
		echo $rows['country'];
		echo $rows['email'];
		echo $rows['image'];

	}
}

?>