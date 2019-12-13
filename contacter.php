<?php
$nom=$_POST["name"];
$mail=$_POST["email"];
$mess=$_POST["message"];
$conn = new mysqli("localhost", "root","", "evenmaker");
$stmt = $conn->prepare("INSERT INTO contact (`nom`,`email`,`message`) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nom, $mail,$mess);
$stmt->execute();
$stmt->close();
header("location:index.php");
echo "message sent successfuly";
?>