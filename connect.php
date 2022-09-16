<?php
$rate = $_POST['Rating'];
$firstName = $_POST['Name'];
$email = $_POST['E-mail'];
$age = $_POST['Age'];
$number = $_POST['Contact'];
$textarea = $_POST['Message'];

$conn = new mysqli('localhost','root','','whetherapi');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into feedback(Name,Age,E-mail,Contact,Rating,Message)
                    values(?,?,?,?,?)");
    $stmt->bind_param("sisiss",$firstName,$age,$email,$number,$experience,$textarea);
    $stmt->execute();
    echo "Thank you for your feedback...";
    $stmt->close();
    $conn->close();
}
?>