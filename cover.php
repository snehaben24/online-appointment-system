<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>



</head>
 
<body>
<link rel="stylesheet" href="main.css">
    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><img src="img/logo.png" alt="logo"></div>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#">Manager Login</a></li>
            <li><a href="#">Admin login</a></li>
        </ul>
        

    </nav>
    
    <div class="container-fluid remove-vid marg">
	<div class="vid-parent">
	<video playsinline autoplay muted Loop>
	<source src="video/mixkit-medicine-pills-and-tablets-close-up-1776.mp4">
	</video>
    <div class="vid-overlay"></div>
    <div class="center">
				<h1>Skylabs</h1><br>
				<p style="text-align:center;color:black;font-size:30px;top:35%">Online Appointment Booking System</p><br>
				<button onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:50%;left:50%">Login</button>
				
			</div>
    <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="cover.php">
    <div class="imgcontainer">
		<span style="float:left"><h2>&nbsp&nbsp&nbsp&nbspLog In</h2></span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit" name="login">Login</button>
		
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" style="float:right">Don't have one?</button>
    </div>
  </form>
</div>
	</div>
</div>
</body>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>
 
</html>
    
</body>
</html>