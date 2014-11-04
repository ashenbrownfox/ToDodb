<html>
	<head>
		<title>PHP Website</title>
	</head>

	<?php
	session_start();
	if($_SESSION['user']){

	}
	else{
		header("location:index.php");
	}

	$user = $_SESSION['user'];
	?>

	<body>
		<h2>Home Page</h2>
		<p>Hello <?php echo $user ?>!</p>
		<a href="logout.php">Click here to logout</a><br/><br/>
		<form action="add.php" method="POST">
			Add more to list: <input type="text" name="details" /><br/>
			public post? <input type="checkbox" name="public[]" value="yes" /><br/>
			<input type="submit" value="Add to list" />
		</form>

		<h2 align="center">My list</h2>
		<table border="1px" width="100%">
		<tr>
			<th>Id</th>
			<th>Details</th>
			<th>Post Time</th>
			<th>Edit Time</th>
			<th>Edit</th>
			<th>Delete</th>
			<th>Public Post</th>
		</tr>
		<?php 
		require_once 'connectdb.php';
		
		try{
			$sql = "SELECT * FROM list";
			$query = $conn->query($sql);
			$query->setFetchMode(PDO::FETCH_ASSOC);
			while($row = $query->fetch()) {
				echo '<tr>';
					echo '<td align="center">'.$row['id'].'</td>';
					echo '<td align="center">'.$row['details'].'</td>';
					echo '<td align="center">'.$row['date_posted'].' - '.$row['time_posted'].'</td>';
					echo '<td align="center">'.$row['date_edited'].' - '.$row['time_edited'].'</td>';
					echo '<td align="center"><a href="edit.php?id='.$row['id'].'">edit</a></td>';
					echo '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a></td>';
					echo '<td align="center">'.$row['public'].'</td>';
				echo '</tr>';
			}
		}
		catch(PDOException $e){
			Print "<script>alert('SELECT error occurred: ".$e->getMessage()."');</script>";
		}



$sql = "call get_user_list(1)";
$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$result = $query->fetchAll();
echo $result
	
$sql = "call get_a_list";
$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
$result2 = $query->fetchAll();

echo $result2

/*
$sth = $conn->prepare("call get_user_list(1)");
$sth->execute();
$result = $sth->fetchAll();
 
$sth = $conn->prepare("call get_a_list");
$sth->execute();
$result2 = $sth->fetchAll();

*/

echo('
<style>
table,th,td
{
border:2px solid black;
padding:5px;
}
</style>
<table >');
echo('');
echo('<tr><td>Group Member</td>');
foreach ($result2 as $value2)
  {
  echo "<td>$value2[0]</td>  ";  
  }
  echo('</tr>');
	
	foreach ($result as $value)
	  {
	  echo "<tr><td>$value[0]</td>";
	  foreach ($result2 as $value2)
		{	
			echo "<td><input type='text' name='$value2[0]-$value[0]' value='0'></td>";
		}
			  echo('</tr>');
	  }
	  
echo('<tr><td> Totals:</td>');
foreach ($result2 as $value2)
  {
  echo "<td><div id=$value2[0]></div></td>  ";  
  }
echo('</table>
<button id="submitbutton" type="button">Submit</button>');



		?>
		</table>
		<script>
			function myFunction(id){
				var r = confirm("Are you sure you want to delete this record?");
				if(r == true){
					window.location.assign("delete.php?id=" + id);
				}
			}
		</script>
	<body>
</html>