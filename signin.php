<?php
session_start();//control acces sous serveur(cookies sur pc )
$x1=$_POST["email"];
$x2=$_POST["pass"];
$cnx=mysqli_connect("localhost","root","","evenmaker");
$req=mysqli_query($cnx,"select * from users");
$existe=0;
while($rst=mysqli_fetch_array($req)){
    if(($rst["email"]==$x1)&&($rst["password"]==$x2)){
        $existe=1;
        $_SESSION["user"]=$rst["nom"];
    }
}
if($existe==1){
    header("location:admin.php");
}else{

    session_unset(); 
    
    //header("location:connexion.php");
    $reqq=mysqli_query($conn,"select * from eventmakers");
$existe1=0;
while($rst=mysqli_fetch_array($reqq)){
    if(($rst["email"]==$x1)&&($rst["password"]==$x2)){
        $existe1=1;
        
    }
}
if($existe1==1){
    header("location:eventmakers.php");
}else{
    
    header("location:connexion.php");

}

}
//$cnx->close();
//$conn=mysqli_connect("localhost","root","","evenmaker");

//$conn->close();


?>