<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<style>
.button {
  display: inline-block;
  background-color: #247AFD;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  margin: 4px 2px;
  border-radius: 30px;
  cursor: pointer;
  font-family: Arial;
}
.logout {
  display: inline-block;
  background-color: red;
  border: none;
  color: white;
  padding: 10px 20px;
  border-radius: 30px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: Arial;
}
body {
  background-color: #fff;
  color: #333;
  font-family: Arial;
}
.wrapper{ 
  display: flex;
  justify-content: space-between;
  width: 1200px;
  margin: 2rem auto;
  flex-wrap: wrap;
}
.box{
  display: inline-block;
  margin: 20px;
  width: 300px;
  height: 250px;
  text-align: center;
  background-color: #3a8ffe;
  padding: 1.5rem;
  border-radius: 30px;
}
.box:hover{
  transition: 0.5s ease-in-out;
  background-color: lightcoral;
  color: white;
}
.box img{
  width: 100px;
  background-color: white;
  border-radius: 50%;
}
.box img:hover{
  transform: scale(1.1);
  box-shadow: 0px 0px 15px white;
}
.box p {
  color: white;
  font-weight: bold;
}
/* Styles for dark mode */
body.dark-mode {
  background-color: #262626;
  color: #fff;
}

 </style>
<!DOCTYPE html>
<html>
<head>
<!--- Dark mode button --->
<button id="dark-mode-toggle" class="button">Toggle Dark Mode</button>
	<title>rTracker Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Welcome to rTracker</h2>
</div>
	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <div class="box">
        <a href="create.php" style="text-decoration: none;">
        <img src="images/createreceipte.png" alt="">
        <P>
          <br>
          <br>
          Track a new receipt!
    </p>
    </div>
    <div class="box">
      <a href="view.php" style="text-decoration: none;">
        <img src="images/view1.png" alt="">
        <p>
          <br>
          <br>
          View your history!
    </p>
    </div>
    	<p><br/><br/> <a href="index.php?logout='1'" class="logout">Logout</a> </p>
    <?php endif ?>
</div>
<script>
//Check if user has set preference for dark mode
const prefersDarkMode = localStorage.getItem('dark-mode');
if (prefersDarkMode === 'true') {
  document.body.classList.add('dark-mode');
}

// Add event listener to toggle button
const toggleButton = document.getElementById('dark-mode-toggle');
toggleButton.addEventListener('click', function() {
  // Toggle class on body element
  document.body.classList.toggle('dark-mode');
  // Store preference in local storage
  localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode'));
});
</script>
</body>
</html>
