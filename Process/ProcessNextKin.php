<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'mangalaregistration') or die(mysql_error($mysqli));

$nextkinID = 0;
$update = false;

$nationalID = '';
$studentID = '';
$nfirstname = '';
$nlastname = '';
$nphone = ''; 
$naddress = '';
$ngender = '';
$nrelation = '';
$nproffession = '';

if (isset($_POST['save'])){
	$nextkinID = $_POST['nextkinID'];   
	$nationalID = $_POST['nationalID'];   
	$studentID = $_POST['studentID'];
	$nfirstname = $_POST['nfirstname']; 
	$nlastname = $_POST['nlastname'];
	$nphone = $_POST['nphone'];
	$naddress = $_POST['naddress'];
	$ngender = $_POST['ngender'];
	$nrelation = $_POST['nrelation'];
	$nproffession = $_POST['nproffession'];

	$mysqli->query("INSERT INTO nextkin (nationalID, studentID, nfirstname, nlastname, nphone, naddress, ngender, nrelation, nproffession) VALUES('$nationalID', '$studentID', '$nfirstname', '$nlastname', '$nphone', '$naddress', '$ngender', '$nrelation', '$nproffession') ") or 
	die($mysqli->error);
			$mysqli->query($sql);
	header("location: ../Admin/prove.php");
}

if (isset($_GET['delete'])){
	$nextkinID = $_GET['delete'];
	$mysqli->query("DELETE FROM nextkin WHERE nextkinID=$nextkinID") or die($mysqli->error());

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}

if (isset($_GET['edit'])){
	$nextkinID = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM nextkin WHERE nextkinID=$nextkinID") or die($mysqli->error());
	if (mysqli_num_rows($result) == 1 ){
		$row = $result->fetch_array();

		$nationalID = $row['nationalID'];
		$studentID = $row['studentID'];
		$nfirstname = $row['nfirstname'];
		$nlastname = $row['nlastname'];
		$nphone = $row['nphone'];
		$naddress = $row['naddress'];
		$ngender = $row['ngender'];
		$nrelation = $row['nrelation'];
		$nproffession = $row['nproffession'];
	}

}

if (isset($_POST['update'])){
	$nextkinID = $_POST['nextkinID'];
	$nationalID = $_POST['nationalID'];
	$studentID = $_POST['studentID'];
	$nfirstname = $_POST['nfirstname'];
	$nlastname = $_POST['nlastname'];
	$nphone = $_POST['nphone'];
	$naddress = $_POST['naddress'];
	$ngender = $_POST['ngender'];
	$nrelation = $_POST['nrelation'];
	$nproffession = $_POST['nproffession'];

		$mysqli->query("UPDATE nextkin SET nationalID='$nationalID',studentID='$studentID', nfirstname='$nfirstname', nlastname='$nlastname', nphone='$nphone', naddress ='$naddress', ngender='$ngender', nrelation='$nrelation', nproffession='$nproffession' WHERE nextkinID=$nextkinID")or die($mysqli->error);

			$mysqli->query($sql);
	header("location: ../Admin/prove.php");

}