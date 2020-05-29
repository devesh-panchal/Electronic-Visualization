<?php
	//echo "hi";
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		//echo "hello1";
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		//$password_hash=md5($password);
		if(!empty($username) && !empty($password))
		{//echo 'hiee';
			//echo "hello2";
			include "connect.php";
			//echo "hello";
			$query= "SELECT username , password from login where username ='$username' and password = '$password'";
			if($query_run=mysqli_query($con,$query))
			{;
				$query_num_rows=mysqli_num_rows($query_run);
				if($query_num_rows==0)
				{
					//echo 'in if';
					echo "<script>alert('Username Not Found. Please Register.');</script>";
					echo "<script>window.location='http://localhost:8085/ev/loginindex.php';</script>";
					
				}
				else if($query_num_rows==1)
				{//echo 'in else if';
			
					$user_id=mysqli_fetch_assoc($query_run);
					session_start();                                  //start
					$_SESSION["username"] = $user_id["username"];    //create session
					echo $_SESSION["username"];  
                    echo "<script type='text/javascript'>alert('Success!');</script>";					
					//echo "<script>alert('Username .');</script>";
					echo "<script>alert('login successful');</script>";
					echo "<script>alert('login successful');</script>";
					var_dump(header("Location: http://localhost:8085/ev/loginindex.php"));
					//include ‘my_library_item.php’;					//redirect

				}
			}
			else
			{	
				//echo 'hiee';
				header("Location:web/signin/index.php");
			}
		}
		else
		{
			//echo 'else';
			echo "<script>alert('Enter Correct USERNAME and PASSWORD.');</script>";
			header("Location:web/signin/index.php");
		}
	}
	//else
		//echo'in outer else';
?>

