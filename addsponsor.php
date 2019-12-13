<?php
$nom=$_POST["name"];
$mail=$_POST["email"];
$mess=$_POST["message"];
$conn = new mysqli("localhost", "root","", "evenmaker");
$stmt = $conn->prepare("INSERT INTO sponsors (`nomsponsor`,`emailsponsor`,`message`) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nom, $mail,$mess);
$stmt->execute();
$stmt->close();
header("location:admin.php");
echo "message sent successfuly";
?>