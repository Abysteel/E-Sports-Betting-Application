<!DOCTYPE html>

<?php
session_start();
$username=$_SESSION['username'];
?>

<link rel="stylesheet" type="text/css" href="account.css" />
<html>
<head>
<link rel="import" href="tekken.php">

</style>

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

</body>
</html>

<center><h3><div id="head2" style="font-family:'Courier New'" class="col-xs-6"><h4><?php echo "Welcome   ", "$username"  ?></h3></div></center>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
</head>

<!--The form starts here-->
<body>
<form action="" method="GET" value="result">

<center><h2 style="color:purple"><div id="head2" class="col-xs-6"><p><?php echo "$username", "'s Account Card"  ?></h2></div></center>
<form action="tekken.php" method="post" value="result">
<div class="card">
<img src="jade.png" alt="John" style="width:100%">


  <p style="color:purple" class="title">E-Sports Betting Member</p>
  <p>Your Starting Balance is 100 Credits</p>
  <center><p><div id="head2" class="col-xs-6"><p><?php echo "$username", "'s Winnings Are:"  ?></p></div></center>


<!--Receive and print the results of the bet here-->
  <script>

  var queryString = decodeURIComponent(window.location.search); //parsing
  queryString = queryString.substring(1);
  var queries = queryString.split("&");
  for (var i = 0; i < queries.length; i++)
  {
    document.write(queries[i] - 100 + "<br>");
  }




</script>
</form>

<html>
<body>
<center><p><div id="head2" class="col-xs-6"><p><?php echo "$username", "'s Balance Is:"  ?></p></div></center>
<div id="result"></div>

<!--I tried to show pop up text here on win
<script>
if ("?" > 0 ) {
document.write("YOU ARE A WINNER!!!");
}
</script>-->

<!--play soundbyte-->
<audio id="my_audio" src="getoverhere.mp3"></audio>
<script>
  window.onload = function() {
    document.getElementById("my_audio").play();
}
</script>


<script>
// Check browser support
// Use local storage here to keep results after refresh.
if (typeof(Storage) !== "undefined") {
  // Store
  localStorage.setItem("balance", queryString);
  // Retrieve
  document.getElementById("result").innerHTML = localStorage.getItem("balance");
} else {
  document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}

</script>
</body>
</html>

  <p style="color:purple" class="title" color="black">E-Sports Credits</p>
  <img src="yoshi.jpg" alt="" width="300" height="220">

</body>
</html>
