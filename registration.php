<?php
$F_name = $_POST['F_name'];
$M_name = $_POST['M_name'];
$L_name = $_POST['L_name'];
$emailID = $_POST['emailId'];
$mobileno = $_POST['mobileno'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$Address1 = $_POST['Address1'];
$Address2 = $_POST['Address2'];
$pincode = $_POST['pincode'];
$City = $_POST['City'];
$state = $_POST['state'];
$Country = $_POST['Country'];
$Education = $_POST['Education'];
$Disability = $_POST['Disability'];

$conn = new mysqli('localhost', 'root', '', 'rform');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registation (F_name, M_name, L_name, emailID, mobileno, date, gender, Address1, Address2, pincode, City, state, Country, Education, Disability) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssss", $F_name, $M_name, $L_name, $emailID, $mobileno, $date, $gender, $Address1, $Address2, $pincode, $City, $state, $Country, $Education, $Disability);

    $execval = $stmt->execute();
    if ($execval) {
        echo "Registration successfully...";
    } else {
        if ($conn->errno === 1062 && strpos($conn->error, 'Duplicate entry') !== false) {
            echo "Error: Duplicate entry for primary key 'id'.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
