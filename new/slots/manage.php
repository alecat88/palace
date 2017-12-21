<?php include("../config.php") ?>

<?php
	$sql = "INSERT INTO slots (name, description, operator) VALUES ('Jsdfohn', 'Doe', 'john@example.com')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$mysqli->close();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>