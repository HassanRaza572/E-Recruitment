<?php
session_start();
require 'connection.php'; // Ensure you include your database connection file

if (isset($_GET['id'])) {
    $job_id = $_GET['id'];

    // Fetch current status of the job
    $sql = "SELECT status FROM job_post WHERE job_id = '$job_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_status = $row['status'];

        // Toggle the status
        $new_status = ($current_status === 'active') ? 'inactive' : 'active';

        // Update the job status in the database
        $sql = "UPDATE job_post SET status = '$new_status' WHERE job_id = '$job_id'";
        if ($conn->query($sql) === TRUE) {
            header("Location: posted_jobs.php"); // Redirect back to the posted jobs page
        } else {
            echo "<script> alert('Error updating record: ');</script>";
        }
    }
}

$conn->close();
?>
