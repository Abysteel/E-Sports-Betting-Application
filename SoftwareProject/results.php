<!DOCTYPE html>

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
  </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 150px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<center><h2 style="color:purple">Results Page - Please choose a Tournament</h2>

<div class="row">
  <div class="column" style="background-color:rgba(100, 100, 100, 0.5);">
    <center><h2 style="color:purple">Tournament 1</h2>
    <center><p>Tekken 7</p>
    <style>
    .button {
      background-color: rgba(100, 100, 100, 0.5);
      border: none;
      color: white;
      padding: 9px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 0px 2px;
      cursor: pointer;
    }

    .button {background-color: rgba(100, 100, 100, 0.9;} /* Purple */
    </style>
    <a href='tekkenresults.php'><button type="button" class="button">Press for Results</button></a><br><br>
  </div>
  <div class="column" style="background-color:rgba(100, 100, 100, 0.5);">
  <center><h2 style="color:purple">Tournament 2</h2>
  <center><p>Soul Calibur 6</p>
  <style>
  .button {
    background-color: rgba(100, 100, 100, 0.5);
    border: none;
    color: white;
    padding: 9px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 2px;
    cursor: pointer;
  }

  .button {background-color: rgba(100, 100, 100, 0.9;} /* Purple */
  </style>
  <a href='soulcaliburresults.php'><button type="button" class="button">Press for Results</button></a><br><br>
</div>
  <div class="column" style="background-color:rgba(100, 100, 100, 0.5);">
  <center><h2 style="color:purple">Tournament 3</h2>
  <center><p>Mortal Kombat 11</p>
  <style>
  .button {
    background-color: rgba(100, 100, 100, 0.5);
    border: none;
    color: white;
    padding: 9px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 2px;
    cursor: pointer;
  }

  .button {background-color: rgba(100, 100, 100, 0.9;} /* Purple */
  </style>
  <a href='mortalkombatresults.php'><button type="button" class="button">Press for Results</button></a><br><br>
</div>
  <div class="column" style="background-color:rgba(100, 100, 100, 0.5);">
  <center><h2 style="color:purple">Tournament 4</h2>
  <center><p>Dead or Alive 6</p>
  <style>
  .button {
    background-color: rgba(100, 100, 100, 0.5);
    border: none;
    color: white;
    padding: 9px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 2px;
    cursor: pointer;
  }

  .button {background-color: rgba(100, 100, 100, 0.9;} /* Purple */
  </style>
  <a href='deadoraliveresults.php'><button type="button" class="button">Press for Results</button></a><br><br>
</div>
</div>
<img src="finishhim.png" alt="" width="1960" height="600">
</body>
</html>
