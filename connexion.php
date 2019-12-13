<?php  include("header.php");
include("nav.php");?>
<div class="row">
    <div class="col">
	<section id="four" class="wrapper style2 special">
			<div class="inner">
			
                <h1>login EVENMAKE</h1>
				
                <form method="POST" action="signin.php">
				
                    <div class="form-group">
                        <label >Email address</label>
                        <input name="email" type="email" class="form-control"  placeholder="Email">
                    </div>
					

                    <div class="form-group">
                        <label >Password</label>
                        <input name="pass" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Connexion</button>
					
                </form>
                <p>new to EventMaker? <a href="signup.php">Sign Up NOW ! </a></p>
				
            </div>
</section>


        
    </div>

</div>


<?php  include("footer.php")?>