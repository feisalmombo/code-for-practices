<?php
// Quadratic equation: ax^2 + bx + c = 0
// X = -b +- sqrt(b*2 - 4*a*c) / 2*a

// coefficients
$a = 2;
$b = 4;
$c = -6;

// calculate discriminant
$discriminant = $b * $b - 4 * $a * $c;

// check if the discriminant is negative
if ($discriminant < 0) {
  echo "The quadratic equation has no real roots.";
} else {
  // calculate roots
  $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
  $root2 = (-$b - sqrt($discriminant)) / (2 * $a);

  // output results
  echo "Root 1 = " . $root1 . "<br>";
  echo "Root 2 = " . $root2;
}
?>