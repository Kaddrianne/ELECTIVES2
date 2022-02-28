<!DOCTYPE hmtl>
<html>
    <head>
        <title>
            OPERATOR and CONTROL STATEMENTS
        </title>
    <head>
<body>

<?php
define ("BR", "<br/>");

$Pre = 93.50;
$Mid = 90.10;
$Fin = 96.55;
$finalgrade = ($Pre + $Mid +$Fin)/3;

echo "Final Grade: " . $finalgrade. BR;

    if ($finalgrade >= 86 && $finalgrade <= 100)
        echo "Ratings: Excellent" . BR;
    elseif ($finalgrade >=75 && $finalgrade <=85)
        echo "Ratings: Very Good" . BR;
    else
        echo "Ratings: FAILED" . BR;



?>
</body>
</html>