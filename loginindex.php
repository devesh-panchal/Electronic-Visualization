<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap Login/Signup Modal Form Design</title>

    <!-- Bootstrap core CSS -->
    <link href="loginassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="loginassets/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <?php
  session_start();

	if(isset($_SESSION['username']))
	{
		$userName = $_SESSION['username'];	
	}
  require_once("login/connect.php");
  ?>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}
.isDisabled {
  color: currentColor;
  cursor: not-allowed;
  opacity: 0.5;
  text-decoration: none;
}

.header {
  overflow: hidden;
  background-color: white;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 20px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: white;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
<!--dropdown-->
<style>
.dropbtn {
    background-color: #0099ff;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	border-radius : 5px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: blue;
}

</style>
<style>


.hero-image {
  background-image: url("logo2.png");
  height: 80%;
  width : 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  font-size: 2000px;
  font-size: xx-large;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: yellow;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
</style>
  <body>
  
<img src="logo2.png" width="1400" height="800">

  <div class="hero-text">
    <h1>Welcome To The World Of Electronics Visualization.</h1>
			<P>To Make You Interested And Interactive</p> 

</div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
	  
	  <br>
        <div class="navbar-header">
          
          <a  href="loginindex.php" ><img src="evlogo.jpg" width="200" height="50"></a>
		  
        </div>
		
		
          
        <div id="navbar" class="navbar-collapse collapse">
          
          <!--<ul class="nav navbar-nav navbar-right">
		  <li><a href="" target="_blank">Circuits</a></li>
            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-signup-modal">Login/Signup</a></li>
          </ul>-->
		  <?php
				if(isset($_SESSION["username"]))
				{
					echo("<ul class='nav navbar-nav navbar-right'>
					<li>
					<div class='dropdown'>
		  <button class='dropbtn'>Circuits</button>
		  <div class='dropdown-content'>
    <a href='edc.php'>EDC</a>
    <a href='de.php'>DE</a>
	</div>
	</div></li>
            <li><a href='login/logout.php'>Logout</a></li>
          </ul>");
				}
				else
				{
					echo("<ul class='nav navbar-nav navbar-right'>
		 <li><a class='isDisabled'>Circuits</a></li>
            <li><a href='javascript:void(0)' data-toggle='modal' data-target='#login-signup-modal'>Login</a></li>
          </ul>");
				}
				
			?>
			<ul class="nav navbar-nav navbar-right">
				 <li><a href="">Support</a></li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right">
				 <li><a href="">Contact</a></li>
				 </ul>
        </div><!--/.nav-collapse -->
		
		<br>
      </div>
    </nav>
    
    <!-- Bootstrap Modal -->
		
		
		<!--Login, Signup, Forgot Password Modal -->
		<div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
  		<div class="modal-dialog" role="document">
    
    	<!-- login modal content -->
        <div class="modal-content" id="login-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Login Now!</h4>
      </div>
        
        <div class="modal-body">
          <form method="post" id="Login-Form" role="form" action="login/loginform.php">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="username"  type="text" class="form-control input-lg" placeholder="Enter username" required data-parsley-type="text" >
                </div>                      
            </div>
            
            
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input name="password" id="login-password" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                </div>                      
            </div>
            
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block btn-lg" color="blue">LOGIN</button>
          </form>
        </div>
        
        <div class="modal-footer">
          <p>
          <a id="FPModal" href="javascript:void(0)">Forgot Password?</a> | 
          <a id="signupModal" href="javascript:void(0)">Register Here!</a>
          </p>
        </div>
        
       </div>
        <!-- login modal content -->
        
        <!-- signup modal content -->
        <div class="modal-content" id="signup-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Signup Now!</h4>
      </div>
                
       <div class="modal-body">
          <form method="post" id="Signin-Form" role="form" action="login/register.php">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                </div>                     
            </div>
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="username"  type="text" class="form-control input-lg" placeholder="Enter username" required data-parsley-type="text">
                </div>                     
            </div>
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input name="password" id="passwd" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                </div>                      
            </div>
            
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input name="password" id="confirm-passwd" type="password" class="form-control input-lg" placeholder="Retype Password" required data-parsley-equalto="#passwd" data-parsley-trigger="keyup">
                </div>                      
            </div>
            
            
              <button type="submit" class="btn btn-success btn-block btn-lg">CREATE ACCOUNT!</button>
          </form>
        </div>
        
        <div class="modal-footer">
          <p>Already a Member ? <a id="loginModal" href="javascript:void(0)">Login Here!</a></p>
        </div>
        
      </div>
        <!-- signup modal content -->
        
        <!-- forgot password content -->
         <div class="modal-content" id="forgot-password-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Recover Password!</h4>
      </div>
        
        <div class="modal-body">
          <form method="post" id="Forgot-Password-Form" role="form">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                </div>                     
            </div>
                        
            <button type="submit" class="btn btn-success btn-block btn-lg">
              <span class="glyphicon glyphicon-send"></span> SUBMIT
            </button>
          </form>
        </div>
        
        <div class="modal-footer">
          <p>Remember Password ? <a id="loginModal1" href="javascript:void(0)">Login Here!</a></p>
        </div>
        
      </div>        
        <!-- forgot password content -->

		
    
    	<!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
		</div>
        <!--Login, Signup, Forgot Password Modal -->
              
        
	<!-- Bootstrap Modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="loginassets/jquery.min.js"></script>
    <script src="loginassets/js/bootstrap.min.js"></script> 
    <script src="loginassets/parsley.min.js"></script>
    <script src="loginassets/modal.js"></script> 
	
	
	<br>
	<br>
	<br>
	<br>
	
    
  
</div>
  </body>
</html>
