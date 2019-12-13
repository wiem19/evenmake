<?php
$nom=$_POST["nom"];
$mail=$_POST["prenom"];
$mess=$_POST["email"];
$passw=$_POST["pass"];
$conn = new mysqli("localhost", "root","", "evenmaker");
$stmt = $conn->prepare("INSERT INTO eventmakers (`nom`,`prenom`,`email`,`password`) VALUES (?, ? , ? , ?)");
$stmt->bind_param("ssss", $nom, $mail,$mess,$passw);
$stmt->execute();
$stmt->close();
header("location:signin.php");
echo "message sent successfuly";
?>
<?php
/*
$nomm = $_POST["nom"];
$pren = $_POST["prenom"];
$eemail = $_POST["email"];
$passw = $_POST["pass"];

$conn = new mysqli("localhost", "root","", "evenmaker");
$stmt = $conn->prepare("INSERT INTO eventmakers (`nom`,`prenom`,`email`,`password`) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $nomm, $pren, $eemail, $passw);
$stmt->execute();
$stmt->close();
session_start();
$req=mysqli_query($conn,"select * from eventmakers");
$existe=0;
while($rst=mysqli_fetch_array($req)){
    if(($rst["email"]==$eemail)&&($rst["password"]==$passw)){
        $existe=1;
        $_SESSION["user"]=$rst["nom"];
    }
}
if($existe==1){
    header("location:eventmaker.php");
}else{
    header("location:connexion.php");

}*/

?>