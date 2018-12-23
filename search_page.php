<?php
$conn = mysqli_connect("localhost","root","","web_project");
$get = $_POST["search"];
if (isset($get)) {
	$show = "SELECT * FROM teachers WHERE name ='$get'";
	$result = mysqli_query($conn,$show);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table id="table">
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>surename</th>
			<th>degree</th>
			<th>position</th>
			<th>age</th>
			<th>birthday</th>
			<th>gender</th>
			<th>counrty</th>
			<th>email</th>
		 

		</tr>

	 <?php 
	    while($rows = mysqli_fetch_assoc($result)){ 
	 ?>

	     <tr>
		   <td><?php echo $rows['id']; ?></td>
		   <td><?php echo $rows['name']; ?></td>
		   <td><?php echo $rows['surename']; ?></td>
		   <td><?php echo $rows['degree']; ?></td>
		   <td><?php echo $rows['position']; ?></td>
		   <td><?php echo $rows['age']; ?></td>
		   <td><?php echo $rows['birthday']; ?></td>
		   <td><?php echo $rows['gender']; ?></th>
		   <td><?php echo $rows['country']; ?></td>
		   <td><?php echo $rows['email']; ?></td>
		    
	     </tr>
	 <?php
        }
      ?>
    </table>

    <a href="http://localhost/web_project/index.php" class="button">Do you want to rate this professor?</a>
</body>
</html>
