 <?php
  $server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "good-times";

	$conn = mysqli_connect( $server, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);

	if(isset($_POST['cta-btn']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'] ;
		$message = $_POST['message'] ;

		$addMessageQuery = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('".$name."', '".$email."', '".$message."')";
		$run = mysqli_query($conn,$addMessageQuery) or die(mysqli_error());
		
		if($run){
			header('Location: http://localhost/ZZZ-FINALSV2/contact.php');
		} else{
			echo "not submitted";
		}
	}

  //SQL FUNCTIONS

	function execute($Query){ //Requires Query eg. "SELECT * FROM tbl"
		$conn = $GLOBALS['conn'];
		$Result = mysqli_query($conn ,$Query);
		return $Result; //Returns SQL Result - use loop to go through the data
	}
?> 


