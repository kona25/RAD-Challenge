<?php
echo "<body style='cursor:progress'"; // hehe
// my php program isn't bogging down your computer
// I just added this cool cursor style for fun =D

function randomrect()
{
  $top;
  $left;
  $x;
  $y; $colorr; $colorg; $colorb;
  $top = rand(1,1200); // top position
  $left = rand(1,1300); // left position
  $x = rand(1,50);    // x dimension of rectangle
  $y = rand(1,50);    // y dimension of rectangle
  $colorr = rand(0,255);
  $colorg = rand(0,255);
  $colorb = rand(0,255);
  echo "top:{$top}px;left:{$left}px;padding-left:{$x}px;padding-right:{$x}px;padding-top:{$y}px;padding-bottom:{$y}px;background-color:rgb($colorr,$colorg,$colorb);";
}

echo "<!doctype html><head><title>create.php</title></head><body>";

for($i = 0; $i < 500; $i++)
  {
    echo "<div style=\"position:absolute;text-align:center;color:white;opacity:0.4;border-radius:20px;";
    randomrect();
    echo "\">$i</div>";
  }

for($i = 0; $i < 500; $i++)
  {
    echo "</div>";
  }

echo "</body>";