<!DOCTYPE HTML>  
<html>
<style>
.error {color: #FF0000;}
</style>
    <link href='style.css' rel='stylesheet'>

    <!-- NAVIGATION BAR -->
    <ul>
        <li><a href=index.html> Home </a></li>
        <li><a href=random-nugg.html> Random Nugg Generator </a></li>
        <li><a> Find a Nugg </a></li>
        <li><a href=marry-a-nugg.html> Marry a Nugg </a></li>
        <li><a> But, What is a Nugg? </a></li>
        <li><a> WTF is This? </a>
            <ul>
                <li><a>The Team</a></li>
                <li><a>Our Mission</a></li>
            </ul>
        </li>
    </ul>
<head>
<meta charset="UTF-8">
<title>Chicken Nuggs</title>
</head>
<body>  

<?php
$firstErr = $lastErr = $wit1Err = $wit2Err = "";
$first = $last = $wit1 = $wit2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first"])) {
    $firstErr = "First name is required";
  } else {
    $first = test_input($_POST["first"]);
    // Check if name only contains letters and whitespace.
    if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
      $firstErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["last"])) {
    $lastErr = "Last name is required";
  } else {
    $last = test_input($_POST["last"]);
    // Check if name only contains letters and whitespace.
    if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
      $lastErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["wit1"])) {
    $wit1Err = "First witness name is required";
  } else {
    $wit1 = test_input($_POST["wit1"]);
    // Check if name only contains letters and whitespace.
    if (!preg_match("/^[a-zA-Z ]*$/",$wit1)) {
      $wit1Err = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["wit2"])) {
    $wit2Err = "Second witness name is required";
  } else {
    $wit2 = test_input($_POST["wit2"]);
    // Check if name only contains letters and whitespace.
    if (!preg_match("/^[a-zA-Z ]*$/",$wit2)) {
      $wit2Err = "Only letters and white space allowed"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<br><br>
<h2>Marry a Nugg</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" name="first" value="<?php echo $first;?>">
  <span class="error">* <?php echo $firstErr;?></span>
  <br><br>
  Last name: <input type="text" name="last" value="<?php echo $last;?>">
  <span class="error">* <?php echo $lastErr;?></span>
  <br><br>
  First witness: <input type="text" name="wit1" value="<?php echo $wit1;?>">
  <span class="error">* <?php echo $wit1Err;?></span>
  <br><br>
  Second witness: <input type="text" name="wit2" value="<?php echo $wit2;?>">
  <span class="error">* <?php echo $wit2Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<!--
<?php
echo "<h2>Your Input:</h2>";
echo $first;
echo "<br>";
echo $last;
echo "<br>";
echo $wit1;
echo "<br>";
echo $wit2;
echo "<br>";
?>
-->

<!-- MARRIAGE CERTIFICATE GENERATOR -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript">
    var canvas = document.createElement("canvas")
    canvas.width = 1000;
    canvas.height = 500;
    var ctx = canvas.getContext("2d")
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, 1000, 500);
    ctx.font = "30px Arial";
    ctx.textAlign = "center";
    ctx.fillStyle = "#000000";
    ctx.fillText("Marriage Certificate", 500, 50);
    var first = "<?php echo $first ?>"
    ctx.fillText(first, 500, 100);
    var img = document.createElement("img");
    img.src = canvas.toDataURL("image/png");
    document.body.appendChild(img);


</script>
</body>
</html>

