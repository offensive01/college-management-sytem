<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$admissionID = 0;
$update = false;

$studentID = '';
$staffID = '';

if (isset($_POST['save'])){
	$admissionID = $_POST['admissionID'];   
	$studentID = $_POST['studentID'];   
	$staffID = $_POST['staffID'];

	$mysqli->query("INSERT INTO admission (studentID, staffID) VALUES('$studentID', '$staffID') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$admissionID = $_GET['delete'];
	$mysqli->query("DELETE FROM admission WHERE admissionID=$admissionID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$admissionID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM admission WHERE admissionID=$admissionID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$studentID = $row['studentID'];
		$staffID = $row['staffID'];
	}

}

if (isset($_POST['update'])){
	$admissionID = $_POST['admissionID'];
	$studentID = $_POST['studentID'];
	$staffID = $_POST['staffID'];

		$mysqli->query("UPDATE admission SET studentID='$studentID',staffID='$staffID' WHERE admissionID=$admissionID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}