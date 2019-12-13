<?php 

  include("header.php"); 
 $cnx=mysqli_connect("localhost","root","","evenmaker"); 
$req=mysqli_query($cnx,"select*from event ");?> 
<div class="row">
    <div class="col">
		<h1>hello event maker</h1>
	<section id="four" class="wrapper style2 special">
			<div class="inner">          

            <!--- add rechercher -->


<!--- Contenu -->
							
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
                            <section>
							<h3>add new event</h3>
							<form method="post" action="addevent.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="email" id="email" value="" placeholder="description" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="category" id="category">
												<option value="">- Category -</option>
												<option value="1">forum</option>
												<option value="1">seminar</option>
												<option value="1">competition</option>
												<option value="1">team building</option>
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
						<a href="#" class="button special">become sponsor</a>

<button class="btn btn-warning"><a href="deconn.php">(Deconnection)</a></button>
<?php  include("footer.php");?>  

    