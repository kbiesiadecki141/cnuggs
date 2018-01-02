<!DOCTYPE HTML>  
<html>
<link href='style.css' rel='stylesheet'>
<style>
.error {color: #FF0000;}
.shadow{
  font-family: 'Satisfy', cursive; 
  font-size: 75px;
  text-shadow:
   -1px -1px 0 #000,  
   1px -1px 0 #000,
   -1px 1px 0 #000,
   1px 1px 0 #000;
}
#marriage-form{
  margin: auto;
  text-align: center;
  border: 2px solid black;
  background-color: white;
  opacity: 0.9;
  width: 50%;
  height: 30%;
}
</style>
    <link href='style.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Satisfy|Tangerine" rel="stylesheet"> 
<script src="https://www.w3schools.com/lib/w3.js"></script>
<head>
<meta charset="UTF-8">
<title>Chicken Nuggs</title>
</head>

<body>  
<div w3-include-html="nav.html"></div>

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
<h2 class="shadow">Marry a Nugg</h2>
<div id="marriage-form">
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
  <br>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/D3G176wz3u8?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

  <br><br>
  </div>
<!-- MARRIAGE CERTIFICATE GENERATOR -->
<script>
    var canvas = document.createElement("canvas")
    canvas.width = 1000;
    canvas.height = 600;
    var ctx = canvas.getContext("2d")
    ctx.fillStyle = "white";
    ctx.fillRect(0, 0, 1000, 600);
    ctx.font = "120px Tangerine";
    ctx.textAlign = "center";
    ctx.fillStyle = "#000000";
    ctx.fillText("Certificate of Marriage", 500, 100);
    var first = "<?php echo $first ?>"
    var last = "<?php echo $last ?>"
    var wit1 = "<?php echo $wit1 ?>"
    var wit2 = "<?php echo $wit2 ?>"
    
    if (first && last && wit1 && wit2) {
        d = new Date();
        months = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                  "October", "November", "December"];
        date = months[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
        ctx.font = "50px Tangerine";
        ctx.fillText("This certifies that", 500, 180);
        ctx.font = "60px Satisfy";
        ctx.fillText(first + " " + last, 500, 250);
        ctx.font = "40px Tangerine";
        ctx.fillText("and", 500, 300);
        ctx.font = "60px Satisfy";
        ctx.fillText("A Chicken Nugget", 500, 350);
        ctx.font = "40px Tangerine";
        ctx.fillText("Were Solemnly United In", 500, 420);
        ctx.fillText("The Bonds of Holy Matrimony", 500, 470);
        ctx.fillText("On " + date, 500, 520);
        ctx.fillText("In the presence of " + wit1 + " and "+wit2, 500, 570);
        
        var img = document.createElement("img");
        img.src = canvas.toDataURL("image/png");
        img.setAttribute('style', "position:absolute; width:75%; margin: 5% 12% 5% 12%;");
        document.body.appendChild(img);
    } 
</script>
<script>
w3.includeHTML();
</script>
</body>
</html>

