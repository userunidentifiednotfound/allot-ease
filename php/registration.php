<?php
include 'db_connect.php'; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'];
    $lastName = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $courseEnrolled = $_POST['course_enrolled'];
    $fatherName = $_POST['father_name'];
    $motherName = $_POST['mother_name'];
    $aadharNumber = $_POST['aadhar_number'];
    
    // Handle file upload
    $photo = $_FILES['photo']['tmp_name'];
    $photoData = null;
    if (file_exists($photo)) {
        $photoData = file_get_contents($photo);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO students (first_name, middle_name, last_name, dob, gender, course_enrolled, father_name, mother_name, aadhar_number, photograph) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssb", $firstName, $middleName, $lastName, $dob, $gender, $courseEnrolled, $fatherName, $motherName, $aadharNumber, $photoData);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
