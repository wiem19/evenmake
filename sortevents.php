<?php  include("header.php");
include("nav.php");?>  	
       <!--- Menu Gauche-->
       
	<section id="four" class="wrapper style2 special">
			<div class="inner">
            <section>
							<ul class="actions">

								<li><a href="sortevents.php?id=1" class="button alt">forum</a></li>
								<li><a href="sortevents.php?id=2" class="button alt">seminar</a></li>
                                <li><a href="sortevents.php?id=3" class="button alt">birthday</a></li>
                                <li><a href="sortevents.php?id=4" class="button alt">competition</a></li>
                                <li><a href="sortevents.php?id=5" class="button alt">teambuilding</a></li>
                                <li><a href="sortevents.php" class="button alt">ALL</a></li>
                            </ul>
</section>
		<!--- liste des produits -->
        <div class="col-md-9">
            
            <?php
            $cnx=mysqli_connect("localhost","root","","evenmaker");
            if(!isset($_GET["id"]))
            $req=mysqli_query($cnx,"select*from event");

            else{
            $id=$_GET["id"];
            
$req=mysqli_query($cnx,"select*from event where idcat={$id}");}
while($rst=mysqli_fetch_array($req)){
    

?>
	
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="images/<?=$rst["idevent"]?>.jpg" >
                    <div class="caption">
                        <h3><?=$rst["nomevent"]?></h3>
                        <p>
						    <a href="#" class="btn btn-primary" ><?=$rst["date"]?></a>
                            <a href="#" class="btn btn-danger" >sponsoring<?=$rst["cout"]?>DT</a>
                        </p>
                    </div>
                </div>
            </div>   

        <?php 

}?>
          
        </div>

    </div>

</div>


<?php  include("footer.php")?>