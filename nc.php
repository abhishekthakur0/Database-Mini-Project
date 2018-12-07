<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="box.css">
    <link rel="stylesheet" type="text/css" href="menubar.css">
    <link rel="stylesheet" type="text/css" href="pop.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>  
     header
{
    background-color:#191970;
	padding: 1px;
    font-size: 15px;
    color: white;
}
footer {
    background-color: #191970;
    padding: 20px;
    text-align: center;
    color: white;
    margin-top: 100px;
    
}
</style>

	<title>Supreme Court Of India</title>
 
</head>
<header>
    	<center><h1>Supreme Court Of India</h1></center>
    	<center><h3>|| यतो धर्मस्ततो जयः ||</h3></center>
</header>

		<div class="slideshow-container">
<div class="mySlides fade">
  
  <img src="slide1.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  
  <img src="slide4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  
  <img src="slide3.jpg" style="width:100%">
  <div class="text"></div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>
<ul>
  <li><a  href="home.html">Home</a></li>
  <li><a class="active" href="#nc.html">Notices &amp; Circulars</a></li>
    <li><a  href="do.html">Daily Orders</a></li>
    <li><a   href="ef.html">E-Filling</a></li>
  
    <li style="float:right"><a  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
    <li style="float:right"><a  href="aboutthecourt.html">About The Court</a></li>
</ul>
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="supreme.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
        <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <body>
        <div class="card">
  <div class="header">
    <h3>Quick Links</h3>
  </div>

  <div class="container">
     <a rel="Click Here" style="text-decoration:none" href="judges.php"><h5>&#9679;Judges</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="advocates.php"><h5>&#9679;Advocates</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="casestatus.php"><h5>&#9679;Case Status</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="jv.php"> <h5>&#9679;Judgements &amp; Verdicts</h5></a>
    <h5>&#9679;Caveat</h5>
    <h5>&#9679;Case Category</h5>
    <h5>&#9679;Court Fees</h5>
  </div>
</div>
</body>
<footer>
  <p>Government Of India &#9679; 2018</p>
</footer>
</html>