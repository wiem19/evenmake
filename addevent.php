<?php
$nom=$_POST["nom"];
$date=$_POST["date"];
$cout=$_POST["cout"];
$cat=$_POST["categorie"];
$conn = new mysqli("localhost", "root","", "evenmaker");
$stmt = $conn->prepare("INSERT INTO `event` (`nomevent`,`date`,`cout`,`idcat`) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $nom, $date,$cout,$cat);
$stmt->execute();
$stmt->close();
header("location:admin.php");
echo "message sent successfuly";
?>