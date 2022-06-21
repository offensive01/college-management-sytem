<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$staffID = 0;
$update = false;

$snationalityID = '';
$sfirstname = '';
$slastname = '';
$sdob = '';
$sstatus = ''; 
$sphone = '';
$saddress = '';
$seduclevel = '';
$sgender = '';
$stitle = '';
$snationality = '';

if (isset($_POST['save'])){
	$staffID = $_POST['staffID'];   
	$snationalityID = $_POST['snationalityID'];   
	$sfirstname = $_POST['sfirstname'];
	$slastname = $_POST['slastname']; 
	$sdob = $_POST['sdob'];
	$sstatus = $_POST['sstatus'];
	$sphone = $_POST['sphone'];
	$saddress = $_POST['saddress'];
	$seduclevel = $_POST['seduclevel'];
	$sgender = $_POST['sgender'];
	$stitle = $_POST['stitle'];
	$snationality = $_POST['snationality'];

	$mysqli->query("INSERT INTO staff (snationalityID, sfirstname, slastname, sdob, sstatus, sphone, saddress, seduclevel, sgender, stitle, snationality) VALUES('$snationalityID', '$sfirstname', '$slastname', '$sdob', '$sstatus', '$sphone', '$saddress', '$seduclevel', '$sgender', '$stitle', '$snationality') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$staffID = $_GET['delete'];
	$mysqli->query("DELETE FROM staff WHERE staffID=$staffID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$staffID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM staff WHERE staffID=$staffID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$snationalityID = $row['snationalityID'];
		$sfirstname = $row['sfirstname'];
		$slastname = $row['slastname'];
		$sdob = $row['sdob'];
		$sstatus = $row['sstatus'];
		$sphone = $row['sphone'];
		$saddress = $row['saddress'];
		$seduclevel = $row['seduclevel'];
		$sgender = $row['sgender'];
		$stitle = $row['stitle'];
		$snationality = $row['snationality'];
	}

}

if (isset($_POST['update'])){
	$staffID = $_POST['staffID'];
	$snationalityID = $_POST['snationalityID'];
	$sfirstname = $_POST['sfirstname'];
	$slastname = $_POST['slastname'];
	$sdob = $_POST['sdob'];
	$sstatus = $_POST['sstatus'];
	$sphone = $_POST['sphone'];
	$saddress = $_POST['saddress'];
	$seduclevel = $_POST['seduclevel'];
	$sgender = $_POST['sgender'];
	$stitle = $_POST['stitle'];
	$snationality = $_POST['snationality'];

		$mysqli->query("UPDATE staff SET snationalityID='$snationalityID',sfirstname='$sfirstname', slastname='$slastname', sdob='$sdob', sstatus='$sstatus', sphone ='$sphone', saddress='$saddress', seduclevel='$seduclevel', sgender='$sgender', stitle='$stitle', snationality='$snationality' WHERE staffID=$staffID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}