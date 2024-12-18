<?php
$servername ="localhost";
$username="root";
$password="";
$database_name="signup";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$first_name= $_POST['fname'];
    $last_name= $_POST['lname'];
    $email= $_POST['email'];
    $age= $_POST['age'];
    $password= $_POST['password'];

    $sql_query = "INSERT INTO signup_details(First_Name,Last_Name,Email,Age,Password)
    VALUES('$first_name','$last_name','$age','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: dashboard.html");
} else {
    echo "Error: Email already exists" . $sql . "<br>" . $conn->error;
}

$conn->close();

