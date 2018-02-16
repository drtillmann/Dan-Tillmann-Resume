<?php session_start();

//$_SESSION['password_entered'] = $_POST['password'];

class Password{
	private static $password = "abc123";
	
	public function getPassword(){
	return self::$password;
	}
}

$time = trim($_GET['time']);
$password_entered = trim($_GET['pe']);
$Password = new Password();
$p = $Password->getPassword();
//echo "Password from Object ".$p;
//echo "<br/>Password Entered: ".$password_entered;
//echo "<br/>Time from login: ".$time;


if($password_entered != $p){
	header('Location:index.php?entered=incorrect');
}
else{
// set your e-mail address first, where you'll receive the notifications
$yourEmailAddress = "drtillmann@gmail.com";
$emailSubject = "Dan Tillmann Resume";
$emailContent = "Someone visited my resume!";
$emailContent = $emailContent." at ".$time;
// send the message
mail($yourEmailAddress, $emailSubject, $emailContent);
//redirect back to resume page
header('Location:resume_page.php');
}
?>