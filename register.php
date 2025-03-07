<?php
// Retrieve form data
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$gender = $_POST['gender'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$number = $_POST['number'] ?? '';

// Validate input
if (empty($firstName) || empty($lastName) || empty($gender) || empty($email) || empty($password) || empty($number)) {
    die('All fields are required.');
}

// Hash the password


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test'); // Replace 'test' with your database name

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die('Prepare statement failed: ' . $conn->error);
}

$stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $password, $number);

// Execute the query
if ($stmt->execute()) {
    echo "Redeem Code is 9908 2214 3214 4500";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
