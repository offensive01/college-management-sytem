<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$studentprogramID = 0;
$update = false;

$stuprogramname = '';
$durationID = '';
$schoolprogramID = '';
$description = '';

if (isset($_POST['save'])){
	$studentprogramID = $_POST['studentprogramID'];   
	$stuprogramname = $_POST['stuprogramname'];
	$durationID = $_POST['durationID'];
	$schoolprogramID = $_POST['schoolprogramID'];
	$description = $_POST['description'];

	$mysqli->query("INSERT INTO studentprogram (stuprogramname, durationID, schoolprogramID, description) VALUES('$stuprogramname', '$durationID', '$schoolprogramID', '$description') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$studentprogramID = $_GET['delete'];
	$mysqli->query("DELETE FROM studentprogram WHERE studentprogramID=$studentprogramID") or die($mysqli->error());
	$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$studentprogramID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM studentprogram WHERE studentprogramID=$studentprogramID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$stuprogramname = $row['stuprogramname'];
		$durationID = $row['durationID'];
		$schoolprogramID = $row['schoolprogramID'];
		$description = $row['description'];
	}

}

if (isset($_POST['update'])){
	$studentprogramID = $_POST['studentprogramID'];
	$stuprogramname = $_POST['stuprogramname'];
	$durationID = $_POST['durationID'];
	$schoolprogramID = $_POST['schoolprogramID'];
	$description = $_POST['description'];

		$mysqli->query("UPDATE studentprogram SET stuprogramname='$stuprogramname',durationID='$durationID'schoolprogramID='$schoolprogramID',description='$description' WHERE studentprogramID=$studentprogramID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}