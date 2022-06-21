<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$durationID = 0;
$update = false;

$durname = '';
$durdescription = '';
$duration = '';

if (isset($_POST['save'])){
	$durationID = $_POST['durationID'];   
	$durname = $_POST['durname'];   
	$durdescription = $_POST['durdescription'];   
	$duration = $_POST['duration'];

	$mysqli->query("INSERT INTO duration (durname, durdescription, duration) VALUES('$durname', '$durdescription', '$duration') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$durationID = $_GET['delete'];
	$mysqli->query("DELETE FROM duration WHERE durationID=$durationID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$durationID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM duration WHERE durationID=$durationID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$durname = $row['durname'];
		$durdescription = $row['durdescription'];
		$duration = $row['duration'];
	}

}

if (isset($_POST['update'])){
	$durationID = $_POST['durationID'];
	$durname = $_POST['durname'];
	$duration = $_POST['duration'];

		$mysqli->query("UPDATE duration SET durname='$durname',duration='$duration' WHERE durationID=$durationID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}