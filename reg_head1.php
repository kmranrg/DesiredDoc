<style>
	header {
		font-size: 19px;
		height: 60px;
	}
</style>

<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
	<div class="container">
		<div class="navbar-header">
			
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		
			<a href="reg_welcome.php" class="navbar-brand" style="font-size:22px;font-family:'Comic Sans MS', cursive;">
        <strong>DESIRED DOC   </strong>
      </a>

		</div>
		
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

			<ul class="nav navbar-nav">
				<li><a href=""></a></li>
				<li class="active"><a href="reg_welcome.php">Home</a></li>
				<li><a href="reg_cdl.php">C</a></li>
				<li><a href="reg_cppdl.php">C++</a></li>
				<li><a href="reg_csharpdl.php">C#</a></li>
				<li><a href="reg_javadl.php">JAVA</a></li>
				<li><a href="test.php">My Account</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li>
					<div class="form-group">
						<form action="#" method="post" style="padding-top:12px;nav-right:auto;">
							<input type="submit" class="btn btn-danger " style="float:right" value="Sign-out" name="sout"/>
						</form>
					</div>

          <?php
            if ( isset( $_POST[ "sout" ] ) ) 
            {
              if ( @$_POST[ "sout" ] == "Sign-out" ) 
              {
							  session_destroy();
							  header( "Location:reg_login.php" );
						  }
            }
          ?>
          
				</li>
			</ul>
		</nav>
	</div>
</header>