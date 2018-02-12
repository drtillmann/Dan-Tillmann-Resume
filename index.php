<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Daniel Tillmann's Resume">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
<meta name="author" content="Daniel Tillmann">

<title>Daniel Tillmann's Login Page</title>
<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
<img alt="Profile Picture" src="images/profile.jpg">
<p>Welcome,<br><br> Please enter the password on the business card to see my information.</p>
<?php if(isset($_GET['entered'])){echo"<p style='color:red'>* Incorrect: Enter The Password Again *</p>";}else{}?>
<div id="input">
<input  <?php if(isset($_GET['entered'])){echo"class='red-border'";}else{}?> type="password" id="password" name="password" placeholder="password">
</div>
<button id="btnEnter" onclick="toEmail()">Enter</button>

<script>
function toEmail(){
	var time = Date();
	var pw = document.getElementById("password").value;
	//alert(time+" "pw);
	//window.location = "myEmail.php?pe="+pw+"&time="+time;
if(pw != "abc123"){
	window.location = "index.php?entered=incorrect";
}
else{
window.location = "resume_page.php";
}
}
</script>
</body>
</html>
