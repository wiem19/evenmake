<?php 
session_start();
if(!isset($_SESSION["user"])){//is set pour verifier conn du user
    header("location:connexion.php");
}
  include("header.php"); 
 $cnx=mysqli_connect("localhost","root","","evenmaker");

$reqq=mysqli_query($cnx,"select*from contact");
$reqqq=mysqli_query($cnx,"select*from sponsors");
$req=mysqli_query($cnx,"select*from event");?> 
<div class="row">
    <div class="col">
		<h1>administration Event Maker</h1>
	<section id="four" class="wrapper style2 special">
			<div class="inner"> 
			<h2>bonjour Mr(s)<?php echo $_SESSION["user"];?>   </h2>      

            <!--- add rechercher -->


<!--- Contenu -->
<h4>messages</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
                                            <th>Name</th>
                                            <th>email</th>
											<th>message</th>
											<th>date</th>
										</tr>
									</thead>
									<tbody>
                                    <?php      while($rst=mysqli_fetch_array($reqq)){
?>
										<tr>
                                            <td><?=$rst["nom"]?></td>
                                            <td><?=$rst["email"]?></td>
											<td><?=$rst["message"]?></td>
											<td><?=$rst["date"]?></td>
                                        </tr>
                                    <?php }?>
									</tbody>
									
								</table>
                            </div>
                            <h4>liste des evenements</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
                                            <th>nom de l'event</th>
                                            <th>date</th>
											<th>cout</th>
											<th>action</th>
										</tr>
									</thead>
									<tbody>
                                    <?php      while($rst=mysqli_fetch_array($req)){
?>
										<tr>
                                            <td><?=$rst["nomevent"]?></td>
                                            <td><?=$rst["date"]?></td>
                                            <td><?=$rst["cout"]?></td>
                                            <td>validé</td>
                                        </tr>
                                    <?php }?>
									</tbody>
									
								</table>
							</div>
							<h3>ajouter evenement</h3>
							<form method="post" action="addevent.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="nom"  value="" placeholder="nom de l'event" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										date :<input type="date" name="date"  value="" placeholder="date" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="cout"  value="" placeholder="cout" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="categorie" value="" placeholder="categorie" />
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="create new" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
							<h4>liste des sponsors</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
                                            <th>nom </th>
                                            <th>email</th>
											
										</tr>
									</thead>
									<tbody>
                                    <?php      while($rst=mysqli_fetch_array($reqqq)){
?>
										<tr>
                                            <td><?=$rst["nomsponsor"]?></td>
                                            <td><?=$rst["emailsponsor"]?></td>
                                    
                                        </tr>
                                    <?php }?>
									</tbody>
									
								</table>
							</div>
                            <section>
							<h3>ajouter sponsor</h3>
							<form method="post" action="addsponsor.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="category" id="category">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="4u 12u$(xsmall)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(xsmall)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u$(xsmall)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">High Priority</label>
									</div>
									<div class="6u 12u$(small)">
										<input type="checkbox" id="copy" name="copy">
										<label for="copy">Email me a copy of this message</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="human" checked>
										<label for="human">I am a human and not a robot</label>
									</div>
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
						<p>les sessions ouvertes <?php
print_r($_SESSION);
?>
</p>

<button class="btn btn-warning"><a href="deconn.php"><?php echo $_SESSION["user"];?>(Deconnection)</a></button>
<?php  include("footer.php");?>  

    