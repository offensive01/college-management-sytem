<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$SchoolprogramID = 0;
$update = false;

$progname = '';
$durationID = '';

if (isset($_POST['save'])){
	$SchoolprogramID = $_POST['SchoolprogramID'];   
	$progname = $_POST['progname'];   
	$durationID = $_POST['durationID'];

	$mysqli->query("INSERT INTO schoolprogram (progname, durationID) VALUES('$progname', '$durationID') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$SchoolprogramID = $_GET['delete'];
	$mysqli->query("DELETE FROM schoolprogram WHERE SchoolprogramID=$SchoolprogramID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$SchoolprogramID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM schoolprogram WHERE admissionID=$admissionID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$progname = $row['progname'];
		$durationID = $row['durationID'];
	}

}

if (isset($_POST['update'])){
	$SchoolprogramID = $_POST['SchoolprogramID'];
	$progname = $_POST['progname'];
	$durationID = $_POST['durationID'];

		$mysqli->query("UPDATE schoolprogram SET progname='$progname',durationID='$durationID' WHERE SchoolprogramID=$SchoolprogramID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}