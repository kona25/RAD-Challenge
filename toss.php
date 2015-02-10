<?php

function toss()
{
  return rand(0,1);

  static $last = 0;

  $last = !$last;
  return $last;
}

echo "<!doctype html>";
echo "<head>";
echo "<title>toss.php</title>";
echo "<style>\n";
echo "span { border: solid black 1px;
             margin-top: 5px;
          }\n";
echo "span.heads { border: solid black 1px;
                   border-radius: 5px; }\n";
echo "span.tails { border: solid black 1px;
                   border-radius: 5px;
                   background-color: black;
                   color: white;
                }\n";

echo "</style></head>\n";

$count = 1;
$previous = toss();

for($i=1;$i<10000;$i++)
  {
    $current = toss();
    if($current === $previous) {
      $count++;
    }
    else
      {
	$border = $count*2;
	if($current === 0) // heads
	  {
	    echo "<span class=\"heads\" style=\"font-size: {$count}em; border-radius: {$border}px;\">$count</span>";
	  }
	else
	  {
	    echo "<span class=\"tails\" style=\"font-size: {$count}em; border-radius: {$border}px;\">$count</span>";
	  }
	echo "<wbr>";
	$count = 1;
      }
    $previous = $current;
  }