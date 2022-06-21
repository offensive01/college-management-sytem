<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$studentID = 0;
$update = false;

$nationalID = '';
$firsname = '';
$lastname = '';
$dob = '';
$status = ''; 
$phone = '';
$address = '';
$gender = '';
$nationality = '';

if (isset($_POST['save'])){
	$studentID = $_POST['studentID'];   
	$nationalID = $_POST['nationalID'];   
	$firsname = $_POST['firsname'];
	$lastname = $_POST['lastname']; 
	$dob = $_POST['dob'];
	$status = $_POST['status'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];

	$mysqli->query("INSERT INTO student (nationalID, firsname, lastname, dob, status, phone, address, gender, nationality) VALUES('$nationalID', '$firsname', '$lastname', '$dob', '$status', '$phone', '$address', '$gender', '$nationality') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$studentID = $_GET['delete'];
	$mysqli->query("DELETE FROM student WHERE studentID=$studentID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$studentID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM student WHERE studentID=$studentID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$nationalID = $row['nationalID'];
		$firsname = $row['firsname'];
		$lastname = $row['lastname'];
		$dob = $row['dob'];
		$status = $row['status'];
		$phone = $row['phone'];
		$address = $row['address'];
		$gender = $row['gender'];
		$nationality = $row['nationality'];
	}

}

if (isset($_POST['update'])){
	$studentID = $_POST['studentID'];
	$nationalID = $_POST['nationalID'];
	$firsname = $_POST['firsname'];
	$lastname = $_POST['lastname'];
	$dob = $_POST['dob'];
	$status = $_POST['status'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];

		$mysqli->query("UPDATE student SET nationalID='$nationalID',firsname='$firsname', lastname='$lastname', dob='$dob', status='$status', phone ='$phone', address='$address', gender='$gender', nationality='$nationality' WHERE studentID=$studentID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}