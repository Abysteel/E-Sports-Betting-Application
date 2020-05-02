
<html>
<link rel="stylesheet" type="text/css" href="account.css" />
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #8f24ff;
  color: white;
}
</style>
</head>
<body style="background-color:#cc99ff;">

  <div class="topnav">
    <a href="tournament.php">Home</a>
    <a href="account.php">Your Account</a>
    <a href="results.php">Results</a>
    <a href="logout.php"> Logout </a>
    <a href="videos.php"> EVO Grand Finals</a>
    <a href="about.php">About</a>
  </div><br>

</body>
</html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  right: 5000px;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  right: 100;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  margin-left: -50px;
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>
<p align ="right">Click for larger image.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<img id="myImg" align="right" style="margin:0px 40px" "border:100px" src="DOA6BoxArt.png" alt="Box Art"  style="width:50%;max-width:100px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<audio id="my_audio" src="toasty.mp3"></audio>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  document.getElementById("my_audio").play();
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

<html>
<body style="background-color:#cc99ff;">

<p style="font-size:50px;">Dead or Alive 6 Tournament Results</p>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>
  <style>
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 884px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }

  .button {background-color: #9213f2;} /* Purple */
  </style>

<input type="button" onClick="history.go(0)" class="button" value="Cycle Tournament"></button>

</body>
</html>

<pre style="font-size:20px">
<?php

// the array
$arrX = array("XCaLibur BLadeZ", "Killyxx", "Siologica", "Simazu", "Gehaktbal");

// get random index from array $arrX
$randIndex1 = array_rand($arrX);
$randIndex2 = array_rand($arrX);
$randIndex3 = array_rand($arrX);
$randIndex4 = array_rand($arrX);
$randIndex5 = array_rand($arrX);

// output the value for the random index
echo '<div align="center">', $arrX[$randIndex5],'&nbsp','&nbsp',"- Is Your Winner!","<br>";
echo $arrX[$randIndex4],"<br>";
echo $arrX[$randIndex3],"<br>";
echo $arrX[$randIndex2],"<br>";
echo $arrX[$randIndex1];

?>
</pre>

<img src="deadoralive2.jpg" alt="" width="1910" height="600">
</body>
</html>
