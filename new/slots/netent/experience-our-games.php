<?php
$img = $_GET[ 'img' ];
$url = $_GET[ 'url' ];
$name = $_GET[ 'name' ];

if ( !empty( $name ) ) {

	include( "../../config.php" ); //connect to db




	/*$sql = "INSERT INTO slots (name, description, operator) VALUES ('Jsdfohn', 'Doe', 'john@example.com')";

	if ($mysqli->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	*/
	/*$sql = "SELECT * FROM slots WHERE `img` = `$img`";
	
	if ( $mysqli->query( $sql )) {
		echo "inserting<br>";
		$sql = "INSERT INTO slots (img) VALUES ('$img')";

		if ( $mysqli->query( $sql ) === TRUE ) {
			echo "Record Updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
	} else {
		echo "updating!<br>";
		$sql = "UPDATE slots SET img = REPLACE(img, 'foo', 'bar') WHERE INSTR(img, 'foo') > 0";

		if ( $mysqli->query( $sql ) === TRUE ) {
			echo "Record Updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
	}*/

$result = $mysqli->query("SELECT id FROM slots WHERE img = '$img'");
if($result->num_rows == 0) {
     // row not found, do stuff...
	echo "inserting<br>";
	
	//CREATE OPERATOR ARRAY AND CONVERT

	//CREATING NEW ROW(slot)
		$sql = "INSERT INTO slots (img,url,name) VALUES ('$img','$url','$name')";

		if ( $mysqli->query( $sql ) === TRUE ) {
			echo "Record Updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
} else {
    // do other stuff...
	echo "date already taken";
	/*echo "updating name!<br>";
	if(!empty( $name )){
		$sql = "UPDATE slots SET img='$name' WHERE img='$name'";
		if ( $mysqli->query( $sql ) === TRUE ) {
			echo "Record Updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
	}*/
}
	
	
	
	$mysqli->close();
}