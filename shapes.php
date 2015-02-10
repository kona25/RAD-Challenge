<?php
$history = "";
$quantity;

function randomrect($c)
{
  $top;
  $left;
  $x;
  $y; $colorr; $colorg; $colorb;
  $top = rand(40,600); // top position
  $left = rand(1,800); // left position
  $x = rand(10,30);    // x dimension of rectangle
  //$y = rand(10,30);    // y dimension of rectangle
  $colorr = rand(0,255);
  $colorg = rand(0,255);
  $colorb = rand(0,255);
  $r = "<div style=\"position:absolute;text-align:center;color:white;opacity:0.4;border-radius:0px;top:{$top}px;left:{$left}px;padding-left:{$x}px;padding-right:{$x}px;padding-top:{$x}px;padding-bottom:{$x}px;background-color:black;";
 
  if($c === 1){$r .= "border-radius:1000px;";}
  $r .= "\"></div>";
  return $r;
  //background-color:rgb($colorr,$colorg,$colorb);
}

if(isset( $_POST['history']) ) {
  $history .=  $_POST['history'];
}
else {
  $history = "";
}
if(isset( $_POST['quantity']) ) {
  $quantity = $_POST['quantity'];
}
else {
  $quantity = 0;
}
if(isset( $_POST['shape'])) {
  $circle = 0;
}
else {
  $circle = 5;
}
if($circle === 0)
  {
if( strcmp($_POST['shape'], "circle") == 0 ) {
  $circle = 1;
}
  }


for($i = 0; $i < $quantity; $i++)
{
  $history .= htmlentities(randomrect($circle), ENT_QUOTES);
}
if(isset( $_POST['Reset'])) {
  $history = "";
}
?>
<!doctype html>
<head><title>shapes.php</title>
</head>
<body>
<div>
<form method=post action='shapes.php'>
  How many?<input type=text name=quantity value='<?=$quantity?>'>
  <input type=hidden name=history value='<?=$history?>'>
  <select name=shape>
    <option value="square">square</option>
    <option value="circle"
    <?php if($circle === 1) {echo"selected";} ?>
    >circle</option>
  </select>
  <input type=submit value='Generate'>
  <input type=submit name='Reset' value='Reset'>
</form>
</div>
<?php
echo html_entity_decode($history, ENT_QUOTES);