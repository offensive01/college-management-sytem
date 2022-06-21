<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$courseID = 0;
$update = false;

$cousename = '';
$shortname = '';
$studentprogramID = '';
$lecturerID = '';

if (isset($_POST['save'])){
	$courseID = $_POST['courseID'];   
	$cousename = $_POST['cousename'];   
	$shortname = $_POST['shortname'];   
	$studentprogramID = $_POST['studentprogramID'];   
	$lecturerID = $_POST['lecturerID'];

	$mysqli->query("INSERT INTO course (cousename, shortname, studentprogramID, lecturerID) VALUES('$cousename', '$shortname', '$studentprogramID', '$lecturerID') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$courseID = $_GET['delete'];
	$mysqli->query("DELETE FROM course WHERE courseID=$courseID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$courseID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM course WHERE courseID=$courseID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$cousename = $row['cousename'];
		$shortname = $row['shortname'];
		$studentprogramID = $row['studentprogramID'];
		$lecturerID = $row['lecturerID'];
	}

}

if (isset($_POST['update'])){
	$courseID = $_POST['courseID'];
	$cousename = $_POST['cousename'];
	$shortname = $_POST['shortname'];
	$studentprogramID = $_POST['studentprogramID'];
	$lecturerID = $_POST['lecturerID'];

		$mysqli->query("UPDATE course SET cousename='$cousename',shortname='$shortname',studentprogramID='$studentprogramID',lecturerID='$lecturerID' WHERE courseID=$courseID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}