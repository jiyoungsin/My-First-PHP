<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$myDB = "PaulsWebsite";

$conn = new mysqli($servername, $username, $password, $myDB);
$userList = "SELECT * FROM userNames";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully\n";

$result = $conn->query($userList);

?>
<table>
	<thead>
		<th>First Name</th>
		<th>LastName</th>
	</thead>
	<tbody>
		<?php while($row = $result->fetch_assoc()) { ?>	
		<tr>
			<td><?= $row["firstname"] ?></td>
			<td><?= $row["lastname"] ?></td>
		</tr>
		<?php };?>
	</tbody>
</table>

<?php
$conn->close();
