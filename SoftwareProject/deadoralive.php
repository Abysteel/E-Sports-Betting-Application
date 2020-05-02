<!Doctype html>

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

<html>
<style>
body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("tekken7.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.btn-group button {
  background-color: #8f24ff; /* Purple background */
  border: 1px solid white; /* White border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}





</style>
<body>

  <?php
    $arrX = array("XCaLibur BLadeZ", "Killyxx", "Siologica", "Shimazu", "Gehaktbal");

    // get random index from array $arrX
    $randIndex1 = array_rand($arrX);
    $randIndex2 = array_rand($arrX);
    $randIndex3 = array_rand($arrX);
    $randIndex4 = array_rand($arrX);
    $randIndex5 = array_rand($arrX);
  ?>

<h1 style="color:purple"><center>Dead or Alive 6 Tournament</h1>
<p><center>Please choose your Winner<p>

  <html>
  <body>

  <form action="" align="center" method="POST" value="result">

    <script>
    var snd = new Audio("falconpunch.mp3");
    function myFunction() {
    confirm("You have successfully placed a bet!");
    }
    </script>
    <p><font color="purple">XCaLibur BLadeZ</font><p>
      Odds&nbsp;<input type="text" name="first_no" value="20/1">
      <input type="number" onclick="snd.play()" name="second_no" min="5" max="20">
      <input onclick="myFunction()" onclick="snd.play()" type="submit" name="submit" value="Place Bet">

<!--Calculate the odds here-->
        <?php
            $sum="";
            if (isset($_POST['submit']) && "XCaLibur BLadeZ" == $arrX[$randIndex5])
            {
              $first_no=$_POST['first_no'];
              $second_no=$_POST['second_no'];
              $sum = (floatval($first_no) * $second_no + $second_no);
            }
            else if (isset($_POST['submit']))
            {
              $first_no=$_POST['first_no'];
              $second_no=$_POST['second_no'];
              $sum = (floatval($second_no) - $second_no - $second_no);
            }
        ?>

  <input type="hidden" name="result" value="<?php echo $sum; ?> ">

  <script>
  var value1="foo";
  var queryString = "?" + <?php echo $sum + 100; ?>;
  window.location.href = "account.php" + queryString;

  </script>
  </form>
  </body>
  </html>

  <html>
  <body>
  <form action="" align="center" method="POST">

    <script>
    var snd = new Audio("falconpunch.mp3");
    function myFunction() {
    confirm("You have successfully placed a bet!");
    }
    </script>
    <p><font color="purple">Killyxx</font><p>
      Odds&nbsp;<input type="text" name="third_no" value="8/1">
      <input type="number" onclick="snd.play()" name="fourth_no" min="5" max="20">
      <input onclick="myFunction()" type="submit" name="submit2" value="Place Bet"></button>


      <?php
          $sum="";
          if (isset($_POST['submit2']) && "Killyxx" == $arrX[$randIndex5])
          {
            $third_no=$_POST['third_no'];
            $fourth_no=$_POST['fourth_no'];
            $sum = (floatval($third_no) * $fourth_no + $fourth_no);
          }
          else if (isset($_POST['submit2']))
          {
            $third_no=$_POST['third_no'];
            $fourth_no=$_POST['fourth_no'];
            $sum = (floatval($fourth_no) - $fourth_no - $fourth_no);
          }
      ?>

  <input type="hidden" name="result" value="<?php echo $sum; ?> ">

  <script>
  var value1="foo";
  var queryString = "?" + <?php echo $sum + 100; ?>;
  window.location.href = "account.php" + queryString;
  </script>

  </form>
  </body>
  </html>

  <html>
  <body>
  <form action="" align="center" method="POST">

    <script>
    var snd = new Audio("falconpunch.mp3");
    function myFunction() {
    confirm("You have successfully placed a bet!");
    }
    </script>
    <p><font color="purple">Siologica</font><p>
      Odds&nbsp;<input type="text" name="fifth_no" value="16/1">
      <input type="number" onclick="snd.play()" name="sixth_no" min="5" max="20">
      <input onclick="myFunction()" type="submit" name="submit3" value="Place Bet"></button>


      <?php
          $sum="";
          if (isset($_POST['submit3']) && "Siologica" == $arrX[$randIndex5])
          {
            $fifth_no=$_POST['fifth_no'];
            $sixth_no=$_POST['sixth_no'];
            $sum = (floatval($fifth_no) * $sixth_no + $sixth_no);
          }
          else if (isset($_POST['submit3']))
          {
            $fifth_no=$_POST['fifth_no'];
            $sixth_no=$_POST['sixth_no'];
            $sum = (floatval($sixth_no) - $sixth_no - $sixth_no);
          }
      ?>

  <input type="hidden" name="result" value="<?php echo $sum; ?> ">

  <script>
  var value1="foo";
  var queryString = "?" + <?php echo $sum + 100; ?>;
  window.location.href = "account.php" + queryString;

  </script>

  </form>
  </body>
  </html>

  <html>
  <body>
  <form action="" align="center" method="POST">

    <script>
    var snd = new Audio("falconpunch.mp3");
    function myFunction() {
    confirm("You have successfully placed a bet!");
    }
    </script>
    <p><font color="purple">Shimazu</font><p>
      Odds&nbsp;<input type="text" name="seventh_no" value="14/1">
      <input type="number" onclick="snd.play()" name="eight_no" min="5" max="20">
      <input onclick="myFunction()" type="submit" name="submit4" value="Place Bet"></button>


      <?php
          $sum="";
          if (isset($_POST['submit4']) && "Shimazu" == $arrX[$randIndex5])
          {
            $seventh_no=$_POST['seventh_no'];
            $eight_no=$_POST['eight_no'];
            $sum = (floatval($seventh_no) * $eight_no + $eight_no);
          }
          else if (isset($_POST['submit4']))
          {
            $seventh_no=$_POST['seventh_no'];
            $eight_no=$_POST['eight_no'];
            $sum = (floatval($eight_no) - $eight_no - $eight_no);
          }
      ?>

  <input type="hidden" name="result" value="<?php echo $sum; ?> ">

  <script>
  var value1="foo";
  var queryString = "?" + <?php echo $sum + 100; ?>;
  window.location.href = "account.php" + queryString;

  </script>

  </form>
  </body>
  </html>

  <html>
  <body>
  <form action="" align="center" method="POST">

    <script>
    var snd = new Audio("falconpunch.mp3");
    function myFunction() {
    confirm("You have successfully placed a bet!");
    }
    </script>
    <p><font color="purple">Gehaktbal</font><p>
      Odds&nbsp;<input type="text" name="ninth_no" value="7/1">
      <input type="number" onclick="snd.play()" name="tenth_no" min="5" max="20">
      <input onclick="myFunction()" type="submit" name="submit5" value="Place Bet"></button>


      <?php
          $sum="";
          if (isset($_POST['submit5']) && "Gehaktbal" == $arrX[$randIndex5])
          {
            $ninth_no=$_POST['ninth_no'];
            $tenth_no=$_POST['tenth_no'];
            $sum = (floatval($ninth_no) * $tenth_no + $tenth_no);
          }
          else if (isset($_POST['submit5']))
          {
            $ninth_no=$_POST['ninth_no'];
            $tenth_no=$_POST['tenth_no'];
            $sum = (floatval($tenth_no) - $tenth_no - $tenth_no);
          }
      ?>

  <input type="hidden" name="result" value="<?php echo $sum; ?> ">

  <script>
  var value1="foo";
  var queryString = "?" + <?php echo $sum + 100; ?>;
  window.location.href = "account.php" + queryString;

  </script>

  </form>
  </body>
  </html>

<img src="deadoralive6.jpg" alt="" width="1950" height="800">
</html>
