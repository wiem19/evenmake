<?php  include("header.php");
include("nav.php");?>
<div class="row">
    <div class="col">
	<section id="four" class="wrapper style2 special">
			<div class="inner">
				<h3 class="white">Sign UP</h3>
				<form method="POST" action="inscription.php" class="popup-form">
					<input  name="nom" type="text" class="form-control form-white" placeholder="nom" required>
					<input  name="prenom" type="text" class="form-control form-white" placeholder="prenom">
                    <input  name="email" type="email" class="form-control form-white" placeholder="Email Address" required>
                   
					<input name="pass" type="password" class="form-control form-white" placeholder="password">
					<!--- liste des produits<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" required/>
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
                    </div> -->
					<button type="submit" class="btn btn-submit">inscription</button>
                </form>
			</div>
</section>
    </div>
	</div>
   
	<?php  include("footer.php")?>