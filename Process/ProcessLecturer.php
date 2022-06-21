<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$lecturerID = 0;
$update = false;

$staffID = '';
$studentprogramID = '';

if (isset($_POST['save'])){
	$lecturerID = $_POST['lecturerID'];   
	$staffID = $_POST['staffID'];   
	$studentprogramID = $_POST['studentprogramID'];

	$mysqli->query("INSERT INTO lecturer (staffID, studentprogramID) VALUES('$staffID', '$studentprogramID') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$lecturerID = $_GET['delete'];
	$mysqli->query("DELETE FROM lecturer WHERE lecturerID=$lecturerID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$lecturerID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM lecturer WHERE lecturerID=$lecturerID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$staffID = $row['staffID'];
		$studentprogramID = $row['studentprogramID'];
	}

}

if (isset($_POST['update'])){
	$lecturerID = $_POST['lecturerID'];
	$staffID = $_POST['staffID'];
	$studentprogramID = $_POST['studentprogramID'];

		$mysqli->query("UPDATE lecturer SET staffID='$staffID',studentprogramID='$studentprogramID' WHERE lecturerID=$lecturerID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}