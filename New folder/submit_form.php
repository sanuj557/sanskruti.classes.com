<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $studentName = $_POST['student_name'];
    $parentName = $_POST['parent_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];
    $address = $_POST['address'];

    // Save data to a text file
    $data = "Student Name: $studentName\nParent Name: $parentName\nEmail: $email\nPhone: $phone\nGrade: $grade\nAddress: $address\n\n";
    file_put_contents('admissions.txt', $data, FILE_APPEND);

    // Optionally, redirect to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
