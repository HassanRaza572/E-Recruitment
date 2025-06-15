<?php
include "connection.php";

$job_id = $_GET['id'];
$sql = "DELETE FROM job_post WHERE job_id = '$job_id' ";
$result = mysqli_query($conn, $sql);

header('location:posted_job.php');
mysqli_close($sonn);
?>