<!DOCTYPE html>

<?php
// Starting session
session_start();
$username=$_SESSION['username'];
?>
<link rel="stylesheet" type="text/css" href="home.css"/>
<?php
include("auth.php");
?>

<html>
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
</div>

<audio id="my_audio" src="MK.mp3" loop="loop"></audio>

<!--Play MK11 Theme Song-->
<script>
window.onload = function() {
    document.getElementById("my_audio").play();
}
</script>

</body>
</html>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body style="background-color:#cc99ff;">

<center><h2><div id="head2" style="font-family:'Courier New'" class="col-xs-6"><h4><?php echo "Welcome   ", "$username"  ?></h2></div></center>
<center><h1 style="font-size:45px; color:purple" >This is Your Home Page</h1>
<center><h1 style="font-size:30px;">Please Choose Your Tournament!</h1>

<div id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">
  <div class="column" style="background-color: rgba(100, 100, 100, 0.5);">
    <center><h2 style="color:black"><u>Tournament 1</u></h2>

      <style>
          .button1 {
            background-color: #932EF2;
            border: none;
            color: white;
            padding: 20px 420px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
          }
</div>
          .button1 {background-color: #932EF2;} /* Grey */
      </style>

          <center><a href='tekken.php'><button onclick="snd.play()" class="button1">Tekken 7</button>

  <script>
      var snd = new Audio("yooo.mp3");
  </script>
  </div>

  <div class="column" style="background-color: rgba(100, 100, 100, 0.5);">
    <center><h2 style="color:black">Tournament 2</h2>

      <style>
          .button2 {
            background-color: gray;
            border: none;
            color: white;
            padding: 20px 385px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
          }

          .button2 {background-color: #CFA8F4;} /* Grey */
      </style>

          <center><a href='soulcalibur.php'><button onclick="snd.play()" class="button2">Soul Calibur 6</button>

  <script>
      var snd = new Audio("yooo.mp3");
  </script>
  </div>

  <div class="column" style="background-color: rgba(100, 100, 100, 0.5);">
    <center><h2 style="color:black">Tournament 3</h2>

      <style>
          .button {

            background-color: gray;
            border: none;
            color: white;
            padding: 20px 380px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
          }

          .button1 {background-color: #CFA8F4;} /* Grey */
      </style>

          <center><a href='mortalkombat.php'><button onclick="snd.play()" class="button">Mortal Kombat 11</button>

  <script>
      var snd = new Audio("yooo.mp3");
  </script>
  </div>

  <div class="column" style="background-color: rgba(100, 100, 100, 0.5);">
    <center><h2 style="color:black">Tournament 4</h2>

      <style>
          .button {
            background-color: #932EF2;
            border: none;
            color: white;
            padding: 20px 380px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
          }

          .button {background-color: #CFA8F4;} /* Grey */
      </style>

          <center><a href='deadoralive.php'><button onclick="snd.play()" class="button">Dead or Alive 6</button>

  <script>
      var snd = new Audio("yooo.mp3");
  </script>
  </div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<img src="yoshi2.jpg" alt="" width="1900" height="600">
</body>
</html>
